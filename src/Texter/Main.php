<?php

namespace Texter;

use pocketmine\Player;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerRespawnEvent;
use pocketmine\utils\TextFormat as Color;
use pocketmine\command\Command, CommandSender};
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
	$this->saveDefaultConfig();
    	$this->getServer()->getPluginManager()->registerEvents($this ,$this);
        $this->getLogger()->info(Color::GREEN ."Enabled!");
    }
    
    public function onDisable(){
    	$this->getLogger()->info(Color::RED ."Disabled");
    }
    
    public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
        if($cmd->getName() == "mypos"){
        $x = $sender->x;
        $y = $sender->y;
        $z = $sender->z;
        $sender->sendMessage(Color::YELLOW . "Your POS is:\n" . "Your X is: " . Color::GREEN . $x . Color::YELLOW . "\nYour Y is: " . Color::GREEN . $y . Color::YELLOW . "\nYour Z is: " . Color::GREEN . $z . Color::YELLOW . "\nPut your X - Y -Z in the config file to add Floating Text!");
        }
}
   public function onJoin(PlayerJoinEvent $event){
       $player = $event->getPlayer();
       $level = $player->getLevel();
       $config = new Config($this->getDataFolder() . "/config.yml", Config::YAML);
       $x1 = $config->get("X1");
       $y1 = $config->get("Y1");
       $z1 = $config->get("Z1");
       $text1 = str_replace("&", "§", $config->get("TEXT1")); 
       $particle = new FloatingTextParticle(new Vector3($x1, $y1, $z1), $text1);
       $level->addParticle($particle);
       $x2 = $config->get("X2");
       $y2 = $config->get("Y2");
       $z2 = $config->get("Z2");
       $text2 = str_replace("&", "§", $config->get("TEXT2")); 
       $particle2 = new FloatingTextParticle(new Vector3($x2, $y2, $z2), $text2);
       $level->addParticle($particle2);
       $x3 = $config->get("X3");
       $y3 = $config->get("Y3");
       $z3 = $config->get("Z3");
       $text3 = str_replace("&", "§", $config->get("TEXT3")); 
       $particle3 = new FloatingTextParticle(new Vector3($x3, $y3, $z3), $text3);
       $level->addParticle($particle3);
       $x4 = $config->get("X4");
       $y4 = $config->get("Y4");
       $z4 = $config->get("Z4");
       $text4 = str_replace("&", "§", $config->get("TEXT4")); 
       $particle4 = new FloatingTextParticle(new Vector3($x4, $y4, $z4), $text3);
       $level->addParticle($particle4);
       $x5 = $config->get("X5");
       $y5 = $config->get("Y5");
       $z5 = $config->get("Z5");
       $text5 = str_replace("&", "§", $config->get("TEXT5")); 
       $particle5 = new FloatingTextParticle(new Vector3($x5, $y5, $z5), $text5);
       $level->addParticle($particle5);
       $x6 = $config->get("X6");
       $y6 = $config->get("Y6");
       $z6 = $config->get("Z6");
       $text6 = str_replace("&", "§", $config->get("TEXT6")); 
       $particle6 = new FloatingTextParticle(new Vector3($x6, $y6, $z6), $text6);
       $level->addParticle($particle6);
       $x7 = $config->get("X7");
       $y7 = $config->get("Y7");
       $z7 = $config->get("Z7");
       $text7 = str_replace("&", "§", $config->get("TEX7")); 
       $particle7 = new FloatingTextParticle(new Vector3($x7, $y7, $z7), $text7);
       $level->addParticle($particle7);
       $x8 = $config->get("X8");
       $y8 = $config->get("Y8");
       $z8 = $config->get("Z8");
       $text8 = str_replace("&", "§", $config->get("TEXT8")); 
       $particle8 = new FloatingTextParticle(new Vector3($x8, $y8, $z8), $text8);
       $level->addParticle($particle8);
       $x9 = $config->get("X9");
       $y9 = $config->get("Y9");
       $z9 = $config->get("Z9");
       $text9 = str_replace("&", "§", $config->get("TEXT9")); 
       $particle9 = new FloatingTextParticle(new Vector3($x9, $y9, $z9), $text9);
       $level->addParticle($particle9);
       $x10 = $config->get("X10");
       $y10 = $config->get("Y10");
       $z10 = $config->get("Z10");
       $text10 = str_replace("&", "§", $config->get("TEXT10")); 
       $particle10 = new FloatingTextParticle(new Vector3($x10, $y10, $z10), $text10);
       $level->addParticle($particle10);
   }
   public function onRespawn(PlayerRespawnEvent $event){
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
       $x4 = $config->get("X4");
       $y4 = $config->get("Y4");
       $z4 = $config->get("Z4");
       $text4 = $config->get("TEXT4");
       $particle4 = new FloatingTextParticle(new Vector3($x4, $y4, $z4), $text3);
       $level->addParticle($particle4);
       $x5 = $config->get("X5");
       $y5 = $config->get("Y5");
       $z5 = $config->get("Z5");
       $text5 = $config->get("TEXT5");
       $particle5 = new FloatingTextParticle(new Vector3($x5, $y5, $z5), $text5);
       $level->addParticle($particle5);
       $x6 = $config->get("X6");
       $y6 = $config->get("Y6");
       $z6 = $config->get("Z6");
       $text6 = $config->get("TEXT6");
       $particle6 = new FloatingTextParticle(new Vector3($x6, $y6, $z6), $text6);
       $level->addParticle($particle6);
       $x7 = $config->get("X7");
       $y7 = $config->get("Y7");
       $z7 = $config->get("Z7");
       $text7 = $config->get("TEXT7");
       $particle7 = new FloatingTextParticle(new Vector3($x7, $y7, $z7), $text7);
       $level->addParticle($particle7);
       $x8 = $config->get("X8");
       $y8 = $config->get("Y8");
       $z8 = $config->get("Z8");
       $text8 = $config->get("TEXT8");
       $particle8 = new FloatingTextParticle(new Vector3($x8, $y8, $z8), $text8);
       $level->addParticle($particle8);
       $x9 = $config->get("X9");
       $y9 = $config->get("Y9");
       $z9 = $config->get("Z9");
       $text9 = $config->get("TEXT9");
       $particle9 = new FloatingTextParticle(new Vector3($x9, $y9, $z9), $text9);
       $level->addParticle($particle9);
       $x10 = $config->get("X10");
       $y10 = $config->get("Y10");
       $z10 = $config->get("Z10");
       $text10 = $config->get("TEXT10");
       $particle10 = new FloatingTextParticle(new Vector3($x10, $y10, $z10), $text10);
       $level->addParticle($particle10);
   }
}
