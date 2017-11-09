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

use Zend\Session\Container;

class PublicProfileController extends AbstractActionController
{
    public function indexAction()
    {
        $session = new Container('base');
        $email = '';

        $session->offsetSet('email', 'corin.alex@gmail.com');

        if ($session->offsetExists('email')) {
            $email = $session->offsetGet('email');
        }
        //return $this->redirect()->toRoute('login');

        return new ViewModel(array('email' => $email));
    }
}
