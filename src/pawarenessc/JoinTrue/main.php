<?php

namespace pawarenessc\JoinTrue;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\player\PlayerJoinEvent;

class main extends PluginBase implements Listener{
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
		$this->getLogger()->info("プラグインを読み込みました。");
		$this->getLogger()->info("LICENSE: NYSL Version 0.9982");
}

public function onJoin(PlayerJoinEvent $event){
	$event->getPlayer()->setAllowMovementCheats(true);
	}
}