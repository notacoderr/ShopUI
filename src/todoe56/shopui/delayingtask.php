<?php

namespace todoe56\shopui;

use pocketmine\scheduler\Task;
use pocketmine\item\Item;
use pocketmine\Player;

use todoe56\shopui\{shopui as Main, \commands\ShopCommand};


#untested.
class delayingtask extends Task {

	private $plugin, $time;

	public function __construct(Main $plugin, Item $itemClicked, Player $player) {
		$this->plugin = $plugin;
	}

	public function onRun($currentTick)
  {
  var_dump($currentTick);
     if($currentTick === 1000) {
       ShopCommand::openShop($itemClicked->getName(), $player);
     }
  }
}
