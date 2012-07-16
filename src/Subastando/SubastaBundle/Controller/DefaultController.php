<?php

namespace Subastando\SubastaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('SubastandoSubastaBundle:Default:index.html.twig');
    }
}
