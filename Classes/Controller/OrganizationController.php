<?php
namespace Famo\AnnuaireFamo\Controller;


/**
 * OrganizationController
 */
class OrganizationController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $organizations = $this->organizationRepository->findAll();
        $this->view->assign('organizations', $organizations);
    }
    
    /**
     * action show
     *
     * @param \Famo\AnnuaireFamo\Domain\Model\Organization $organization
     * @return void
     */
    public function showAction(\Famo\AnnuaireFamo\Domain\Model\Organization $organization)
    {
        $this->view->assign('organization', $organization);
    }
    
    /**
     * action contactList
     *
     * @return void
     */
    public function contactListAction()
    {
        
    }
    
    /**
     * action serviceList
     *
     * @return void
     */
    public function serviceListAction()
    {
        
    }
    
    /**
     * action serviceShow
     *
     * @return void
     */
    public function serviceShowAction()
    {
        
    }

}