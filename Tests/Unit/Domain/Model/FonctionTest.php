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
 * Test case for class \Famo\AnnuaireFamo\Domain\Model\Fonction.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Thibault FAIVRE <thibault.faivre@etu.u-bordeaux.fr>
 * @author Michael MONDOU <michael.mondou@etu.u-bordeaux.fr>
 */
class FonctionTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \Famo\AnnuaireFamo\Domain\Model\Fonction
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \Famo\AnnuaireFamo\Domain\Model\Fonction();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getWordingReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getWording()
		);
	}

	/**
	 * @test
	 */
	public function setWordingForStringSetsWording()
	{
		$this->subject->setWording('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'wording',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getInChargeReturnsInitialValueForBool()
	{
		$this->assertSame(
			FALSE,
			$this->subject->getInCharge()
		);
	}

	/**
	 * @test
	 */
	public function setInChargeForBoolSetsInCharge()
	{
		$this->subject->setInCharge(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'inCharge',
			$this->subject
		);
	}
}
