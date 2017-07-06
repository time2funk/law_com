<?php
// src/AppBundle/Lib/Tools.php
namespace AppBundle\Lib;

class Tools {
    
    /**
     * Send email address
     * 
     * @param Controller $controller
     * @param string $subject
     * @param string $body
     * @param string $from
     * @param string $to
     * @param string $configuration
     * @throws \Exception
     */
    public static function sendEmail($controller, $subject, $body, $from = '', $to = '', $configuration = 'mailer') {
        if (empty($to)) {
            throw new \Exception('Incorrect reciepient email');
        }
        
        $message = \Swift_Message::newInstance()
            ->setSubject($subject)
            ->setTo($to)
            ->setBody($body, 'text/html')
        ;
        
        if (!empty($from)) {
            $message->setFrom($from);
        }
        
        $controller->get($configuration)->send($message);
    }
} 
