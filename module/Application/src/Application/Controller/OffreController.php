<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class OffreController extends AbstractActionController
{
    public function indexAction()
    {
        $annonceID = null;

        // recupération des info sur la BDD
        $em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        $annonceID = $em->getRepository('\Application\Entity\BeziersAnnoncesAup')->findAll();

        return new ViewModel(array('annonce' => $annonceID));
    }
}
