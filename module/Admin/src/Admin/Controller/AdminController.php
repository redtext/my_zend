<?php

namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AdminController extends AbstractActionController
{

    public function indexAction()
    {
	// $viewmodel = new ViewModel();
	//$authorize = $this->getServiceLocator()->get('BjyAuthorize\Provider\Identity\ProviderInterface');
	//$roles = $authorize->getIdentityRoles();

	//$viewmodel->setVariable("roles", $roles);
	//return $viewmodel;
    
    
        return new ViewModel();
    }


}

