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
 * Position
 */
class Position extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * wording
     *
     * @var string
     * @validate NotEmpty
     */
    protected $wording = '';
    
    /**
     * inCharge
     *
     * @var bool
     */
    protected $inCharge = false;
    
    /**
     * Returns the wording
     *
     * @return string $wording
     */
    public function getWording()
    {
        return $this->wording;
    }
    
    /**
     * Sets the wording
     *
     * @param string $wording
     * @return void
     */
    public function setWording($wording)
    {
        $this->wording = $wording;
    }
    
    /**
     * Returns the inCharge
     *
     * @return bool $inCharge
     */
    public function getInCharge()
    {
        return $this->inCharge;
    }
    
    /**
     * Sets the inCharge
     *
     * @param bool $inCharge
     * @return void
     */
    public function setInCharge($inCharge)
    {
        $this->inCharge = $inCharge;
    }
    
    /**
     * Returns the boolean state of inCharge
     *
     * @return bool
     */
    public function isInCharge()
    {
        return $this->inCharge;
    }

}