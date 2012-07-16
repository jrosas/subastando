<?php

namespace Subastando\SubastaBundle\Controller;
use Subastando\SubastaBundle\Entity\Product;
use Subastando\SubastaBundle\Entity\Picture;
use Subastando\SubastaBundle\Form\ProductType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\PictureController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;



class ProductController extends Controller
{
    public function indexAction()
    {
        return $this->render('SubastandoSubastaBundle:Product:index.html.twig');
    }
    
    public function newAction(Request $request)
    {
        $product=new Product();
        
            
            $pic=new Picture();
            $pic1=new Picture();
            $pic2=new Picture();
            $product->getPictures()->add($pic);
            $product->getPictures()->add($pic1);
            $product->getPictures()->add($pic2);
        
        
        $form = $this->createForm(new ProductType(),$product);
        if('POST'=== $request->getMethod()){
            $form->bindRequest($request);
            if($form->isValid()){
                
                $em=$this->getDoctrine()->getEntityManager();
                $session=  $this->getRequest()->getSession();
                
                $product->setStatus("ofertado");
                $product->setCreatedValue();
                $product->setDayleft(1);
                
                $pic->setProduct($product);
                $pic1->setProduct($product);
                $pic2->setProduct($product);
                
                $pic->flush();
                $em->persist($pic1);
                $em->persist($pic2);
                $em->persist($product);       
                $em->flush();
             
            }
        }
       return $this->render('SubastandoSubastaBundle:Product:new.html.twig',array('form'=>$form->createView(),));
    }
    
    
}


?>
