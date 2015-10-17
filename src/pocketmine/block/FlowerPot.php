<?php

namespace pocketmine\block;


use pocketmine\item\Item;
use pocketmine\item\Tool;
use pocketmine\nbt\NBT;
use pocketmine\nbt\tag\Compound;
use pocketmine\nbt\tag\Enum;
use pocketmine\nbt\tag\Int;
use pocketmine\nbt\tag\String;
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

    public function getToolType(){
        return Tool::NONE;
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
     if ($meta !== null){
      $this->getLevel()->setBlock($this, new FlowerPot($meta), true, true);
     }
     return true;
    }

    public function getDrops(Item $item){
     $drops[] = [Item::FLOWER_POT, 0, 1];
     return $drops;
    }
}
