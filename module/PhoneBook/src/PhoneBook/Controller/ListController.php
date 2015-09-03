<?php

namespace PhoneBook\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use PhoneBook\Entity\Phone;

class ListController extends AbstractActionController
{
    protected $_objectManager;

    public function indexAction()
    {
        $phones = $this->getObjectManager()->getRepository('\PhoneBook\Entity\Phone')->findAll();

        return new ViewModel(array('phones' => $phones));
    }

    public function addAction()
    {
        if ($this->request->isPost()) {
            $phone = new Phone();
            $phone->setPosition($this->getRequest()->getPost('position'));
            $phone->setOffice($this->getRequest()->getPost('office'));
            $phone->setTel_Int($this->getRequest()->getPost('tel_int'));
            $phone->setTel_Gorod($this->getRequest()->getPost('tel_gorod'));
            $phone->setSotovyi($this->getRequest()->getPost('sotovyi'));
            $phone->setFullName($this->getRequest()->getPost('fullname'));
            $phone->setEmail($this->getRequest()->getPost('email'));
            
            $this->getObjectManager()->persist($phone);
            $this->getObjectManager()->flush();
            $newId = $phone->getId();

            return $this->redirect()->toRoute('phone');
        }
        return new ViewModel();
    }

    public function editAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        $phone = $this->getObjectManager()->find('\PhoneBook\Entity\Phone', $id);

        if ($this->request->isPost()) {
            $phone->setFullName($this->getRequest()->getPost('fullname'));
            $phone->setPosition($this->getRequest()->getPost('position'));
            $phone->setOffice($this->getRequest()->getPost('office'));
            $phone->setTel_Int($this->getRequest()->getPost('tel_int'));
            $phone->setTel_Gorod($this->getRequest()->getPost('tel_gorod'));
            $phone->setSotovyi($this->getRequest()->getPost('sotovyi'));
            $phone->setEmail($this->getRequest()->getPost('email'));

            $this->getObjectManager()->persist($phone);
            $this->getObjectManager()->flush();

            return $this->redirect()->toRoute('phone');
        }

        return new ViewModel(array('phone' => $phone));
    }

    public function deleteAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        $phone = $this->getObjectManager()->find('\PhoneBook\Entity\Phone', $id);

        if ($this->request->isPost()) {
            $this->getObjectManager()->remove($phone);
            $this->getObjectManager()->flush();

            return $this->redirect()->toRoute('phone');
        }

        return new ViewModel(array('phone' => $phone));
    }

    protected function getObjectManager()
    {
        if (!$this->_objectManager) {
            $this->_objectManager = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        }

        return $this->_objectManager;
    }
}

