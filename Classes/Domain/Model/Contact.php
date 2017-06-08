<?php
namespace Famo\AnnuaireFamo\Domain\Model;

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
 * Contact
 */
class Contact extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * lastname
     *
     * @var string
     * @validate NotEmpty
     */
    protected $lastname = '';
    
    /**
     * firstname
     *
     * @var string
     * @validate NotEmpty
     */
    protected $firstname = '';
    
    /**
     * phone
     *
     * @var string
     */
    protected $phone = '';
    
    /**
     * email
     *
     * @var string
     */
    protected $email = '';
    
    /**
     * address
     *
     * @var string
     */
    protected $address = '';
    
    /**
     * zipcode
     *
     * @var string
     */
    protected $zipcode = '';
    
    /**
     * city
     *
     * @var string
     */
    protected $city = '';
    
    /**
     * picture
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $picture = null;
    
    /**
     * presentation
     *
     * @var string
     */
    protected $presentation = '';
    
    /**
     * organization
     *
     * @var \Famo\AnnuaireFamo\Domain\Model\Organization
     */
    protected $organization = null;
    
    /**
     * department
     *
     * @var \Famo\AnnuaireFamo\Domain\Model\Department
     */
    protected $department = null;
    
    /**
     * position
     *
     * @var \Famo\AnnuaireFamo\Domain\Model\Position
     */
    protected $position = null;
    
    /**
     * Returns the lastname
     *
     * @return string $lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }
    
    /**
     * Sets the lastname
     *
     * @param string $lastname
     * @return void
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }
    
    /**
     * Returns the firstname
     *
     * @return string $firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }
    
    /**
     * Sets the firstname
     *
     * @param string $firstname
     * @return void
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }
    
    /**
     * Returns the phone
     *
     * @return string $phone
     */
    public function getPhone()
    {
        return $this->phone;
    }
    
    /**
     * Sets the phone
     *
     * @param string $phone
     * @return void
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    
    /**
     * Returns the email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    /**
     * Sets the email
     *
     * @param string $email
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    /**
     * Returns the address
     *
     * @return string $address
     */
    public function getAddress()
    {
        return $this->address;
    }
    
    /**
     * Sets the address
     *
     * @param string $address
     * @return void
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }
    
    /**
     * Returns the zipcode
     *
     * @return string $zipcode
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }
    
    /**
     * Sets the zipcode
     *
     * @param string $zipcode
     * @return void
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
    }
    
    /**
     * Returns the city
     *
     * @return string $city
     */
    public function getCity()
    {
        return $this->city;
    }
    
    /**
     * Sets the city
     *
     * @param string $city
     * @return void
     */
    public function setCity($city)
    {
        $this->city = $city;
    }
    
    /**
     * Returns the picture
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $picture
     */
    public function getPicture()
    {
        return $this->picture;
    }
    
    /**
     * Sets the picture
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $picture
     * @return void
     */
    public function setPicture(\TYPO3\CMS\Extbase\Domain\Model\FileReference $picture)
    {
        $this->picture = $picture;
    }
    
    /**
     * Returns the presentation
     *
     * @return string $presentation
     */
    public function getPresentation()
    {
        return $this->presentation;
    }
    
    /**
     * Sets the presentation
     *
     * @param string $presentation
     * @return void
     */
    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;
    }
    
    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }
    
    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        
    }
    
    /**
     * Returns the department
     *
     * @return \Famo\AnnuaireFamo\Domain\Model\Department $department
     */
    public function getDepartment()
    {
        return $this->department;
    }
    
    /**
     * Sets the department
     *
     * @param \Famo\AnnuaireFamo\Domain\Model\Department $department
     * @return void
     */
    public function setDepartment(\Famo\AnnuaireFamo\Domain\Model\Department $department)
    {
        $this->department = $department;
    }
    
    /**
     * Returns the organization
     *
     * @return \Famo\AnnuaireFamo\Domain\Model\Organization $organization
     */
    public function getOrganization()
    {
        return $this->organization;
    }
    
    /**
     * Sets the organization
     *
     * @param \Famo\AnnuaireFamo\Domain\Model\Organization $organization
     * @return void
     */
    public function setOrganization(\Famo\AnnuaireFamo\Domain\Model\Organization $organization)
    {
        $this->organization = $organization;
    }
    
    /**
     * Returns the position
     *
     * @return \Famo\AnnuaireFamo\Domain\Model\Position $position
     */
    public function getPosition()
    {
        return $this->position;
    }
    
    /**
     * Sets the position
     *
     * @param \Famo\AnnuaireFamo\Domain\Model\Position $position
     * @return void
     */
    public function setPosition(\Famo\AnnuaireFamo\Domain\Model\Position $position)
    {
        $this->position = $position;
    }

}