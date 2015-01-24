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
 * Tracks
 */
class Tracks extends \TYPO3\CMS\Extbase\DomainObject\AbstractValueObject {

	/**
	 * title
	 *
	 * @var string
	 */
	protected $title = '';

	/**
	 * time
	 *
	 * @var string
	 */
	protected $time = '';

	/**
	 * description
	 *
	 * @var string
	 */
	protected $description = '';

	/**
	 * lyrics
	 *
	 * @var \Netzcript\Diskographie\Domain\Model\Lyrics
	 */
	protected $lyrics = NULL;

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
	 * Returns the time
	 *
	 * @return string $time
	 */
	public function getTime() {
		return $this->time;
	}

	/**
	 * Sets the time
	 *
	 * @param string $time
	 * @return void
	 */
	public function setTime($time) {
		$this->time = $time;
	}

	/**
	 * Returns the description
	 *
	 * @return string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Returns the lyrics
	 *
	 * @return \Netzcript\Diskographie\Domain\Model\Lyrics $lyrics
	 */
	public function getLyrics() {
		return $this->lyrics;
	}

	/**
	 * Sets the lyrics
	 *
	 * @param \Netzcript\Diskographie\Domain\Model\Lyrics $lyrics
	 * @return void
	 */
	public function setLyrics(\Netzcript\Diskographie\Domain\Model\Lyrics $lyrics) {
		$this->lyrics = $lyrics;
	}

}