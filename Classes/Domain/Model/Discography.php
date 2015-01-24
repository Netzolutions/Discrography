<?php
namespace Netzcript\Diskographie\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015 Markus Pircher <markus.pircher@netzolutions.eu>, netzolutions OHG
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
 * Discography
 */
class Discography extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * title
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title = '';

	/**
	 * artists
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Netzcript\Diskographie\Domain\Model\Artists>
	 * @lazy
	 */
	protected $artists = NULL;

	/**
	 * releaseType
	 *
	 * @var \Netzcript\Diskographie\Domain\Model\ReleaseType
	 */
	protected $releaseType = NULL;

	/**
	 * phonogramType
	 *
	 * @var \Netzcript\Diskographie\Domain\Model\PhonogramType
	 */
	protected $phonogramType = NULL;

	/**
	 * releases
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Netzcript\Diskographie\Domain\Model\Releases>
	 * @cascade remove
	 * @lazy
	 */
	protected $releases = NULL;

	/**
	 * __construct
	 */
	public function __construct() {
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
	protected function initStorageObjects() {
		$this->artists = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->releases = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the title
	 *
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Adds a Artists
	 *
	 * @param \Netzcript\Diskographie\Domain\Model\Artists $artist
	 * @return void
	 */
	public function addArtist(\Netzcript\Diskographie\Domain\Model\Artists $artist) {
		$this->artists->attach($artist);
	}

	/**
	 * Removes a Artists
	 *
	 * @param \Netzcript\Diskographie\Domain\Model\Artists $artistToRemove The Artists to be removed
	 * @return void
	 */
	public function removeArtist(\Netzcript\Diskographie\Domain\Model\Artists $artistToRemove) {
		$this->artists->detach($artistToRemove);
	}

	/**
	 * Returns the artists
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Netzcript\Diskographie\Domain\Model\Artists> $artists
	 */
	public function getArtists() {
		return $this->artists;
	}

	/**
	 * Sets the artists
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Netzcript\Diskographie\Domain\Model\Artists> $artists
	 * @return void
	 */
	public function setArtists(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $artists) {
		$this->artists = $artists;
	}

	/**
	 * Returns the releaseType
	 *
	 * @return \Netzcript\Diskographie\Domain\Model\ReleaseType $releaseType
	 */
	public function getReleaseType() {
		return $this->releaseType;
	}

	/**
	 * Sets the releaseType
	 *
	 * @param \Netzcript\Diskographie\Domain\Model\ReleaseType $releaseType
	 * @return void
	 */
	public function setReleaseType(\Netzcript\Diskographie\Domain\Model\ReleaseType $releaseType) {
		$this->releaseType = $releaseType;
	}

	/**
	 * Returns the phonogramType
	 *
	 * @return \Netzcript\Diskographie\Domain\Model\PhonogramType $phonogramType
	 */
	public function getPhonogramType() {
		return $this->phonogramType;
	}

	/**
	 * Sets the phonogramType
	 *
	 * @param \Netzcript\Diskographie\Domain\Model\PhonogramType $phonogramType
	 * @return void
	 */
	public function setPhonogramType(\Netzcript\Diskographie\Domain\Model\PhonogramType $phonogramType) {
		$this->phonogramType = $phonogramType;
	}

	/**
	 * Adds a Releases
	 *
	 * @param \Netzcript\Diskographie\Domain\Model\Releases $release
	 * @return void
	 */
	public function addRelease(\Netzcript\Diskographie\Domain\Model\Releases $release) {
		$this->releases->attach($release);
	}

	/**
	 * Removes a Releases
	 *
	 * @param \Netzcript\Diskographie\Domain\Model\Releases $releaseToRemove The Releases to be removed
	 * @return void
	 */
	public function removeRelease(\Netzcript\Diskographie\Domain\Model\Releases $releaseToRemove) {
		$this->releases->detach($releaseToRemove);
	}

	/**
	 * Returns the releases
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Netzcript\Diskographie\Domain\Model\Releases> $releases
	 */
	public function getReleases() {
		return $this->releases;
	}

	/**
	 * Sets the releases
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Netzcript\Diskographie\Domain\Model\Releases> $releases
	 * @return void
	 */
	public function setReleases(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $releases) {
		$this->releases = $releases;
	}

}