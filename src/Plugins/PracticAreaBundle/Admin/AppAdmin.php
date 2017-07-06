<?php
/**
 * Created by PhpStorm.
 * User: barengiba
 * Date: 2/9/17
 * Time: 9:04 PM
 */

namespace Plugins\PracticAreaBundle\Admin;

use Doctrine\ORM\EntityManager;
use Plugins\PracticAreaBundle\Entity\PracticArea;
use Plugins\PracticAreaBundle\Entity\PracticAreaSubSection;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\AdminBundle\Validator\ErrorElement;

class AppAdmin extends Admin
{

    /**
     * @param ErrorElement $errorElement
     * @param PracticArea|PracticAreaSubSection $object
     */
    public function validate(ErrorElement $errorElement, $object)
    {
        // find object with the same uniqueField-value
        $other = $this->modelManager->findOneBy($this->getClass(), array('url' => $object->getUrl()));

        $errorElement
            ->with('metatitle')
                ->assertLength(array('max' => 70))
            ->end()
            ->with('metadescription')
                ->assertLength(array('max' => 155))
            ->end()
            ->with('metakeywords')
                ->assertLength(array('max' => 155))
            ->end();

        if (null !== $other && $other->getId() !== $object->getId()) {

            $errorElement
                ->with('url')
                ->addViolation('Url must be unique!')
                ->end();
        }
    }

    /**
     * @param RouteCollection $collection
     */
    protected function configureRoutes(RouteCollection $collection)
    {
        // to remove a delete route
//         $collection->remove('delete');
    }

    /**
     * @param PracticArea|PracticAreaSubSection $object
     * @return mixed|void
     */
    public function prePersist($object)
    {
        $object->setCreatedAt(new \DateTime());
        $object->setUpdatedAt(new \DateTime());

        $this->updateAmpContent($object, null);
        $this->checkUrl($object);
    }

    /**
     * @param PracticArea|PracticAreaSubSection $object
     * @return mixed|void
     */
    public function preUpdate($object)
    {
        /** @var PracticArea|PracticAreaSubSection $object */
        $object->setUpdatedAt(new \DateTime());

        /** @var EntityManager $em */
        $em = $this->getModelManager()->getEntityManager($this->getClass());
        $original = $em->getUnitOfWork()->getOriginalEntityData($object);

        $this->updateAmpContent($object, $original);
        $this->checkUrl($object);
    }

    /**
     * Check is url not empty, is empty - create url by name
     * @param PracticArea|PracticAreaSubSection $object
     */
    protected function checkUrl($object)
    {
        $url = $object->getUrl();
        if (empty($url)) {
            $object->setUrl($object->cleanUrl($object->getName()));
        }
    }

    

    /**
     * @param PracticArea|PracticAreaSubSection $object
     * @param null $original
     */
    protected function updateAmpContent($object, $original = null)
    {
        // If not changed in contet/ampContent
        if (!empty($original['ampContent']) && $original['content'] === $object->getContent() && $original['ampContent'] === $object->getAmpContent()) {
            return;
        }
				if (empty($original['ampContent']) || $original['content'] !== $object->getContent() && $original['ampContent'] === $object->getAmpContent()) {
	        $content = $object->getContent();

	        $ampTemplate = '<amp-img src="%s" alt="%s"  width="302" height="221" layout="fixed" ></amp-img>';

	        // change specific tags
	        preg_match('/<img.*?>/', $content, $results);
	        foreach ($results as $result) {
	            preg_match( '/src="([^"]*)"/i', $result, $src);
	            preg_match( '/alt="([^"]*)"/i', $result, $alt);
	//            preg_match( '/title="([^"]*)"/i', $result, $title);
	            $ampSrc = isset($src[1]) ? $src[1] : '';
	            $ampAlt = isset($alt[1]) ? $alt[1] : '';
	//            $ampTitle = isset($title[1]) ? $title[1] : '';

	            $ampImage = sprintf($ampTemplate, $ampSrc, $ampAlt);
	            $content = str_replace($result, $ampImage, $content);
	        }

	        $object->setAmpContent($content);
				}
    }

}
