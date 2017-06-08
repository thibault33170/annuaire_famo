<?php

namespace Famo\AnnuaireFamo\Tests\Unit\Domain\Model;

/***************************************************************
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
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class \Famo\AnnuaireFamo\Domain\Model\Contact.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Thibault FAIVRE <thibault.faivre@etu.u-bordeaux.fr>
 * @author Michael MONDOU <michael.mondou@etu.u-bordeaux.fr>
 */
class ContactTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \Famo\AnnuaireFamo\Domain\Model\Contact
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \Famo\AnnuaireFamo\Domain\Model\Contact();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getLastnameReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getLastname()
		);
	}

	/**
	 * @test
	 */
	public function setLastnameForStringSetsLastname()
	{
		$this->subject->setLastname('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'lastname',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFirstnameReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getFirstname()
		);
	}

	/**
	 * @test
	 */
	public function setFirstnameForStringSetsFirstname()
	{
		$this->subject->setFirstname('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'firstname',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPhoneReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getPhone()
		);
	}

	/**
	 * @test
	 */
	public function setPhoneForStringSetsPhone()
	{
		$this->subject->setPhone('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'phone',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEmailReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getEmail()
		);
	}

	/**
	 * @test
	 */
	public function setEmailForStringSetsEmail()
	{
		$this->subject->setEmail('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'email',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getAddressReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getAddress()
		);
	}

	/**
	 * @test
	 */
	public function setAddressForStringSetsAddress()
	{
		$this->subject->setAddress('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'address',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getZipcodeReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getZipcode()
		);
	}

	/**
	 * @test
	 */
	public function setZipcodeForStringSetsZipcode()
	{
		$this->subject->setZipcode('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'zipcode',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCityReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getCity()
		);
	}

	/**
	 * @test
	 */
	public function setCityForStringSetsCity()
	{
		$this->subject->setCity('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'city',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPictureReturnsInitialValueForFileReference()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getPicture()
		);
	}

	/**
	 * @test
	 */
	public function setPictureForFileReferenceSetsPicture()
	{
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setPicture($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'picture',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPresentationReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getPresentation()
		);
	}

	/**
	 * @test
	 */
	public function setPresentationForStringSetsPresentation()
	{
		$this->subject->setPresentation('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'presentation',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getOrganizationReturnsInitialValueForOrganization()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getOrganization()
		);
	}

	/**
	 * @test
	 */
	public function setOrganizationForOrganizationSetsOrganization()
	{
		$organizationFixture = new \Famo\AnnuaireFamo\Domain\Model\Organization();
		$this->subject->setOrganization($organizationFixture);

		$this->assertAttributeEquals(
			$organizationFixture,
			'organization',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDepartmentReturnsInitialValueForDepartment()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getDepartment()
		);
	}

	/**
	 * @test
	 */
	public function setDepartmentForDepartmentSetsDepartment()
	{
		$departmentFixture = new \Famo\AnnuaireFamo\Domain\Model\Department();
		$this->subject->setDepartment($departmentFixture);

		$this->assertAttributeEquals(
			$departmentFixture,
			'department',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPositionReturnsInitialValueForPosition()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getPosition()
		);
	}

	/**
	 * @test
	 */
	public function setPositionForPositionSetsPosition()
	{
		$positionFixture = new \Famo\AnnuaireFamo\Domain\Model\Position();
		$this->subject->setPosition($positionFixture);

		$this->assertAttributeEquals(
			$positionFixture,
			'position',
			$this->subject
		);
	}
}
