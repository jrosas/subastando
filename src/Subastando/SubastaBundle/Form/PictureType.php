<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PictureType
 *
 * @author nelly
 */

namespace Acme\Subastando\SubastaBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PictureType extends AbstractType {
    
    public function buildForm(FormBuilder $builder, array $options){
        $builder->add('name');
        $builder->add('path','file');
    }
    
    public function getDefaultOptions(array $options){
        return array(
            'data_class'=>'Acme\Subantando\SubastaBundle\Entity\Picture',  
        );
    }
    
    public function getName(){
        return 'picture';
    }
     
}

?>
