<?php
namespace Utilisateur\Form;

use Zend\Form\Form;

class SkillForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('SkillForm');
        $this->setAttribute('method', 'post');
			
			
					$this->add(array(
            'name' => 'Type de  contrat',
            'type' => 'select',
            'options' => array(
                'label' => 'contrat',
								'options' => array('cdi','cdd'),
            ),
            'attributes' => array(
         //   'class' => 'form-control',


            ),
        ));
			
								$this->add(array(
            'name' => 'Poste',
            'type' => 'select',
            'options' => array(
                'label' => 'poste',
								'options' => array(),
            ),
            'attributes' => array(
         //   'class' => 'form-control',
            ),
        ));
			
											$this->add(array(
            'name' => 'Lieux',
            'type' => 'select',
            'options' => array(
                'label' => 'Lieux',
								'options' => array(),
            ),
            'attributes' => array(
         //   'class' => 'form-control',
            ),
        ));
			

        $this->add(array(
      'options' => array(
          'label' => 'Intitulé Poste',
      ),			
			'name' => 'poste',
      'type' => 'textarea',     
      'attributes' => array(
          'class' => 'form-control',
                          'placeholder' => 'Intitulé du Poste'
      ),
  ));

//  $this->add(array(
//'name' => 'skill',
//'type' => 'textarea',
//
//'options' => array(
//    'label' => 'Compétences: ',
//
//),
//'attributes' => array(
//    'class' => 'form-control',
//		
//
//),
//));


        $this->add(array(
            'name' => 'submit',
            'type' => 'Submit',
            'options' => array(
                'label' => 'Valider',
            ),
            'attributes' => array(
                'value' => 'Valider',
                'class' => 'btn btn-primary'
            ),
        ));
    }
}
