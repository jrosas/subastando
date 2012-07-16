<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserType
 *
 * @author nelly
 */


namespace Subastando\SubastaBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UserType extends AbstractType {

    public function buildForm(FormBuilder $builder, array $options){
        $builder->add('email');
        $builder->add('username');
        $builder->add('f_name');
        $builder->add('l_name');
        $builder->add('password');
    }
    
    public function getDefaultOptions(array $options){
        return array(
            'data_class'=>'Subastando\SubastaBundle\Entity\User',  
        );
    }
    
    public function getName(){
        return 'user';
    }
     
}

?>
