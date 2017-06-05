<?php

namespace KeepInventory;

use pocketmine\event\Listener;
use pocketmine\player;
use pocketmine\plugin\PluginBase;
use pocketmine\level\Level;
use pocketmine\block\Block;
use pocketmine\entity\Entity;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\player\PlayerRespawnEvent;

class Main extends PluginBase implements Listener{
  
  public $drops = array();
  
  public function onEnable(){
    $this->getServer()->getLogger()->info(textFormat::RED."KeepInventory.");
    $this->getServer()->getPluginManager()->registerEvents($this, $this);}
  
  public function PlayerDeathPlayerDeathEvent $event){
    $player = $event->getEntity();
    $this->drops[$player->getName()][1] = $player-getInventory()->getArmorContents();
    
