<?php

namespace AppBundle\Controller;

use Plugins\ContentBundle\Entity\Content;

use AppBundle\Lib\Tools;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use AppBundle\Entity\Interest;

use AppBundle\Form\ContactForm;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends BaseController
{

    /**
     * Contact action
     */
    public function contactAction() {
        $contactMetaBlock = $this->getContentRepository()->findOneByKey(Content::CONTENT_META_CONTACT_PAGE);
        $whyUsBlockContacts = $this->getContentRepository()->findOneByKey(Content::CONTENT_WHY_US_CONTACTS);

        return $this->render('AppBundle:Contact:contact.html.twig', array(
                'whyUsBlockContacts'   => $whyUsBlockContacts,
                'page'         => $contactMetaBlock,
            ));
    }

    /**
     * Render form action
     */
    public function formAction() {
        $form = $this->createForm(new ContactForm(), new Interest());

        return $this->render('AppBundle:Contact:form.html.twig', array(
                'form' => $form->createView(),
                'formName' => ContactForm::FORM_NAME,
        ));
    }

    /**
     * Send action
     */
    public function sendAction(Request $request) {
        try {
            $interest = new Interest();
            $form = $this->createForm(new ContactForm(), $interest);

            if ($request->getMethod() == 'POST') {
                $form->bind($this->getRequest()->get(ContactForm::FORM_NAME));
                if ($form->isValid()) {
                    $interest->setIpAddress($request->getClientIp());
                    $this->getInterestRepository()->save($interest);

                    if ($this->isProd() || true) {
                        /* Send email to manager */
                        $body = $this->renderView('AppBundle:Contact:email_to_manager.html.twig', array(
                            'interest' => $interest,
                        ));
                        $subject = '[Sharovalaw.Com] New message from the site';
                        Tools::sendEmail($this, $subject, $body, $this->container->getParameter('mailer_user'), $this->container->getParameter('contact_email'));
                    }

                } else {
                    /* @var $error \Symfony\Component\Form\FormError */
                    $error_list = $this->getFormatedErrorMessages($form);
                    $errors = array();
                    foreach ($error_list as $row => $error) {
                        $errors[] = $row;
                    }
                    throw new \Exception(implode(',', $errors));
                }
            }

            $message = 'Your message has been successfully sent';
            $success = true;
        } catch (\Exception $e) {
            $this->get('logger')->debug($e->getMessage());
            $message = $this->isDev() ? $e->getMessage() : 'Problem with sending message ';
            $success = false;
        }

        return $this->getAjaxResponse($success, array('message' => $message));
    }
}
