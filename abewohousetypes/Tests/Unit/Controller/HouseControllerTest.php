<?php
namespace Abewoch\Abewohousetypes\Tests\Unit\Controller;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 
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
 * Test case for class Abewoch\Abewohousetypes\Controller\HouseController.
 *
 */
class HouseControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{

	/**
	 * @var \Abewoch\Abewohousetypes\Controller\HouseController
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = $this->getMock('Abewoch\\Abewohousetypes\\Controller\\HouseController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllHousesFromRepositoryAndAssignsThemToView()
	{

		$allHouses = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$houseRepository = $this->getMock('Abewoch\\Abewohousetypes\\Domain\\Repository\\HouseRepository', array('findAll'), array(), '', FALSE);
		$houseRepository->expects($this->once())->method('findAll')->will($this->returnValue($allHouses));
		$this->inject($this->subject, 'houseRepository', $houseRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('houses', $allHouses);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenHouseToView()
	{
		$house = new \Abewoch\Abewohousetypes\Domain\Model\House();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('house', $house);

		$this->subject->showAction($house);
	}
}
