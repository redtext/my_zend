<?php

namespace PhoneBook\Controller;

use Application\Controller\EntityUsingController;
use DoctrineORMModule\Stdlib\Hydrator\DoctrineEntity;
//use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use PhoneBook\Form\PhoneForm;
use PhoneBook\Entity\Phone;


class ListController extends EntityUsingController
{
    protected $_objectManager;

    public function indexAction()
    {
        $phones = $this->getObjectManager()->getRepository('\PhoneBook\Entity\Phone')->findAll();

        return new ViewModel(array('phones' => $phones));
    }

    public function editAction()
    {
            $phone = new Phone;
            
            if ($this->params('id') > 0) {
                $phone = $this->getEntityManager()->getRepository('PhoneBook\Entity\Phone')->find($this->params('id'));
            }
            
            $form = new PhoneForm($this->getEntityManager());
            $form->setHydrator(new DoctrineEntity($this->getEntityManager(),'PhoneBook\Entity\Phone'));
            $form->bind($phone);
            
            $request = $this->getRequest();
            if ($request->isPost()) {
            
                $form->setInputFilter($phone->getInputFilter());
                $form->setData($request->getPost());
            
                if ($form->isValid()) {
                    $em = $this->getEntityManager();
            
                    $em->persist($phone);
                    $em->flush();
            
                    $this->flashMessenger()->addSuccessMessage('Post Saved');
                    $this->flashMessenger()->addMessage('sadf');
                    $this->flashMessenger()->addErrorMessage('2312');

                    return $this->redirect()->toRoute('phone');
                }
            }
            
            return new ViewModel(array(
                'post' => $phone,
                'form' => $form
            ));
     }
     
     
     public function addAction()
     {
         return $this->editAction();
     }

    public function detailAction()
    {
        $id = $this->params()->fromRoute('id');
    
        if ($this->params('id') > 0) {
            $phone = $this->getEntityManager()->getRepository('PhoneBook\Entity\Phone')->find($this->params('id'));
        }
    
        return new ViewModel(array(
            'phone' => $phone
        ));
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

