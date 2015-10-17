/*
 *
 *  ____            _        _   __  __ _                  __  __ ____
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PocketMine Team
 * @link http://www.pocketmine.net/
 *
 *
*/

<?php

namespace pocketmine\block;


use pocketmine\item\Item;
use pocketmine\item\Tool;
use pocketmine\Player;
use pocketmine\tile\Tile;

class FlowerPot extends Solid{
    protected $id = self::FLOWER_POT;
    protected $meta;

    public function __construct($meta = 0){
        $this->meta = $meta;
    }

    public function getName(){
        return "Flower Pot";
    }

    public function canBeActivated(){
        return true;
    }

    public function getHardness(){
        return 0;
    }

    public function getLightLevel(){
        return 1;
    } 

    public function onActivate(Item $item, Player $player = NULL){
     $array = [
      "Poppy" => 1,
      "Dandelion" => 2,
      "Oak Sapling" => 3,
      "Spruce Sapling" => 4,
      "Birch Sapling" => 5,
      "Jungle Sapling" => 6,
      "Red Mushroom" => 7,
      "Brown Mushroom" => 8,
      "Cactus" => 9,
      "Dead Bush" => 10,
      "Fern" => 11,
      "Acacia Sapling" => 12,
      "Dark Oak Sapling" => 13
     ];
     $meta = $array[$item->getName()];
      $this->getLevel()->setBlock($this,Block::get(140,$meta), true, true);
     return true;
    }

    public function getDrops(Item $item){
     $drops[] = [Item::FLOWER_POT, 0, 1];
     if ( $meta !== 0){
      $drops_two
    }
     return $drops;
    }
}
 5,
      
