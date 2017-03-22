<?php

namespace MyVendor\PostBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/post")
     */
    public function indexAction()
    {
        return $this->render('MyVendorPostBundle:Default:index.html.twig');
    }
}
