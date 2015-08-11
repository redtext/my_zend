<?php

namespace Partner\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class PartnerController extends AbstractActionController
{

    public function indexAction()
    {
        return new ViewModel();
    }


}

