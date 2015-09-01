<?php

namespace User\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use User\Entity\User;

class IndexController extends AbstractActionController
{
    protected $_objectManager;

    public function indexAction()
    {
        $users = $this->getObjectManager()->getRepository('\User\Entity\User')->findAll();

        return new ViewModel(array('users' => $users));
    }

    public function addAction()
    {
        if ($this->request->isPost()) {
            $user = new User();
            $user->setFullName($this->getRequest()->getPost('fullname'));
            $user->setEmail($this->getRequest()->getPost('email'));
            
            $this->getObjectManager()->persist($user);
            $this->getObjectManager()->flush();
            $newId = $user->getId();

            return $this->redirect()->toRoute('user');
        }
        return new ViewModel();
    }

    public function editAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        $user = $this->getObjectManager()->find('\User\Entity\User', $id);

        if ($this->request->isPost()) {
            $user->setFullName($this->getRequest()->getPost('fullname'));

            $this->getObjectManager()->persist($user);
            $this->getObjectManager()->flush();

            return $this->redirect()->toRoute('user');
        }

        return new ViewModel(array('user' => $user));
    }

    public function deleteAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        $user = $this->getObjectManager()->find('\User\Entity\User', $id);

        if ($this->request->isPost()) {
            $this->getObjectManager()->remove($user);
            $this->getObjectManager()->flush();

            return $this->redirect()->toRoute('user');
        }

        return new ViewModel(array('user' => $user));
    }

    protected function getObjectManager()
    {
        if (!$this->_objectManager) {
            $this->_objectManager = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        }

        return $this->_objectManager;
    }
}

