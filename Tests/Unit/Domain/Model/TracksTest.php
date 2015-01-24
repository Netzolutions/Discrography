<?php

namespace Netzcript\Diskographie\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2015 Markus Pircher <markus.pircher@netzolutions.eu>, netzolutions OHG
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
 * Test case for class \Netzcript\Diskographie\Domain\Model\Tracks.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Markus Pircher <markus.pircher@netzolutions.eu>
 */
class TracksTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \Netzcript\Diskographie\Domain\Model\Tracks
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \Netzcript\Diskographie\Domain\Model\Tracks();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTitle()
		);
	}

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle() {
		$this->subject->setTitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'title',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTimeReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTime()
		);
	}

	/**
	 * @test
	 */
	public function setTimeForStringSetsTime() {
		$this->subject->setTime('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'time',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getDescription()
		);
	}

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription() {
		$this->subject->setDescription('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'description',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getLyricsReturnsInitialValueForLyrics() {
		$this->assertEquals(
			NULL,
			$this->subject->getLyrics()
		);
	}

	/**
	 * @test
	 */
	public function setLyricsForLyricsSetsLyrics() {
		$lyricsFixture = new \Netzcript\Diskographie\Domain\Model\Lyrics();
		$this->subject->setLyrics($lyricsFixture);

		$this->assertAttributeEquals(
			$lyricsFixture,
			'lyrics',
			$this->subject
		);
	}
}