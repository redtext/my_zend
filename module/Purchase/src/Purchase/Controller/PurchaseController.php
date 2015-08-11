<?php

namespace Purchase\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class PurchaseController extends AbstractActionController
{

    public function indexAction()
    {
        return new ViewModel();
    }


}

