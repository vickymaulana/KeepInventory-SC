<?php

namespace KeepInventory;

use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerDeathEvent
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as C;
use pocketmine\utils\server;

class Main extends PluginBase implements Listener{
  public function onEnable(){
    $this->getServer()->getLogger()->info(C::GREEN."KeepInventory Enable!");
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
  
  public function onDisable(){
    $this->getLogger()->info(C::RED."KeepInventory Disable");
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
  
  public function PlayerDeath(PlayerDeathEvent $event);{
    $event->setKeepInventory(true);
    }
  }
