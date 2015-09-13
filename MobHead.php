<?php

namespace pocketmine\block;

use pocketmine\item\Item;
use pocketmine\item\Tool;

class Mob_Head extends Solid{

	protected $id = self::MOB_HEAD;
	public function __construct(){
	}
	public function getHardness(){
		return 2;
	}
	public function getResistance(){
		return 30;
	}
	public function getToolType(){
		return Tool::TYPE_PICKAXE;
	}
	public function getName(){
		return "Mob Head";
	}
	public function getDrops(Item $item){
			return [
				[Item::BRICKS_BLOCK, 0, 1],
			];
		}else{
			return [];
		}
	}
