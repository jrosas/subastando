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

namespace Subastando\SubastaBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;


class ProductType extends AbstractType {
   
    public function buildForm(FormBuilder $builder, array $options){
        $builder->add('name','text');
        $builder->add('buyout','money');
        $builder->add('minbid','money');
        $builder->add('description','textarea');
        $builder->add('pictures','collection',array('type'=>new PictureType()));
    }

    public function getDefaultOptions(array $options){
        return array(
            'data_class'=> 'Subastando\SubastaBundle\Entity\Product',
        );
    }
    
    public function getName(){
        return 'product';
    }

}

?>
