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
use Utilisateur\Quantum\Requests;
use Zend\Session\Container;

use Utilisateur\Model\Login;
use Utilisateur\Form\LoginForm;

class LoginController extends AbstractActionController
{
    public function indexAction()
    {
        $form = new LoginForm();
        $form->get('submit')->setValue('Connexion');
        $session = new Container('user');
        $request = $this->getRequest();
        if ($request->isPost()) {
            $loginInfo = new Login();
            $form->setInputFilter($loginInfo->getInputFilter());
            $form->setData($request->getPost());

            if ($form->isValid()) {
                $loginInfo->exchangeArray($form->getData());
                
                $em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
                $user = $em->getRepository('\Application\Entity\BeziersUsersAup')->findOneBy(
                        array('email' => $loginInfo->email, 'password' => sha1($loginInfo->password)));
                
                if (!empty($user)) {
                    $session->offsetSet('id', $user->getId());
                    $session->offsetSet('email', $user->getEmail());
                    $session->offsetSet('type', $user->getType());
                }
            }
        }
        return new ViewModel(array('form' => $form, 'session' => $session));
    }

    public function loginAction()
    {
        return $this->redirect()->toRoute('login');
    }

    public function logoutAction()
    {
        $session = new Container('user');
        $session->getManager()->getStorage()->clear('user');
        return new ViewModel();
    }


}
