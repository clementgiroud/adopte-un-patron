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
use Utilisateur\Quantum\Requests;

class RegisterController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel(array('message' => $this->registerUser()));
    }
    
    private function registerUser() {
        $message = "";
        
        if (!empty($_POST['email']) and !empty($_POST['password'])) {
            $entityManager = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');

            $nom = Requests::vars('post', 'string', 'nom', true);
            $prenom = Requests::vars('post', 'string', 'prenom', true);
            $email = Requests::vars('post', 'email', 'email', true);
            $password = Requests::vars('post', 'string', 'password', false);
            $telephone = Requests::vars('post', 'int', 'telephone', true);
            $type = Requests::vars('post', 'int', 'nom', true);
            
            $cp = Requests::vars('post', 'int', 'cp', true);
            $adresse = Requests::vars('post', 'string', 'adresse', true);
            
            // TODO : Verifier la pertinence des variables
            
            if (empty($nom) or
                empty($prenom) or
                empty($email) or
                empty($password) or
                empty($telephone)) {
                $message = "Veuillez remplir tous les champs obligatoires";
            }
            else {
                $user = new \Application\Entity\BeziersUsersAup();
                $user->setNom($nom);
                $user->setPrenom($prenom);
                
                $user->setEmail($email);
                
                // TODO : hash & salt, utilisation de sha1 en attendant
                $user->setPassword(sha1($password));
                
                $user->setTelephone($telephone);
                $user->setType($type);
                $user->setInscription(time());
                
                $user->setCodePostal($cp);
                $user->setAdresse($adresse);
                
                $entityManager->persist($user);
                $entityManager->flush();
                
                $message = "Utilisateur créé avec succès";
            }
        }
        
        return $message;
    }
}
