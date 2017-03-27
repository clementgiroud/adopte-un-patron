<?php

namespace Utilisateur\Model;

 // Add these import statements
 use Zend\InputFilter\InputFilter;
 use Zend\InputFilter\InputFilterAwareInterface;
 use Zend\InputFilter\InputFilterInterface;

 class Edit implements InputFilterAwareInterface
 {
     public $nom;
     public $prenom;
     public $dateNaissance;
	   public $dateNaissance2;
	   public $dateNaissance3;
	 	 public $telephone;
	   public $adresse;
	   public $codePostal;

     protected $inputFilter;

     public function exchangeArray($data)
     {
         $this->nom  = (isset($data['nom']))  ? $data['nom']  : null;
         $this->prenom  = (isset($data['prenom']))  ? $data['prenom']  : null;
         $this->dateNaissance  = (isset($data['date_naissance']))  ? $data['date_naissance']  : 1;
			 $this->dateNaissance2  = (isset($data['date_naissance2']))  ? $data['date_naissance2']  : 1;
			 $this->dateNaissance3  = (isset($data['date_naissance3']))  ? $data['date_naissance3']  : 2017;
			   $this->telephone = (isset($data['telephone'])) ? $data['telephone'] :1;
			   $this->adresse = (isset($data['adresse'])) ? $data['adresse'] :null;
			   $this->codePostal = (isset($data['code_postal'])) ? $data['code_postal'] :null;
     }

     // Add content to these methods:
     public function setInputFilter(InputFilterInterface $inputFilter)
     {
         throw new \Exception("Not used");
     }

     public function getInputFilter()
     {
         if (!$this->inputFilter) {
             $inputFilter = new InputFilter();

             $inputFilter->add(array(
                 'name'     => 'nom',
                 'required' => true,
                 'filters'  => array(
                     array('name' => 'StripTags'),
                     array('name' => 'StringTrim'),
                 ),

                 'validators' => array(
                     array(
                         'name'    => 'StringLength',
                         'options' => array(
                             'encoding' => 'UTF-8',
                             'min'      => 2,
                             'max'      => 100,
                         ),
                     ),
                 ),
             ));

             $inputFilter->add(array(
                 'name'     => 'prenom',
                 'required' => true,
                 'filters'  => array(
							 		array('name' => 'StripTags'),
                     array('name' => 'StringTrim'),
                 ),

                 'validators' => array(
                     array(
                         'name'    => 'StringLength',
                         'options' => array(
                             'encoding' => 'UTF-8',
                             'min'      => 1,
                             'max'      => 50,
                         ),
                     ),
                 ),
             ));

             $inputFilter->add(array(
                 'name'     => 'dateNaissance',
                 'required' => false,
                 'filters'  => array(
                     array('name' => 'Int'),
                 ),
							 'validators' => array(
                     array(
                         'name'    => 'Between',
                         'options' => array(
                             'encoding' => 'UTF-8',
                             'min'      => 1,
                             'max'      => 31)
							 ))
             ));
							 
						$inputFilter->add(array(
                 'name'     => 'dateNaissance2',
                 'required' => false,
                 'filters'  => array(
                     array('name' => 'Int'),
                 ),
							 'validators' => array(
                     array(
                         'name'    => 'Between',
                         'options' => array(
                             'encoding' => 'UTF-8',
                             'min'      => 1,
                             'max'      => 12)
							))
             ));
							 
						$inputFilter->add(array(
                 'name'     => 'dateNaissance3',
                 'required' => false,
                 'filters'  => array(
                     array('name' => 'Int'),
                 ),
							 'validators' => array(
                     array(
                         'name'    => 'Between',
                         'options' => array(
                             'encoding' => 'UTF-8',
                             'min'      => 1900,
                             'max'      => 3001)
							))
             ));
							 
						 $inputFilter->add(array(
                 'name'     => 'telephone',
                 'required' => false,
                 'filters'  => array(
                     array('name' => 'Int'),
                 ),
             ));
							 
						 $inputFilter->add(array(
                 'name'     => 'adresse',
                 'required' => true,
                 'filters'  => array(
							 		array('name' => 'StripTags'),
                     array('name' => 'StringTrim'),
                 ),

                 'validators' => array(
                     array(
                         'name'    => 'StringLength',
                         'options' => array(
                             'encoding' => 'UTF-8',
                             'min'      => 1,
                             'max'      => 255,
                         ),
                     ),
                 ),
             ));
							 
						 $inputFilter->add(array(
                 'name'     => 'code_postal',
                 'required' => true,
                 'filters'  => array(array('name' => 'Int')
                 ),

                 'validators' => array(
                     array(
                         'name'    => 'Between',
                         'options' => array(
                             'encoding' => 'UTF-8',
                             'min'      => 999,
                             'max'      => 99999,
                         ),
                     ),
                 ),
             ));

             $this->inputFilter = $inputFilter;
         }

         return $this->inputFilter;

     }
 }
