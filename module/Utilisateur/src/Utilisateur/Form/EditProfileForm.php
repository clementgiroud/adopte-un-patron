<?php
namespace Utilisateur\Form;

use Zend\Form\Form;

class EditProfileForm extends Form
{
    public function __construct($name = null)
    {
        // we want to ignore the name passed
        parent::__construct('user');
				$this->setAttribute('method', 'post');
        $this->add(array(
            'name' => 'nom',
            'type' => 'text',
            'options' => array(
                'label' => 'Nom',

            ),
            'attributes' => array(
                'class' => 'form-control',
								'placeholder' => 'Nom'

            ),
        ));

        $this->add(array(
            'name' => 'prenom',
            'type' => 'text',
            'options' => array(
                'label' => 'Prénom',
            ),
            'attributes' => array(
                'class' => 'form-control',
								'placeholder' => 'Prénom'
            ),
        ));

				$this->add(array(
            'name' => 'date_naissance',
            'type' => 'select',
            'options' => array(
                'label' => 'Date de naissance',
								'options' => array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31),
            ),
            'attributes' => array(
         //       'class' => 'form-control',


            ),
        ));

							$this->add(array(
            'name' => 'date_naissance2',
            'type' => 'select',
            'options' => array(
                'label' => 'Date de naissance',
								'options' => array(1 => 'Janvier',2 => 'Février', 3 => 'Mars', 4 => 'Avril', 5 => 'Mai', 6 => 'Juin', 7 => 'Juillet', 8 => 'Août', 9 => 'Septembre', 10 => 'Octobre', 11 => 'Novembre', 12 => 'Décembre',),
            ),
            'attributes' => array(
            //    'class' => 'form-control',


            ),
        ));

										$this->add(array(
            'name' => 'date_naissance3',
            'type' => 'select',
            'options' => array(
                'label' => 'Date de naissance',
            ),
            'attributes' => array(


            ),
        ));

				$this->add(array(
            'name' => 'telephone',
            'type' => 'text',
            'options' => array(
                'label' => 'Téléphone',
            ),
            'attributes' => array(
                'class' => 'form-control',
								'placeholder' => 'Téléphone'
            ),
        ));

				$this->add(array(
            'name' => 'adresse',
            'type' => 'text',
            'options' => array(
                'label' => 'Adresse',
            ),
            'attributes' => array(
                'class' => 'form-control',
								'placeholder' => 'Adresse'
            ),
        ));

				$this->add(array(
            'name' => 'code_postal',
            'type' => 'text',
            'options' => array(
                'label' => 'Code postal',
            ),
            'attributes' => array(
                'class' => 'form-control',
								'placeholder' => 'Code postal'
            ),
        ));


			  $this->add(array(
            'name' => 'type_de_contrat',
            'type' => 'select',
            'options' => array(
                'label' => 'Type de contrat',
            ),
            'attributes' => array(


            ),
        ));
			
			  $this->add(array(
            'name' => 'poste',
            'type' => 'select',
            'options' => array(
                'label' => 'Poste',
            ),
            'attributes' => array(


            ),
        ));
			
        $this->add(array(
            'name' => 'submit',
            'type' => 'Submit',
            'attributes' => array(
                'value' => 'Valider',
                'id' => 'submitbutton',
                'class' => 'btn btn-primary'
            ),
        ));
    }
}
