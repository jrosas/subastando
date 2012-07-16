<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProductType
 *
 * @author nelly
 * 
 * 
 */

namespace Acme\Subastando\SubastaBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;


class ProductType extends AbstractType {
   
    public function buildForm(FormBuilder $builder, array $options){
        $builder->add('product','text');
        $builder->add('buyout','money');
        $builder->add('minima','money');
        $builder->add('descripcion','text');
        $builder->add('picture','collection',array('type'=>new PictureType()));
    }

    public function getDefaultOptions(array $options){
        return array(
            'data_class'=> 'Acme\Subastando\SubantaBundle\Entity\Product',
        );
    }
    
    public function getName(){
        return 'product';
    }

}

?>
