<?php

namespace Abewoch\Abewooffer\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 
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
 * Test case for class \Abewoch\Abewooffer\Domain\Model\Locality.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class LocalityTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \Abewoch\Abewooffer\Domain\Model\Locality
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \Abewoch\Abewooffer\Domain\Model\Locality();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getNameReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getName()
		);
	}

	/**
	 * @test
	 */
	public function setNameForStringSetsName()
	{
		$this->subject->setName('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'name',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getZipReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setZipForIntSetsZip()
	{	}

	/**
	 * @test
	 */
	public function getCantonReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getCanton()
		);
	}

	/**
	 * @test
	 */
	public function setCantonForStringSetsCanton()
	{
		$this->subject->setCanton('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'canton',
			$this->subject
		);
	}
}
