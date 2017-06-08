<?php
namespace Famo\AnnuaireFamo\Controller;

/**
 * ContactController
 */
class ContactController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * contactRepository
     *
     * @var \Famo\AnnuaireFamo\Domain\Repository\ContactRepository
     * @inject
     */
    protected $contactRepository = NULL;
    
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $contacts = $this->contactRepository->findAll();
        $this->view->assign('contacts', $contacts);
    }
    
    /**
     * action show
     *
     * @param \Famo\AnnuaireFamo\Domain\Model\Contact $contact
     * @return void
     */
    public function showAction(\Famo\AnnuaireFamo\Domain\Model\Contact $contact)
    {
        $this->view->assign('contact', $contact);
    }
    
    /**
     * action search
     *
     * @return void
     */
    public function searchAction()
    {
        
    }

}