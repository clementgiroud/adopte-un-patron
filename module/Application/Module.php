<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

use Application\Model\Users;
use Application\Model\UsersTable;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;


class Module
{
    /**
     * Gestionnaire d'erreurs
     * @param MvcEvent $e
     */
    public function handleError(MvcEvent $e)
    {
        $exception = $e->getParam('exception');
        echo '<div style="margin: 5em 1em;"><pre>' . $exception->getMessage() .
                                                 " \ndans le fichier " . $exception->getFile() .
                                                 " \nligne " . $exception->getLine() . "</pre></div>";
    }

    public function onBootstrap(MvcEvent $e)
    {
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);

        // Appel du gestionnaire d'erreurs
        $eventManager->attach(MvcEvent::EVENT_DISPATCH_ERROR, array($this, 'handleError'));
        $eventManager->attach(MvcEvent::EVENT_RENDER_ERROR, array($this, 'handleError'));
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
    
    public function getServiceConfig()
     {
         return array(
             'factories' => array(
                 'Pages\Model\UsersTable' =>  function($sm) {
                     $tableGateway = $sm->get('PagesTableGateway');
                     $table = new PagesTable($tableGateway);
                     return $table;
                 },
                 'UsersTableGateway' => function ($sm) {
                     $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                     $resultSetPrototype = new ResultSet();
                     $resultSetPrototype->setArrayObjectPrototype(new Pages());
                     return new TableGateway('pages', $dbAdapter, null, $resultSetPrototype);
                 },
             ),
         );
     }
}
