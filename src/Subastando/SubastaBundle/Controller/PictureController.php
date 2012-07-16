<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PictureController
 *
 * @author nelly
 */

namespace Subastando\SubastaBundle\Controller;
use Acme\Subastando\SubastaBundle\Entity\Picture;
use Acme\Subastando\SubastaBundle\Form\PictureType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class PictureController {
    
     public function uploadAction()
    {
         
        $picture1=new Picture();
        $form=$this->createForm(new PictureType(),$picture1);
        
        if($this->getRequest()->getMethod()=='POST'){
            $form->bindRequest($this->getRequest());
            if($form->isValid()){
                $em=$this->getDoctrine()->getEntityManager();
                $em->persist($picture1);
                $em->flush();
                $this->redirect($this->generateUrl($route));
            }
         
         }
        
        return array('form'=>$form->createView());
     }
     
}

?>
