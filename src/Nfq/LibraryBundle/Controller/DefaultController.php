<?php

namespace Nfq\LibraryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NfqLibraryBundle:Default:index.html.twig');
    }

    public function helloAction($name)
    {
        return $this->render('NfqLibraryBundle:Default:hello.html.twig', array('name' => $name));
    }
}
