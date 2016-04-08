<?php
namespace Netzcript\Diskographie\Domain\Model;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015-2016 Markus Pircher <markus.pircher@netzolutions.eu>, netzolutions OHG
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

use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\DomainObject\AbstractValueObject;

/**
 * Class Release
 * @package Netzcript\Diskographie\Domain\Model
 */
class Release extends AbstractValueObject
{

    /**
     * primaryRelease
     *
     * @var boolean
     */
    protected $primaryRelease = FALSE;

    /**
     * title
     *
     * @var string
     * @validate NotEmpty
     */
    protected $title = '';

    /**
     * publicationDate
     *
     * @var \DateTime
     */
    protected $publicationDate = NULL;

    /**
     * description
     *
     * @var string
     */
    protected $description = '';

    /**
     * cover
     *
     * @var FileReference
     */
    protected $cover = NULL;

    /**
     * discs
     *
     * @var integer
     */
    protected $discs = 0;

    /**
     * labelNumber
     *
     * @var string
     */
    protected $labelNumber = '';

    /**
     * country
     *
     * @var string
     */
    protected $country = '';

    /**
     * rarity
     *
     * @var string
     */
    protected $rarity = '';

    /**
     * trackList
     *
     * @var Track
     */
    protected $overrideTrack = NULL;

    /**
     * Returns the primaryRelease
     *
     * @return boolean $primaryRelease
     */
    public function getPrimaryRelease()
    {
        return $this->primaryRelease;
    }

    /**
     * Sets the primaryRelease
     *
     * @param boolean $primaryRelease
     * @return void
     */
    public function setPrimaryRelease($primaryRelease)
    {
        $this->primaryRelease = $primaryRelease;
    }

    /**
     * Returns the boolean state of primaryRelease
     *
     * @return boolean
     */
    public function isPrimaryRelease()
    {
        return $this->primaryRelease;
    }

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the publicationDate
     *
     * @return \DateTime $publicationDate
     */
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    /**
     * Sets the publicationDate
     *
     * @param \DateTime $publicationDate
     * @return void
     */
    public function setPublicationDate(\DateTime $publicationDate)
    {
        $this->publicationDate = $publicationDate;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the cover
     *
     * @return FileReference $cover
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * Sets the cover
     *
     * @param FileReference $cover
     * @return void
     */
    public function setCover(FileReference $cover)
    {
        $this->cover = $cover;
    }

    /**
     * Returns the discs
     *
     * @return integer $discs
     */
    public function getDiscs()
    {
        return $this->discs;
    }

    /**
     * Sets the discs
     *
     * @param integer $discs
     * @return void
     */
    public function setDiscs($discs)
    {
        $this->discs = $discs;
    }

    /**
     * Returns the labelNumber
     *
     * @return string $labelNumber
     */
    public function getLabelNumber()
    {
        return $this->labelNumber;
    }

    /**
     * Sets the labelNumber
     *
     * @param string $labelNumber
     * @return void
     */
    public function setLabelNumber($labelNumber)
    {
        $this->labelNumber = $labelNumber;
    }

    /**
     * Returns the country
     *
     * @return string $country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets the country
     *
     * @param string $country
     * @return void
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * Returns the rarity
     *
     * @return string $rarity
     */
    public function getRarity()
    {
        return $this->rarity;
    }

    /**
     * Sets the rarity
     *
     * @param string $rarity
     * @return void
     */
    public function setRarity($rarity)
    {
        $this->rarity = $rarity;
    }

    /**
     * Returns the trackList
     *
     * @return Track $trackList
     */
    public function getOverrideTrack()
    {
        return $this->overrideTrack;
    }

    /**
     * Sets the trackList
     *
     * @param Track $overrideTrack
     * @return void
     */
    public function setOverrideTrack(Track $overrideTrack)
    {
        $this->overrideTrack = $overrideTrack;
    }

}