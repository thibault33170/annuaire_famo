<?php
namespace Famo\AnnuaireFamo\Domain\Repository;

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
 * The repository for Contacts
 */
class ContactRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

    /**
     * Effectue une recherche dans les contacts en filtrant par $search
     *
     * @param string $search
     * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
     */
    public function findBySearch($search)
    {
        $query = $this->createQuery();
        $constraints = array();

        if (preg_match('/\s/', $search)) {
            $search = explode(' ', $search);
            $constraints[] = $query->logicalOr(
                $query->logicalAnd(
                    $query->like('firstname', '%' . $search[0] . '%'),
                    $query->like('lastname', '%' . $search[1] . '%')
                ),
                $query->logicalAnd(
                    $query->like('firstname', '%' . $search[1] . '%'),
                    $query->like('lastname', '%' . $search[0] . '%')
                )
            );
        } else {
            $constraints[] = $query->logicalOr(
                $query->like('firstname', '%' . $search . '%'),
                $query->like('lastname', '%' . $search . '%')
            );
        }
        $query->matching($query->logicalAnd($constraints));
        return $query->execute();
    }

    /**
     * Return all the contacts of the $organization
     *
     * @param \Famo\AnnuaireFamo\Domain\Model\Organization $organization
     * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
     */
    function getContacts(\Famo\AnnuaireFamo\Domain\Model\Organization $organization)
    {
        $query = $this->createQuery();
        $query->matching($query->equals('organization', $organization));

        return $query->execute();
    }
}