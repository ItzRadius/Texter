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
        $position = new Vector3($sender->x, $sender->y, $sender->z);
        $x = $sender->x;
        $y = $sender->y;
        $z = $sender->z;
        $sender->sendMessage(Color::YELLOW . "Your POS is:\n" . "Your X is:" . Color::GREEN . $x . Color::YELLOW . "\nYour Y is: " . Color::GREEN . $y . Color::YELLOW . "\nYour Z is: " . Color::GREEN . $z . Color::YELLOW . "Put your X - Y -Z in the config file to add Floating Text!");
        }
}
   public function onJoin(PlayerJoinEvent $event){
       $player = $event->getPlayer();
       $level = $player->getLevel();
       $config = new Config($this->getDataFolder() . "/config.yml", Config::YAML);
       $x1 = $config->get("X1");
       $y1 = $config->get("Y1");
       $z1 = $config->get("Z1");
       $text1 = $config->get("TEXT1");
       $particle = new FloatingTextParticle(new Vector3($x1, $y1, $z1), $text1);
       $level->addParticle($particle);
       $x2 = $config->get("X2");
       $y2 = $config->get("Y2");
       $z2 = $config->get("Z2");
       $text2 = $config->get("TEXT2");
       $particle2 = new FloatingTextParticle(new Vector3($x2, $y2, $z2), $text2);
       $level->addParticle($particle2);
       $x3 = $config->get("X3");
       $y3 = $config->get("Y3");
       $z3 = $config->get("Z3");
       $text3 = $config->get("TEXT3");
       $particle3 = new FloatingTextParticle(new Vector3($x3, $y3, $z3), $text3);
       $level->addParticle($particle3);
   }
}
