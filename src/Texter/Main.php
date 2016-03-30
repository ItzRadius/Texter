<?php

namespace Texter;

use pocketmine\Player;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerRespawnEvent;
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

class Main extends PluginBase implements Listener{
    
    public function onEnable(){
    	$this->getServer()->getPluginManager()->registerEvents($this ,$this);
        $this->getLogger()->info(Color::GREEN ."Enabled!");
        @mkdir($this->getDataFolder());
	$config = new Config($this->getDataFolder() . "/config.yml", Config::YAML);
	$config->save();
    }
    
    public function onDisable(){
    	$this->getLogger()->info(Color::RED ."Disabled");
    }
    
    public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
        if($cmd->getName() == "texter"){
        $x = $sender->getX();
        $y = $sender->getZ();
        $z = $sender->getZ();
        $position = new Vector3($sender->x, $sender->y, $sender->z);
        $text = implode(" ", $args);
        $config = new Config($this->getDataFolder() . "/config.yml", Config::YAML);
	$config->set("Texter", array(
        "x" => $x,
        "y" => $y,
        "z" => $z,
        "text" => $text,));
	$config->save();
        $sender->addParticle(new FloatingTextParticle($position, $text));
        }
}
}

