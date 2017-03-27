<?php
namespace Utilisateur\Form;

use Zend\Form\Form;

class DescriptionForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('description');
				$this->setAttribute('method', 'post');
			
			  $this->add(array(
            'name' => 'description',
            'type' => 'textarea',
					  
            'options' => array(
                'label' => 'Description',
                
            ),
            'attributes' => array(
                'class' => 'form-control',
								'placeholder' => 'Description'
                
            ),
        ));
			
			  $this->add(array(
            'name' => 'submit',
            'type' => 'Submit',
            'attributes' => array(
                'value' => 'Valider',
                'class' => 'btn btn-primary'
            ),
        ));
    }
}
