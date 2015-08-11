<?php

namespace Doc\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class DocController extends AbstractActionController
{

    public function indexAction()
    {
        return new ViewModel();
    }


}

