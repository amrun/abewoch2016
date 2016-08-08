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
 * Test case for class \Abewoch\Abewooffer\Domain\Model\Offer.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class OfferTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \Abewoch\Abewooffer\Domain\Model\Offer
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \Abewoch\Abewooffer\Domain\Model\Offer();
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
	public function getStreetReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getStreet()
		);
	}

	/**
	 * @test
	 */
	public function setStreetForStringSetsStreet()
	{
		$this->subject->setStreet('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'street',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMaplinkReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getMaplink()
		);
	}

	/**
	 * @test
	 */
	public function setMaplinkForStringSetsMaplink()
	{
		$this->subject->setMaplink('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'maplink',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getDescription()
		);
	}

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription()
	{
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
	public function getImageReturnsInitialValueForFileReference()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getImage()
		);
	}

	/**
	 * @test
	 */
	public function setImageForFileReferenceSetsImage()
	{
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setImage($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'image',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDocumentationReturnsInitialValueForFileReference()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getDocumentation()
		);
	}

	/**
	 * @test
	 */
	public function setDocumentationForFileReferenceSetsDocumentation()
	{
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setDocumentation($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'documentation',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCityReturnsInitialValueForLocality()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getCity()
		);
	}

	/**
	 * @test
	 */
	public function setCityForLocalitySetsCity()
	{
		$cityFixture = new \Abewoch\Abewooffer\Domain\Model\Locality();
		$this->subject->setCity($cityFixture);

		$this->assertAttributeEquals(
			$cityFixture,
			'city',
			$this->subject
		);
	}
}
