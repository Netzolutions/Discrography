<?php
namespace Netzcript\Diskographie\Tests\Unit\Controller;
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
 * Test case for class Netzcript\Diskographie\Controller\DiscographyController.
 *
 * @author Markus Pircher <markus.pircher@netzolutions.eu>
 */
class DiscographyControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \Netzcript\Diskographie\Controller\DiscographyController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('Netzcript\\Diskographie\\Controller\\DiscographyController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllDiscographiesFromRepositoryAndAssignsThemToView() {

		$allDiscographies = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$discographyRepository = $this->getMock('Netzcript\\Diskographie\\Domain\\Repository\\DiscographyRepository', array('findAll'), array(), '', FALSE);
		$discographyRepository->expects($this->once())->method('findAll')->will($this->returnValue($allDiscographies));
		$this->inject($this->subject, 'discographyRepository', $discographyRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('discographies', $allDiscographies);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenDiscographyToView() {
		$discography = new \Netzcript\Diskographie\Domain\Model\Discography();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('discography', $discography);

		$this->subject->showAction($discography);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenDiscographyToView() {
		$discography = new \Netzcript\Diskographie\Domain\Model\Discography();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newDiscography', $discography);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($discography);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenDiscographyToDiscographyRepository() {
		$discography = new \Netzcript\Diskographie\Domain\Model\Discography();

		$discographyRepository = $this->getMock('Netzcript\\Diskographie\\Domain\\Repository\\DiscographyRepository', array('add'), array(), '', FALSE);
		$discographyRepository->expects($this->once())->method('add')->with($discography);
		$this->inject($this->subject, 'discographyRepository', $discographyRepository);

		$this->subject->createAction($discography);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenDiscographyToView() {
		$discography = new \Netzcript\Diskographie\Domain\Model\Discography();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('discography', $discography);

		$this->subject->editAction($discography);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenDiscographyInDiscographyRepository() {
		$discography = new \Netzcript\Diskographie\Domain\Model\Discography();

		$discographyRepository = $this->getMock('Netzcript\\Diskographie\\Domain\\Repository\\DiscographyRepository', array('update'), array(), '', FALSE);
		$discographyRepository->expects($this->once())->method('update')->with($discography);
		$this->inject($this->subject, 'discographyRepository', $discographyRepository);

		$this->subject->updateAction($discography);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenDiscographyFromDiscographyRepository() {
		$discography = new \Netzcript\Diskographie\Domain\Model\Discography();

		$discographyRepository = $this->getMock('Netzcript\\Diskographie\\Domain\\Repository\\DiscographyRepository', array('remove'), array(), '', FALSE);
		$discographyRepository->expects($this->once())->method('remove')->with($discography);
		$this->inject($this->subject, 'discographyRepository', $discographyRepository);

		$this->subject->deleteAction($discography);
	}
}
