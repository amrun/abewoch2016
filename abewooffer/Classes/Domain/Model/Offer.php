<?php
namespace Abewoch\Abewooffer\Domain\Model;

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
 * Offer
 */
class Offer extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     *
     * @var string
     */
    protected $name = '';

    /**
     * street
     *
     * @var string
     */
    protected $street = '';

    /**
     * description
     *
     * @var string
     */
    protected $description = '';

    /**
     * maplink
     *
     * @var string
     */
    protected $maplink = '';

    /**
     * image
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     */
    protected $image;

    /**
     * documentation
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $documentation = null;

    /**
     * city
     *
     * @var \Abewoch\Abewooffer\Domain\Model\Locality
     */
    protected $city = null;

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
     * Returns the street
     *
     * @return string $street
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets the street
     *
     * @param string $street
     * @return void
     */
    public function setStreet($street)
    {
        $this->street = $street;
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
     * Returns the maplink
     *
     * @return string $maplink
     */
    public function getMaplink()
    {
        return $this->maplink;
    }

    /**
     * Sets the maplink
     *
     * @param string $maplink
     * @return void
     */
    public function setMaplink($maplink)
    {
        $this->maplink = $maplink;
    }

    /**
     * Returns the city
     *
     * @return \Abewoch\Abewooffer\Domain\Model\Locality $city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets the city
     *
     * @param \Abewoch\Abewooffer\Domain\Model\Locality $city
     * @return void
     */
    public function setCity(\Abewoch\Abewooffer\Domain\Model\Locality $city)
    {
        $this->city = $city;
    }

    /**
     * Returns the image
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $image
     */
    public function getImage() {
        return $this->image;
    }

    /**
     * Sets the image
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $image
     * @return void
     */
    public function setImage($image) {
        $this->image = $image;
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

}