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
