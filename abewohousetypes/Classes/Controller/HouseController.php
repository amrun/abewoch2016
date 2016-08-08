<?php
namespace Abewoch\Abewohousetypes\Controller;

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
 * HouseController
 */
class HouseController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * houseRepository
     *
     * @var \Abewoch\Abewohousetypes\Domain\Repository\HouseRepository
     * @inject
     */
    protected $houseRepository = NULL;
    
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $houses = $this->houseRepository->findAll();
        $this->view->assign('houses', $houses);
    }
    
    /**
     * action show
     *
     * @param \Abewoch\Abewohousetypes\Domain\Model\House $house
     * @return void
     */
    public function showAction(\Abewoch\Abewohousetypes\Domain\Model\House $house)
    {
        $this->view->assign('house', $house);
    }

}