<?php
namespace Utilisateur\Form;

use Zend\Form\Form;

class LoginForm extends Form
{
    public function __construct($name = null)
    {
        // we want to ignore the name passed
        parent::__construct('user');

        $this->add(array(
            'name' => 'email',
            'type' => 'text',
            'options' => array(
                'label' => 'Identifiant',

            ),
            'attributes' => array(
                'class' => 'form-control',
                'placeholder' => 'vous@exemple.com',
            ),
        ));

        $this->add(array(
            'name' => 'password',
            'type' => 'password',
            'options' => array(
                'label' => 'Mot de passe',
            ),
            'attributes' => array(
                'class' => 'form-control'
            ),
        ));

        $this->add(array(
            'name' => 'remember',
            'type' => 'checkbox',
            'options' => array(
                'label' => 'Se souvenir de moi',
            ),
        ));

        $this->add(array(
            'name' => 'submit',
            'type' => 'Submit',
            'attributes' => array(
                'value' => 'Connexion',
                'id' => 'submitbutton',
                'class' => 'btn btn-primary'
            ),
        ));
    }
}
