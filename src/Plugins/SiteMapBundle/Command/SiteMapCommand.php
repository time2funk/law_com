<?php
namespace Plugins\SiteMapBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class SiteMapCommand extends ContainerAwareCommand
{

    const TIMEOUT = 7200;  // timeout - 1 hour
    const MAX_DEPTH = 5;
    const HOST = 'www.sharovalaw.com';
    const SCHEME = 'https://';
    protected static $site;
    protected static $urls = array();
    protected static $lastModes = array();
    protected static $nofollow = array(); // Здесь ссылки, которые не должны попасть в sitemap.xml
    protected static $extensions = array('php', 'aspx', 'htm', 'html', 'asp', 'cgi', 'pl'); // Available extentions
    protected static $engine_root;
    protected static $max_depth = 0;

    protected function configure()
    {
        $this->setName('generate:site-map')->setDescription('Site map generator')
//             ->addArgument('name', InputArgument::OPTIONAL, 'Who do you want to greet?')
//             ->addOption('yell', null, InputOption::VALUE_NONE, 'If set, the task will yell in uppercase letters')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Start generate at: ' . date('Y-m-d H:i:s'));

        set_time_limit(self::TIMEOUT);
        self::$site = self::SCHEME . self::HOST;
        self::$urls[self::$site] = '0';
        self::$engine_root = $this->getContainer()->get('kernel')->getRootDir() . '/../web/';

        $this->getUrls(self::$site, array());

        $sitemapXML = '<?xml version="1.0" encoding="UTF-8"?>
				<!-- Last update of sitemap ' . date("Y-m-d H:i:s+06:00") . ' -->
				<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';

        foreach (self::$urls as $url => $value) {
            if (stripos($url, '?page=') === false) {
	            if (strpos($url, self::$site . '/practic-areas/') === 0) {
	                $priority = '1';
	                $changefreq = 'weekly';
	            } elseif (strpos($url, self::$site . '/blog/') === 0) {
	                $priority = '0.8';
	                $changefreq = 'daily';
	            } elseif (strpos($url, self::$site . '/news') === 0) {
	                $priority = '0.6';
	                $changefreq = 'weekly';
	            } elseif (strpos($url, self::$site . '/contacts') === 0) {
	                $priority = '0.5';
	                $changefreq = 'monthly';
	            } else {
	                $priority = '0.4';
	                $changefreq = 'monthly';
	            }

	            $lastmod = "";
	            if (!empty(self::$lastModes[$url])) {
	                $lastmod = self::$lastModes[$url];
	                $lastmod = "<lastmod>{$lastmod}</lastmod>";
	            }

	            if ((strpos($url, self::$site . '/about') !== 0) || (strpos($url, self::$site . '/about/yelena-sharova') === 0) || (strpos($url, self::$site . '/about/julia-greenberg') === 0)) {
	                $sitemapXML .= "\r\n<url><loc>{$url}</loc>{$lastmod}<changefreq>{$changefreq}</changefreq><priority>{$priority}</priority></url>";
	            }
						}
        }

        $sitemapXML .= "\r\n</urlset>";

        $sitemapXML = trim(strtr($sitemapXML, array('%2F' => '/', '%3A' => ':', '%3F' => '?', '%3D' => '=', '%26' => '&', '%27' => "'", '%22' => '"', '%3E' => '>', '%3C' => '<', '%23' => '#', '&' => '&')));

        $fp = fopen(self::$engine_root . 'sitemap.xml', 'w+');
        if (!fwrite($fp, $sitemapXML)) {
            $output->writeln('Error in write to file!');
        }
        fclose($fp);
        $output->writeln('Stop generate at: ' . date('Y-m-d H:i:s'));
        $output->writeln('Pages added: ' . count(self::$urls));
    }

    protected function getUrls($page, $in_array)
    {
        if (self::$urls[$page] == 1) return true;
        $content = file_get_contents($page);
        if (!$content) {
            unset(self::$urls[$page]);
            return false;
        }
        if (self::$max_depth >= self::MAX_DEPTH) {
            return false;
        }

        //Отмечаем ссылку как проверенную (мы на ней побывали)
        self::$urls[$page] = 1;

        //Собираем все ссылки со страницы во временный массив, с помощью регулярного выражения. Будут собраны все ссылки из тега а, атрибута href (HrEf, HREF...)
        preg_match_all("/<[Aa][\s]{1}[^>]*[Hh][Rr][Ee][Ff][^=]*=[ '\"\s]*([^ \"'>\s#]+)[^>]*>/", $content, $links);
        $link = $links[1];

        preg_match("/<!-- %my_last_update%:([0-9]{4}-[0-9]{2}-[0-9]{2}).*-->/", $content, $out);
        if (!empty($out[1])) {
            self::$lastModes[$page] = $out[1];
        }

        //Обрабатываем полученные ссылки, отбрасываем "плохие", а потом и с них собираем...
        $link_to_parse = array();
        for ($i = 0; $i < count($link); $i++) {
            // Если слишком много ссылок в массиве, то пора прекращать нашу деятельность (читай спецификацию)
            if (count(self::$urls) > 49999) {
                return false;
            }
            if (strpos($link[$i], 'mailto:') !== false || strpos($link[$i], 'skype:') !== false) continue;
            //Если не установлена схема и хост ссылки, то ставим..
            if (!strstr($link[$i], self::$site)) {
                $link[$i] = self::$site . $link[$i];
            }
            //Убираем якори у ссылок
            $link[$i] = preg_replace("/#.*/X", "", $link[$i]);
            //Узнаём информацию о ссылке
            $urlinfo = @parse_url($link[$i]);
            if (!isset($urlinfo['path'])) {
                $urlinfo['path'] = NULL;
            }
            //Если хост совсем не наш, ссылка на главную, на почту или мы её уже обрабатывали - то посылаем эту ссылку куда подальше...
            if ((isset($urlinfo['host']) && $urlinfo['host'] != self::HOST) || $urlinfo['path'] == '/' || isset(self::$urls[$link[$i]]) || strstr($link[$i], '@')) {
                continue;
            }
            //Если ссылка запрещена, то также скидываем её
            if (!empty(self::$nofollow)) {
                foreach (self::$nofollow as $of) {
                    if (strstr($link[$i], $of)) {
                        continue(2);
                    }
                }
            }

            //Если задано расширение ссылки и оно не разрешёно, то ссылка не проходит
            $tmp = explode('.', $urlinfo['path']);
            $ext = end($tmp);

            if ($ext != '' && strstr($urlinfo['path'], '.') && count(self::$extensions) > 0 && !in_array($ext, self::$extensions)) {
                continue;
            }
            if (in_array($link[$i], $in_array)) continue;

            $link_to_parse[] = $link[$i];
        }

        foreach ($link_to_parse as $link) {
            self::$urls[$link] = 0;

            self::$max_depth++;
            $this->getUrls($link, array_merge($link_to_parse, $in_array));
            self::$max_depth--;
        }

        return true;
    }
}
