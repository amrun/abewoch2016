<?php
namespace Abewoch\Abewooffer\Tests\Unit\Controller;
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
 * Test case for class Abewoch\Abewooffer\Controller\OfferController.
 *
 */
class OfferControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{

	/**
	 * @var \Abewoch\Abewooffer\Controller\OfferController
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = $this->getMock('Abewoch\\Abewooffer\\Controller\\OfferController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllOffersFromRepositoryAndAssignsThemToView()
	{

		$allOffers = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$offerRepository = $this->getMock('Abewoch\\Abewooffer\\Domain\\Repository\\OfferRepository', array('findAll'), array(), '', FALSE);
		$offerRepository->expects($this->once())->method('findAll')->will($this->returnValue($allOffers));
		$this->inject($this->subject, 'offerRepository', $offerRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('offers', $allOffers);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenOfferToView()
	{
		$offer = new \Abewoch\Abewooffer\Domain\Model\Offer();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('offer', $offer);

		$this->subject->showAction($offer);
	}
}
