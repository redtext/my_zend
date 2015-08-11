<?php

namespace Budget\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class BDDSController extends AbstractActionController
{

    public function indexAction()
    {
        return new ViewModel();
    }


}

