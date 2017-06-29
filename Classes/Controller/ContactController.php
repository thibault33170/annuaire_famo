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
     * @param \Famo\AnnuaireFamo\Query\ContactSearch $search
     * @return void
     */
    public function listAction(\Famo\AnnuaireFamo\Query\ContactSearch $search = null)
    {
        if ($search === null) {
            $contacts = $this->contactRepository->findAll();
        } else {
            $contacts = $this->contactRepository->findBySearch($search->getTerms());
        }

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