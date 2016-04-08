<?php
namespace Netzcript\Diskographie\Domain\Repository;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015-2016 Markus Pircher <markus.pircher@netzolutions.eu>, netzolutions OHG
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

use TYPO3\CMS\Extbase\Persistence\Generic\Query;
use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * The repository for Discographies
 */
class DiscographyRepository extends Repository
{

    public function findOldDiscography()
    {
        /** @var Query $query */
        $query = $this->createQuery();
        $query->statement("
SELECT  'id',  'name',  'artist',  'time',  LEFT('desc_c', 256),  'type',  LEFT('pic', 256),  'discs',  'label_nr',  'land',  'rar',  'primary_a',  'pid' 
FROM 'disco' 
ORDER BY 'id' DESC");
        return $query->execute(true);
    }

    public function findOldDiscographyVersions($disco)
    {
        /** @var Query $query */
        $query = $this->createQuery();
        $query->statement("
SELECT  'id',  'name',  'artist',  'time',  LEFT('desc_c', 256),  'type',  LEFT('pic', 256),  'discs',  'label_nr',  'land',  'rar',  'primary_a',  'pid'
FROM 'disco' 
ORDER BY 'id' DESC");
        return $query->execute(true);
    }
}