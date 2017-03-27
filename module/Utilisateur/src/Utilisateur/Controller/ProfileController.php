<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonCandidat for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Utilisateur\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Form\Factory;
use Zend\Form\Element;
use Zend\Form\Form;
use Utilisateur\Quantum\Requests;
use Zend\Session\Container;
use Utilisateur\Model\Edit;
use Utilisateur\Form\EditProfileForm;

use Utilisateur\Model\Description;
use Utilisateur\Form\DescriptionForm;
use Utilisateur\Form\SkillForm;


class ProfileController extends AbstractActionController
{
    public function indexAction()
    {

        $session = new Container('user');
        $userID = null;

        if ($session->offsetExists('id') and !empty($session->offsetGet('id'))) {
            // recupération des info sur la BDD
            $em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
            $userID = $em->getRepository('\Application\Entity\BeziersUsersAup')->findOneBy(
                                        array('id' => $session->offsetGet('id')));
        }


        return new ViewModel(array('user' => $userID));

    }

    public function editAction()
    {
        $session = new Container('user');
        $user = null;
		$em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        if ($session->offsetExists('id') and !empty($session->offsetGet('id'))) {
            // recupération des info sur la BDD
            $user = $em->getRepository('\Application\Entity\BeziersUsersAup')->findOneBy(array('id' => $session->offsetGet('id')));
        }

		$form = new EditProfileForm();
		$form->get('nom')->setValue($user->getNom());
		$form->get('prenom')->setValue($user->getPrenom());
		$form->get('telephone')->setValue($user->getTelephone());
		$form->get('adresse')->setValue($user->getAdresse());
		$form->get('code_postal')->setValue($user->getCodePostal());

		$jour = intval(date('d', $user->getDateNaissance()));
		$form->get('date_naissance')->setValue($jour-1);

		$mois = intval(date('n', $user->getDateNaissance()));
		$form->get('date_naissance2')->setValue($mois);

		$annee = intval(date('o', $user->getDateNaissance()));
		$form->get('date_naissance3')->setValue($annee);
			
		
		$types = $em->getRepository('\Application\Entity\BeziersTypeDeContratAup')->findAll();
			$tlist = array();
			foreach ($types as $t) {
			$tlist[$t->getType()] = $t->getId();
		 }
		$form->get('type_de_contrat')->setValueOptions($tlist);	
			
		
			
		$formDescription = new DescriptionForm();
		$formDescription->get('description')->setValue($user->getAccroche());

        $annee = intval(date("o", time()));
        $options = array();

        for ($i=$annee; $i>($annee-100);$i--) {
            $options[$i] = $i;
        }

		$form->get('date_naissance3')->setValueOptions($options);

        $session = new Container('user');
        $request = $this->getRequest();

        if ($request->isPost()) {
            $profileInfo = new Edit();
            $form->setInputFilter($profileInfo->getInputFilter());
            $form->setData($request->getPost());

            if ($form->isValid()) {

                $profileInfo->exchangeArray($form->getData());
				$user->setNom($profileInfo->nom);
				$user->setPrenom($profileInfo->prenom);

				$dn = strtotime($profileInfo->dateNaissance+1 . '-' .
								$profileInfo->dateNaissance2 . '-' .
								$profileInfo->dateNaissance3);
				$user->setDateNaissance($dn);
				$user->setTelephone($profileInfo->telephone);
				$user->setAdresse($profileInfo->adresse);
				$user->setCodePostal($profileInfo->codePostal);

				$em->persist($user);
				$em->flush();
            }

			$desc = new Description();
            $formDescription->setInputFilter($desc->getInputFilter());
            $formDescription->setData($request->getPost());

            if ($formDescription->isValid()) {
                $desc->exchangeArray($formDescription->getData());
				$user->setAccroche($desc->description);

				$em->persist($user);
				$em->flush();
            }

		}

        // dernier ajout
        // $contrat = $em->getRepository('Utilisateur\Entity\Users')->findOneBy
        //
        // $formSkill = new SkillForm();
        // $skills = $em->getRepository('Utilisateur\Entity\TypeDeContrat')->findAll(),(array('Contrat' => $contrat->offsetGet('type_de_contrat')));;
        //
        //
        // $contrat = array();
        // //foreach
        //
        // $form->get('type_de_contrat')->setValueOptions($contrat);
        // <3



        $formSkill = new SkillForm();
        $skills = $em->getRepository('\Application\Entity\BeziersSkillsAup')->findAll();

        foreach ($skills as $skill) {
            $checkbox = new Element\Checkbox($skill->getName());
            $checkbox->setLabel($skill->getName());
            $checkbox->setCheckedValue("1");
            $checkbox->setUncheckedValue ("0");
            $formSkill->add($checkbox);
       }

        return new ViewModel(array('user' => $user, "form" => $form, 'formDescription' => $formDescription, 'formSkill'=>$formSkill,));
    }
}
