<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserController
 *
 * @author nelly
 */


namespace Subastando\SubastaBundle\Controller;
use Subastando\SubastaBundle\Entity\User;
use Subastando\SubastaBundle\Form\UserType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class UserController extends Controller{
  
    
    public function newAction(Request $request)
    {
        $user=new User();
                
        $form = $this->createForm(new UserType(),$user);
        if('POST'=== $request->getMethod()){
            $form->bindRequest($request);
            if($form->isValid()){
                
                $em=$this->getDoctrine()->getEntityManager();
                $user.setRole("Admin");
                $em->persist($user);       
                $em->flush();
                    return $this->redirect($this->generateUrl('SubastandoSubastaBundle_homepage'));
            }
        }
       return $this->render('SubastandoSubastaBundle:User:new.html.twig',array('form'=>$form->createView(),));
    }
    
    
}

?>
