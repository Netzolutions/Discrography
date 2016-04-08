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
 * Test case for class \Netzcript\Diskographie\Domain\Model\Release.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Markus Pircher <markus.pircher@netzolutions.eu>
 */
class ReleasesTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \Netzcript\Diskographie\Domain\Model\Release
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \Netzcript\Diskographie\Domain\Model\Release();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getPrimaryReleaseReturnsInitialValueForBoolean() {
		$this->assertSame(
			FALSE,
			$this->subject->getPrimaryRelease()
		);
	}

	/**
	 * @test
	 */
	public function setPrimaryReleaseForBooleanSetsPrimaryRelease() {
		$this->subject->setPrimaryRelease(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'primaryRelease',
			$this->subject
		);
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
	public function getPublicationDateReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getPublicationDate()
		);
	}

	/**
	 * @test
	 */
	public function setPublicationDateForDateTimeSetsPublicationDate() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setPublicationDate($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'publicationDate',
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
	public function getCoverReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getCover()
		);
	}

	/**
	 * @test
	 */
	public function setCoverForFileReferenceSetsCover() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setCover($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'cover',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDiscsReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getDiscs()
		);
	}

	/**
	 * @test
	 */
	public function setDiscsForIntegerSetsDiscs() {
		$this->subject->setDiscs(12);

		$this->assertAttributeEquals(
			12,
			'discs',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getLabelNumberReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getLabelNumber()
		);
	}

	/**
	 * @test
	 */
	public function setLabelNumberForStringSetsLabelNumber() {
		$this->subject->setLabelNumber('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'labelNumber',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCountryReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getCountry()
		);
	}

	/**
	 * @test
	 */
	public function setCountryForStringSetsCountry() {
		$this->subject->setCountry('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'country',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getRarityReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getRarity()
		);
	}

	/**
	 * @test
	 */
	public function setRarityForStringSetsRarity() {
		$this->subject->setRarity('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'rarity',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTrackListReturnsInitialValueForTracks() {
		$this->assertEquals(
			NULL,
			$this->subject->getOverrideTrack()
		);
	}

	/**
	 * @test
	 */
	public function setTrackListForTracksSetsTrackList() {
		$trackListFixture = new \Netzcript\Diskographie\Domain\Model\Track();
		$this->subject->setOverrideTrack($trackListFixture);

		$this->assertAttributeEquals(
			$trackListFixture,
			'trackList',
			$this->subject
		);
	}
}
