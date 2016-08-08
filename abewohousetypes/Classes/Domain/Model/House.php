<?php
namespace Abewoch\Abewohousetypes\Domain\Model;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016
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
 * House
 */
class House extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     *
     * @var string
     */
    protected $name = '';
    
    /**
     * description
     *
     * @var string
     */
    protected $description = '';
    
    /**
     * documentation
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $documentation = null;
    
    /**
     * image
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $image = null;
    
    /**
     * basicData
     *
     * @var string
     */
    protected $basicData = '';
    
    /**
     * categories
     *
     * @var \Abewoch\Abewohousetypes\Domain\Model\Category
     */
    protected $categories = null;
    
    /**
     * construction
     *
     * @var string
     */
    protected $construction = '';
    
    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }
    
    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        
    }
    
    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    /**
     * Returns the documentation
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $documentation
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }
    
    /**
     * Sets the documentation
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $documentation
     * @return void
     */
    public function setDocumentation(\TYPO3\CMS\Extbase\Domain\Model\FileReference $documentation)
    {
        $this->documentation = $documentation;
    }
    
    /**
     * Returns the image
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     */
    public function getImage()
    {
        return $this->image;
    }
    
    /**
     * Sets the image
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->image = $image;
    }
    
    /**
     * Returns the basicData
     *
     * @return string $basicData
     */
    public function getBasicData()
    {
        return $this->basicData;
    }
    
    /**
     * Sets the basicData
     *
     * @param string $basicData
     * @return void
     */
    public function setBasicData($basicData)
    {
        $this->basicData = $basicData;
    }
    
    /**
     * Returns the categories
     *
     * @return \Abewoch\Abewohousetypes\Domain\Model\Category $categories
     */
    public function getCategories()
    {
        return $this->categories;
    }
    
    /**
     * Sets the categories
     *
     * @param \Abewoch\Abewohousetypes\Domain\Model\Category $categories
     * @return void
     */
    public function setCategories(\Abewoch\Abewohousetypes\Domain\Model\Category $categories)
    {
        $this->categories = $categories;
    }
    
    /**
     * Returns the construction
     *
     * @return string $construction
     */
    public function getConstruction()
    {
        return $this->construction;
    }
    
    /**
     * Sets the construction
     *
     * @param string $construction
     * @return void
     */
    public function setConstruction($construction)
    {
        $this->construction = $construction;
    }

}