<?php

namespace Abewoch\Abewohousetypes\Tests\Unit\Domain\Model;

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
 * Test case for class \Abewoch\Abewohousetypes\Domain\Model\House.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class HouseTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \Abewoch\Abewohousetypes\Domain\Model\House
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \Abewoch\Abewohousetypes\Domain\Model\House();
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
	public function getBasicDataReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getBasicData()
		);
	}

	/**
	 * @test
	 */
	public function setBasicDataForStringSetsBasicData()
	{
		$this->subject->setBasicData('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'basicData',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getConstructionReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getConstruction()
		);
	}

	/**
	 * @test
	 */
	public function setConstructionForStringSetsConstruction()
	{
		$this->subject->setConstruction('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'construction',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCategoriesReturnsInitialValueForCategory()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getCategories()
		);
	}

	/**
	 * @test
	 */
	public function setCategoriesForCategorySetsCategories()
	{
		$categoriesFixture = new \Abewoch\Abewohousetypes\Domain\Model\Category();
		$this->subject->setCategories($categoriesFixture);

		$this->assertAttributeEquals(
			$categoriesFixture,
			'categories',
			$this->subject
		);
	}
}
