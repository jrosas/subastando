<?php

namespace Subastando\SubastaBundle\Controller;
use Acme\Subastando\SubastaBundle\Entity\Product;
use Acme\Subastando\SubastaBundle\Entity\Picture;
use Acme\Subastando\SubastaBundle\Form\ProductType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\PictureController;


class ProductController extends Controller
{
    
    public function newAction()
    {
        $product=new Product();
        for($i=0;$i<2;$i++){
            
            $i=new Picture();
            $i->upload();
            $product->getPicture()->add($i);   
        }
        
        $form = $this->createForm(new ProductType(),$product);
        if('POST'==$request->getMethod()){
            $form->bindRequest($request);
            if($form->isValid()){
                
            }
        }
       return $this->render('SubastandoSubastaBundle:Default:index.html.twig',array('form'=>$form->createView(),));
    }
    
    
}


?>
