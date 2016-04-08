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

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * Class Discography
 * @package Netzcript\Diskographie\Domain\Model
 */
class Discography extends AbstractEntity
{
	/**
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title = '';

	/**
	 * @var string
	 */
	protected $description = '';

	/**
	 * @var ObjectStorage<\Netzcript\Diskographie\Domain\Model\Artist>
	 */
	protected $artists = NULL;

	/**
	 * @var ReleaseType
	 */
	protected $releaseType = NULL;

	/**
	 * @var ObjectStorage<\Netzcript\Diskographie\Domain\Model\Release>
	 * @cascade remove
	 * @lazy
	 */
	protected $releases = NULL;

	/**
	 * Default trackList
	 * @var ObjectStorage<\Netzcript\Diskographie\Domain\Model\Track>
	 */
	protected $tracks = NULL;

	/**
	 * __construct
	 */
	public function __construct() {
		$this->artists = new ObjectStorage();
		$this->releases = new ObjectStorage();
		$this->tracks = new ObjectStorage();
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
	 * Adds a Artist
	 *
	 * @param Artist $artist
	 * @return void
	 */
	public function addArtist(Artist $artist) {
		$this->artists->attach($artist);
	}

	/**
	 * Removes a Artist
	 *
	 * @param Artist $artistToRemove The Artist to be removed
	 * @return void
	 */
	public function removeArtist(Artist $artistToRemove) {
		$this->artists->detach($artistToRemove);
	}

	/**
	 * Returns the artists
	 *
	 * @return ObjectStorage<\Netzcript\Diskographie\Domain\Model\Artist> $artists
	 */
	public function getArtists() {
		return $this->artists;
	}

	/**
	 * Sets the artists
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Netzcript\Diskographie\Domain\Model\Artist> $artists
	 * @return void
	 */
	public function setArtists(ObjectStorage $artists) {
		$this->artists = $artists;
	}

	/**
	 * Returns the releaseType
	 *
	 * @return ReleaseType $releaseType
	 */
	public function getReleaseType() {
		return $this->releaseType;
	}

	/**
	 * Sets the releaseType
	 *
	 * @param ReleaseType $releaseType
	 * @return void
	 */
	public function setReleaseType(ReleaseType $releaseType) {
		$this->releaseType = $releaseType;
	}

	/**
	 * Adds a Release
	 *
	 * @param Release $release
	 * @return void
	 */
	public function addRelease(Release $release) {
		$this->releases->attach($release);
	}

	/**
	 * Removes a Release
	 *
	 * @param Release $releaseToRemove The Release to be removed
	 * @return void
	 */
	public function removeRelease(Release $releaseToRemove) {
		$this->releases->detach($releaseToRemove);
	}

	/**
	 * Returns the releases
	 *
	 * @return ObjectStorage<\Netzcript\Diskographie\Domain\Model\Release> $releases
	 */
	public function getReleases() {
		return $this->releases;
	}

	/**
	 * Sets the releases
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Netzcript\Diskographie\Domain\Model\Release> $releases
	 * @return void
	 */
	public function setReleases(ObjectStorage $releases) {
		$this->releases = $releases;
	}

	/**
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * @param string $description
	 */
	public function setDescription($description)
	{
		$this->description = $description;
	}

}