<?php
namespace Famo\AnnuaireFamo\Controller;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2017 Thibault FAIVRE <thibault.faivre@etu.u-bordeaux.fr>
 *           Michael MONDOU <michael.mondou@etu.u-bordeaux.fr>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * OrganizationController
 */
class OrganizationController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * organizationRepository
     *
     * @var \Famo\AnnuaireFamo\Domain\Repository\OrganizationRepository
     * @inject
     */
    protected $organizationRepository = NULL;

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
        $contacts = $this->contactRepository->getContacts($organization);

        $this->view->assign('contacts', $contacts);
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