<?php

namespace Texter;

use pocketmine\Player;
use pocketmine\utils\TextFormat as Color;
use pocketmine\command\{Command, CommandSender};
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\level\particle\FloatingTextParticle;
use pocketmine\level\particle\Particle;
use pocketmine\level\Level;
use pocketmine\level\Position;
use pocketmine\level\Position\getLevel;
use pocketmine\plugin\PluginManager;
use pocketmine\plugin\Plugin;
use pocketmine\math\Vector3;
use pocketmine\utils\config;

class Main extends PluginBase{
    
    public function onEnable(){
        $this->getLogger()->info(Color::GREEN ."Enabled!");
        @mkdir($this->getDataFolder());
	$config = new Config($this->getDataFolder() . "/config.yml", Config::YAML);
	$this->saveResource("config.yml");
    }
    
    public function onDisable(){
    	$this->getLogger()->info(Color::RED ."Disabled");
    }
    
    public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
        if($cmd->getName() == "texter"){
$x = $sender->getX();
$y = $sender->getY();
$z = $sender->getZ();
$level = $sender->getLevel();
$text = implode(" ", $args);
$config = new Config($this->getDataFolder() . "/config.yml", Config::YAML);
$config->set("$text, $position);
$this->saveResource("config.yml");
$position = new Vector3($sender->x, $sender->y + 0.5, $sender->z);
$sender->getLevel()->addParticle(new FloatingTextParticle($position, $level, $text));
        }
        return true;
    }
}
