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
 * Test case for class \Netzcript\Diskographie\Domain\Model\Discography.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Markus Pircher <markus.pircher@netzolutions.eu>
 */
class DiscographyTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \Netzcript\Diskographie\Domain\Model\Discography
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \Netzcript\Diskographie\Domain\Model\Discography();
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
	public function getArtistsReturnsInitialValueForArtists() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getArtists()
		);
	}

	/**
	 * @test
	 */
	public function setArtistsForObjectStorageContainingArtistsSetsArtists() {
		$artist = new \Netzcript\Diskographie\Domain\Model\Artists();
		$objectStorageHoldingExactlyOneArtists = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneArtists->attach($artist);
		$this->subject->setArtists($objectStorageHoldingExactlyOneArtists);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneArtists,
			'artists',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addArtistToObjectStorageHoldingArtists() {
		$artist = new \Netzcript\Diskographie\Domain\Model\Artists();
		$artistsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$artistsObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($artist));
		$this->inject($this->subject, 'artists', $artistsObjectStorageMock);

		$this->subject->addArtist($artist);
	}

	/**
	 * @test
	 */
	public function removeArtistFromObjectStorageHoldingArtists() {
		$artist = new \Netzcript\Diskographie\Domain\Model\Artists();
		$artistsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$artistsObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($artist));
		$this->inject($this->subject, 'artists', $artistsObjectStorageMock);

		$this->subject->removeArtist($artist);

	}

	/**
	 * @test
	 */
	public function getReleaseTypeReturnsInitialValueForReleaseType() {
		$this->assertEquals(
			NULL,
			$this->subject->getReleaseType()
		);
	}

	/**
	 * @test
	 */
	public function setReleaseTypeForReleaseTypeSetsReleaseType() {
		$releaseTypeFixture = new \Netzcript\Diskographie\Domain\Model\ReleaseType();
		$this->subject->setReleaseType($releaseTypeFixture);

		$this->assertAttributeEquals(
			$releaseTypeFixture,
			'releaseType',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPhonogramTypeReturnsInitialValueForPhonogramType() {
		$this->assertEquals(
			NULL,
			$this->subject->getPhonogramType()
		);
	}

	/**
	 * @test
	 */
	public function setPhonogramTypeForPhonogramTypeSetsPhonogramType() {
		$phonogramTypeFixture = new \Netzcript\Diskographie\Domain\Model\PhonogramType();
		$this->subject->setPhonogramType($phonogramTypeFixture);

		$this->assertAttributeEquals(
			$phonogramTypeFixture,
			'phonogramType',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getReleasesReturnsInitialValueForReleases() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getReleases()
		);
	}

	/**
	 * @test
	 */
	public function setReleasesForObjectStorageContainingReleasesSetsReleases() {
		$release = new \Netzcript\Diskographie\Domain\Model\Releases();
		$objectStorageHoldingExactlyOneReleases = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneReleases->attach($release);
		$this->subject->setReleases($objectStorageHoldingExactlyOneReleases);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneReleases,
			'releases',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addReleaseToObjectStorageHoldingReleases() {
		$release = new \Netzcript\Diskographie\Domain\Model\Releases();
		$releasesObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$releasesObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($release));
		$this->inject($this->subject, 'releases', $releasesObjectStorageMock);

		$this->subject->addRelease($release);
	}

	/**
	 * @test
	 */
	public function removeReleaseFromObjectStorageHoldingReleases() {
		$release = new \Netzcript\Diskographie\Domain\Model\Releases();
		$releasesObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$releasesObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($release));
		$this->inject($this->subject, 'releases', $releasesObjectStorageMock);

		$this->subject->removeRelease($release);

	}
}
