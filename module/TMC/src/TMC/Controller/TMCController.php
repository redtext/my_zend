<?php

namespace TMC\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class TMCController extends AbstractActionController
{

    public function indexAction()
    {
        return new ViewModel();
    }


}

