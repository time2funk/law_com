<?php
// src/Plugins/BlogBundle/Admin/BlogPostAdmin.php

namespace Plugins\BlogBundle\Admin;

use Plugins\BlogBundle\Entity\BlogPost;
// use Sonata\AdminBundle\Validator\ErrorElement;

// use Sonata\AdminBundle\Route\RouteCollection;

// use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

// class BlogPostAdmin extends Admin
class BlogPostAdmin extends AppAdmin
{

    const PUBLIC_DATE_HOUR_MIN = 8;
    const PUBLIC_DATE_HOUR_MAX = 21;

    const PUBLIC_DATE_MINUTE_MIN = 0;
    const PUBLIC_DATE_MINUTE_MAX = 60;

    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {


        $formMapper
            ->add('blogCategory', null, array('label' => 'Category', 'required' => true))
            ->add('blogTopic', "entity", array(
                'class' => 'Plugins\BlogBundle\Entity\BlogTopic',
                'label' => 'Topic',
                'required' => false,
            ))
            ->add('public_at', 'datetime', array('required' => true))
            ->add('public_at_with_random_time', 'date', array('required' => false))
            ->add('name', 'text', array('label' => 'Name'))
            ->add('short', 'textarea', array('label' => 'Short', 'attr' => array('class' => 'tinymce')))
            ->add('short_home', 'textarea', array('label' => 'Short for Homepage', 'attr' => array('class' => 'tinymce')))
            ->add('content', 'textarea', array('label' => 'Content', 'attr' => array('class' => 'tinymce')))
            ->add('ampContent', 'textarea', array('label' => 'Amp content', 'required' => false))
            ->add('url', 'text', array('required' => false))
            ->add('metatitle', 'textarea', array('required' => false))
            ->add('metadescription', 'textarea', array('required' => false))
            ->add('metakeywords', 'textarea', array('required' => false));
    }

    // public function validate(ErrorElement $errorElement, $object)
    // {
    //     // find object with the same uniqueField-value
    //     $other = $this->modelManager->findOneBy($this->getClass(), array('url' => $object->getUrl()));
		//
    //     if (null !== $other && $other->getId() !== $object->getId()) {
    //         $errorElement
    //             ->with('url')
    //             ->addViolation('Url must be unique!')
    //             ->end();
    //     }
		//
		// 		$errorElement
    //         ->with('metatitle')
    //             ->assertLength(array('max' => 70))
    //         ->end()
    //         ->with('metadescription')
    //             ->assertLength(array('max' => 155))
    //         ->end()
    //         ->with('metakeywords')
    //             ->assertLength(array('max' => 155))
    //         ->end();
    // }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('blogCategory', null, array('label' => 'Category'))
            ->add('blogTopic', null, array('label' => 'Topic'))
            ->add('name')
            ->add('short')
            ->add('short_home')
            ->add('content');
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name', 'text', array('label' => 'Title'))
            ->add('blogCategory', 'choice', array('label' => 'Category'))
            // ->add('blogTopic', 'choice', array('label' => 'Topic'))
            ->add('public_at', 'datetime', array('label' => 'Public at'))
            ->add('url', 'text', array('label' => 'Url'))
            ->add('metatitle', 'textarea')
            ->add('metadescription', 'textarea')
            ->add('ampContent', 'boolean', array('label' => 'Amp content'))
            ->add('metakeywords', 'textarea');
    }

//     protected function configureRoutes(RouteCollection $collection)
//     {
//         // to remove a delete route
// //         $collection->remove('delete');
//     }
//
//     /**
//      * @param BlogPost $object
//      * @return mixed|void
//      */
//     public function prePersist($object)
//     {
//         $object->setCreatedAt(new \DateTime());
//         $object->setUpdatedAt(new \DateTime());
//
//         $this->preparePublicAtDate($object);
//         $this->checkUrl($object);
//     }
//
//     /**
//      * @param BlogPost $object
//      * @return mixed|void
//      */
//     public function preUpdate($object)
//     {
//         $object->setUpdatedAt(new \DateTime());
//
//         $this->preparePublicAtDate($object);
//         $this->checkUrl($object);
//     }

    /**
     * @param BlogPost $object
     */
    protected function preparePublicAtDate($object)
    {
        if (empty($object->getPublicAtWithRandomTime())) {
            return;
        }
        $hour = rand(self::PUBLIC_DATE_HOUR_MIN, self::PUBLIC_DATE_HOUR_MAX);
        $minute = rand(self::PUBLIC_DATE_MINUTE_MIN, self::PUBLIC_DATE_MINUTE_MAX);

        $dateString = sprintf('%s %s:%s', $object->getPublicAtWithRandomTime()->format('Y-m-d'), $hour, $minute);
        $object->setPublicAt(new \DateTime($dateString));
    }
		//
    // /**
    //  * Check is url not empty, is empty - create url by name
    //  * @param BlogPost $object
    //  */
    // protected function checkUrl($object)
    // {
    //     $url = $object->getUrl();
    //     if (empty($url)) {
    //         $object->setUrl($object->cleanUrl($object->getName()));
    //     }
    // }
}
