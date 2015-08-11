<?php

namespace Reports\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ReportController extends AbstractActionController
{

    public function indexAction()
    {
        return new ViewModel();
    }


}

