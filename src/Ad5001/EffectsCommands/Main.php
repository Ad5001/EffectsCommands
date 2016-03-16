<?php
namespace Ad5001\EffectsCommands;
use pocketmine\command\CommandSender;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\command\Command;
use pocketmine\event\Listener;
use pocketmine\level\sound\LaunchSound;
use pocketmine\Player;
use pocketmine\IPlayer;
use pocketmine\server;
use pocketmine\entity\Effect;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase{
	public function onEnable() {
		$this->saveDefaultConfig();
        $this->reloadConfig();
		$this->getServer()->getLogger()->info("EffectsCommands by Ad5001 has been enabled!");
	}
  public function onCommand(CommandSender $sender, Command $command, $label, array $args){
                 switch($command->getName()) {
					  ##################################################################
					  #                                                                #
					  #                        Normal effects                          #
					  #                                                                #
					  ##################################################################
					 case "speed":
					 $player = $this->getServer()->getPlayer($args[0]);
					 if(!$player instanceof Player){
						 $sender->sendMessage("§4[Error] Player not found");
					 } if(count($args) < 2){
                            $sender->sendMessage("§4Usage: /speed <player> <Amplifier>");
                           } else {
							   $player->removeEffect(1);
					  $speed = Effect::getEffectByName("Speed");
					  $speed->setDuration(99999);
					  $speed->setAmplifier($args[1]);
					  $speed->setVisible(false);
					  $sender->addEffect($speed);
					  $sucess = $this->getConfig()->get("SucessMSGForSender");
					  $sucess = $this->getConfig()->get("SucessMSGForSender"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForSender");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect}", "speed " . $args[1], $msg);
					  $player->sendMessage("§b§l[EffectsCommands]§r§b " . $msg);
					  }
					  $sucess = $this->getConfig()->get("SucessMSGForConsole"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForConsole");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect}", "speed " . $args[1], $msg);
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $msg);
					  }
						   }
					  return true;
					  break;
					 case "jumpboost":
					 $player = $this->getServer()->getPlayer($args[0]);
					 if(!$player instanceof Player){
						 $sender->sendMessage("§4[Error] Player not found");
					 } if(count($args) < 2){
                            $sender->sendMessage("§4Usage: /jumpboost <player> <Amplifier>");
                           } else {
							   $sender->removeEffect(8);
							   $bad = Effect::getEffect(8);
					  $bad->setDuration(99999);
					  $bad->setAmplifier($args[1]);
					  $bad->setVisible(false);
					  $player->addEffect($bad);
					  $sucess = $this->getConfig()->get("SucessMSGForSender"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForSender");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect}", "Jump Boost " . $args[1], $msg);
					  $player->sendMessage("§b§l[EffectsCommands]§r§b " . $msg);
					  }
					  $sucess = $this->getConfig()->get("SucessMSGForConsole"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForConsole");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect}", "Jump Boost " . $args[1], $msg);
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $msg);
					  }
						   }
					  return true;
					  break;
					 case "nightvision":
					 if(empty($args)) {
							 $player = $sender;
						 } else {
					 $player = $this->getServer()->getPlayer($args[0]);
						 }
					 if(!$player instanceof Player){
						 $sender->sendMessage("§4[Error] Player not found");
					 } if(!$sender instanceof Player){
						 $sender->sendMessage("§4You §lSERIOUSLY§r§4 think that you can add the Console effects?");
					 } else {
						 $player->removeEffect(16);
					  $regen = Effect::getEffect(16);
					  $regen->setDuration(99999);
					  $regen->setAmplifier(1);
					  $regen->setVisible(false);
					  $player->addEffect($regen);
					  $sucess = $this->getConfig()->get("SucessMSGForSender"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForSender");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $player->sendMessage("§b§l[EffectsCommands]§r§b " . $msg);
					  }
					  $sucess = $this->getConfig()->get("SucessMSGForConsole"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForConsole");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $msg);
					  }
					 }
					  return true;
					  break;
					 case "regeneration":
					 $player = $this->getServer()->getPlayer($args[0]);
					 if(!$player instanceof Player){
						 $sender->sendMessage("§4[Error] Player not found");
					 } if(count($args) < 2){
                            $sender->sendMessage("§4Usage: /regeneration <player> <Amplifier>");
                           } else {
							   $sender->removeEffect(10);
					  $regen = Effect::getEffect(10);
					  $regen->setDuration(99999);
					  $regen->setAmplifier($args[1]);
					  $regen->setVisible(false);
					  $sender->addEffect($regen);
					  $sucess = $this->getConfig()->get("SucessMSGForSender"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForSender");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect}", "regeneration " . $args[1], $msg);
					  $player->sendMessage("§b§l[EffectsCommands]§r§b " . $msg);
					  }
					  $sucess = $this->getConfig()->get("SucessMSGForConsole"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForConsole");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect}", "regeneration " . $args[1], $msg);
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $msg);
					  }
						   }
					  return true;
					  break;
					 case "resistance":
					 $player = $this->getServer()->getPlayer($args[0]);
					 if(!$player instanceof Player){
						 $sender->sendMessage("§4[Error] Player not found");
					 } if(!$sender instanceof Player){
						 $sender->sendMessage("§4You §lSERIOUSLY§r§4 think that you can add the Console effects?");
					 } if(count($args) < 2){
                            $sender->sendMessage("§4Usage: /resistance <player> <Amplifier>");
                           } else {
							   $player->removeEffect(11);
					  $res = Effect::getEffectByName("DAMAGE_RESISTANCE");
					  $res->setDuration(99999);
					  $res->setAmplifier($args[1]);
					  $res->setVisible(false);
					  $sender->addEffect($res);
					  $sucess = $this->getConfig()->get("SucessMSGForSender"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForSender");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect}", "resistance " . $args[1], $msg);
					  $player->sendMessage("§b§l[EffectsCommands]§r§b " . $msg);
					  }
					  $sucess = $this->getConfig()->get("SucessMSGForConsole"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForConsole");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect}", "resistance " . $args[1], $msg);
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $msg);
					  }
						   }
					  return true;
					  break;
					 case "fireresistance":
					 if(empty($args)) {
						 $player = $sender;
					 }
					 $player = $this->getServer()->getPlayer($args[0]);
					 if(!$player instanceof Player){
						 $sender->sendMessage("§4[Error] Player not found");
					 } else {
						 $sender->removeEffect(12);
					  $fres = Effect::getEffectByName("FIRE_RESISTANCE");
					  $fres->setDuration(99999);
					  $fres->setAmplifier(1);
					  $fres->setVisible(false);
					  $sender->addEffect($fres);
					  $sucess = $this->getConfig()->get("SucessMSGForSender"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForSender");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $player->sendMessage("§b§l[EffectsCommands]§r§b " . $msg);
					  }
					  $sucess = $this->getConfig()->get("SucessMSGForConsole"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForConsole");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $msg);
					  }
					 }
					  return true;
					  break;
					 case "haste":
					 $player = $this->getServer()->getPlayer($args[0]);
					 if(!$player instanceof Player){
						 $sender->sendMessage("§4[Error] Player not found");
					 } if(count($args) < 2){
                            $sender->sendMessage("§4Usage: /haste <player> <Amplifier>");
                           } else {
							   $sender->removeEffect(3);
					  $regen = Effect::getEffect(3);
					  $regen->setDuration(99999);
					  $regen->setAmplifier($args[1]);
					  $regen->setVisible(false);
					  $player->addEffect($regen);
					  $sucess = $this->getConfig()->get("SucessMSGForSender"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForSender");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect}", "haste " . $args[1], $msg);
					  $player->sendMessage("§b§l[EffectsCommands]§r§b " . $msg);
					  }
					  $sucess = $this->getConfig()->get("SucessMSGForConsole"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForConsole");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect}", "haste " . $args[1], $msg);
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $msg);
					  }
						   }
					  return true;
					  break;
					 case "invisible":
					     if (empty($args)) {
						   $player = $sender;
					         } else {
					         $player = $this->getServer()->getPlayer($args[0]);
					         } if(!$player instanceof Player){
						        $sender->sendMessage("§4[Error] Player not found");
					         } else {
						 $sender->removeEffect(14);
					     $inv = Effect::getEffectByName("INVISIBILITY");
					     $inv->setDuration(99999);
					     $inv->setAmplifier(1);
					     $inv->setVisible(false);
					     $sender->addEffect($inv);
					     $sucess = $this->getConfig()->get("SucessMSGForSender"); if($sucess == true) {
				      	     $msg = $this->getConfig()->get("NormalMSGForSender");
					         $msg = str_replace("{sender}", $sender->getName(), $msg);
					         $msg = str_replace("{player}", $player->getName(), $msg);
					         $player->sendMessage("§b§l[EffectsCommands]§r§b " . $msg);
					     }
					         $sucess = $this->getConfig()->get("SucessMSGForConsole"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForConsole");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $msg);
					  }
					 }
					  return true;
					  break;
					 case "saturation":
					   $player = $this->getServer()->getPlayer($args[0]);
					     if(!$player instanceof Player){
						 $sender->sendMessage("§4[Error] Player not found");
					     } if(count($args) < 2){
                            $sender->sendMessage("§4Usage: /saturation <player> <Amplifier>");
                           } else {
							   $sender->removeEffect(23);
					  $sat = Effect::getEffectByName("SATURATION");
					  $sat->setDuration(99999);
					  $sat->setAmplifier($args[1]);
					  $sat->setVisible(false);
					  $sender->addEffect($sat);
					  $sucess = $this->getConfig()->get("SucessMSGForSender"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForSender");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect}", "saturation " . $args[1], $msg);
					  $player->sendMessage("§b§l[EffectsCommands]§r§b " . $msg);
					  }
					  $sucess = $this->getConfig()->get("SucessMSGForConsole"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForConsole");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect}", "saturation " . $args[1], $msg);
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $msg);
					  }
						   }
					  return true;
					  break;
					 case "waterbreath":
					 if(!$sender instanceof Player){
						 $sender->sendMessage("§4You §lSERIOUSLY§r§4 think that you can add the Console effects?");
					    } if(count($args) < 1){
                            $sender->sendMessage("§4Usage: /weatherbreath <Amplifier>");
                           } else {
							   $sender->removeEffect(13);
					  $wb = Effect::getEffectByName("WATER_BREATHING");
					  $wb->setDuration(99999);
					  $wb->setAmplifier($args[1]);
					  $wb->setVisible(false);
					  $sender->addEffect($wb);
					  $sucess = $this->getConfig()->get("SucessMSGForSender"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForSender");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect}", "water breathing " . $args[1], $msg);
					  $player->sendMessage("§b§l[EffectsCommands]§r§b " . $msg);
					  }
					  $sucess = $this->getConfig()->get("SucessMSGForConsole"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForConsole");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect}", "water breathing " . $args[1], $msg);
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $msg);
					  }
						   }
					  return true;
					  break;
					 case "absorption":
					 $player = $this->getServer()->getPlayer($args[0]);
					 if(!$player instanceof Player){
						 $sender->sendMessage("§4[Error] Player not found");
					     } if(count($args) < 2){
                            $sender->sendMessage("§4Usage: /absorption <player> <Amplifier>");
                           } else {
							   $sender->removeEffect(22);
					  $regen = Effect::getEffect(22);
					  $regen->setDuration(99999);
					  $regen->setAmplifier($args[1]);
					  $regen->setVisible(false);
					  $player->addEffect($regen);
					  $sucess = $this->getConfig()->get("SucessMSGForSender"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForSender");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect}", "absorbtion " . $args[1], $msg);
					  $player->sendMessage("§b§l[EffectsCommands]§r§b " . $msg);
					  }
					  $sucess = $this->getConfig()->get("SucessMSGForConsole"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForConsole");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect}", "absorbtion " . $args[1], $msg);
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $msg);
					  }
						   }
					  return true;
					  break;
					 case "healthboost":
					 $player = $this->getServer()->getPlayer($args[0]);
					 if(!$player instanceof Player){
						 $sender->sendMessage("§4[Error] Player not found");
					     } if(count($args) < 1){
                            $sender->sendMessage("§4Usage: /healthboost <player> <Amplifier>");
                           } else {
							   $sender->removeEffect(21);
					  $heb = Effect::getEffectByName("HEALTH_BOOST");
					  $heb->setDuration(99999);
					  $heb->setAmplifier($args[0]);
					  $heb->setVisible(false);
					  $sender->addEffect($heb);
					  $sucess = $this->getConfig()->get("SucessMSGForSender"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForSender");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect}", "health boost " . $args[1], $msg);
					  $player->sendMessage("§b§l[EffectsCommands]§r§b " . $msg);
					  }
					  $sucess = $this->getConfig()->get("SucessMSGForConsole"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForConsole");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect}", "health boost " . $args[1], $msg);
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $msg);
					  }
						   }
					  return true;
					  break;
					  case "strength":
					     $player = $this->getServer()->getPlayer($args[0]);
					     if(!$player instanceof Player){
						 $sender->sendMessage("§4[Error] Player not found");
					     } if(count($args) < 1){
                            $sender->sendMessage("§4Usage: /strength <player> <Amplifier>");
                           } else {
					     $player->removeEffect(5);
					     $st = Effect::getEffect(5);
					     $st->setDuration(99999);
					     $st->setAmplifier($args[1]);
					     $st->setVisible(false);
					     $player->addEffect($st);
					     $sucess = $this->getConfig()->get("SucessMSGForSender"); if($sucess == true) {
					     $msg = $this->getConfig()->get("NormalMSGForSender");
					     $msg = str_replace("{sender}", $sender->getName(), $msg);
					     $msg = str_replace("{player}", $player->getName(), $msg);
					     $msg = str_replace("{effect}", "strength " . $args[1], $msg);
					     $player->sendMessage("§b§l[EffectsCommands]§r§b " . $msg);
					     }
					     $sucess = $this->getConfig()->get("SucessMSGForConsole"); if($sucess == true) {
					     $msg = $this->getConfig()->get("NormalMSGForConsole");
					     $msg = str_replace("{sender}", $sender->getName(), $msg);
					     $msg = str_replace("{player}", $player->getName(), $msg);
					     $msg = str_replace("{effect}", "strength " . $args[1], $msg);
					     $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $msg);
					     }
						   }
					  return true;
					  break;
					  ##################################################################
					  #                                                                #
					  #                    Bad effects commands                        #
					  #                                                                #
					  ##################################################################
					  
			    	case "slowness":
					     $player = $this->getServer()->getPlayer($args[0]);
					     if(!$player instanceof Player){
						 $sender->sendMessage("§4[Error] Player not found");
					     } if(count($args) < 2){
                            $sender->sendMessage("§4Usage: /slowness <player> <Amplifier>");
                           } else {
							   $player->removeEffect(2);
					  $bad = Effect::getEffect(2);
					  $bad->setDuration(99999);
					  $bad->setAmplifier($args[1]);
					  $bad->setVisible(false);
					  $player->addEffect($bad);
					  $sucess = $this->getConfig()->get("SucessMSGForSender"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForSender");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect}", "slowness " . $args[1], $msg);
					  $player->sendMessage("§b§l[EffectsCommands]§r§b " . $msg);
					  }
					  $sucess = $this->getConfig()->get("SucessMSGForConsole"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForConsole");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect}", "slowness " . $args[1], $msg);
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $msg);
					  }
						   }
					  return true;
					  break;
					  
				  case "miningfatigue":
					  $player = $this->getServer()->getPlayer($args[0]);
					 if(!$player instanceof Player){
						 $sender->sendMessage("§4[Error] Player not found");
					 } if(count($args) < 2){
                            $sender->sendMessage("§4Usage: /miningfatigue <player> <Amplifier>");
                           } else {
							   $player->removeEffect(4);
					  $bad = Effect::getEffect(4);
					  $bad->setDuration(99999);
					  $bad->setAmplifier($args[1] + 10);
					  $bad->setVisible(false);
					  $player->addEffect($bad);
					  $sucess = $this->getConfig()->get("SucessMSGForSender"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForSender");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect}", "mining fatigue " . $args[1], $msg);
					  $player->sendMessage("§b§l[EffectsCommands]§r§b " . $msg);
					  }
					  $sucess = $this->getConfig()->get("SucessMSGForConsole"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForConsole");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect}", "mining fatigue " . $args[1], $msg);
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $msg);
					  }
						   }
					  return true;
					  break;
					  
				  case "nausea":
					  $player = $this->getServer()->getPlayer($args[0]);
					 if(!$player instanceof Player){
						 $sender->sendMessage("§4[Error] Player not found");
					 } if(count($args) < 2){
                            $sender->sendMessage("§4Usage: /nausea <player> <Amplifier>");
                           } else {
							   $player->removeEffect(9);
					  $bad = Effect::getEffect(9);
					  $bad->setDuration(99999);
					  $bad->setAmplifier($args[1]);
					  $bad->setVisible(false);
					  $player->addEffect($bad);
					  $sucess = $this->getConfig()->get("SucessMSGForSender"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForSender");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect}", "nausea " . $args[1], $msg);
					  $player->sendMessage("§b§l[EffectsCommands]§r§b " . $msg);
					  }
					  $sucess = $this->getConfig()->get("SucessMSGForConsole"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForConsole");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect}", "nausea " . $args[1], $msg);
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $msg);
					  }
					  }
					  return true;
					  break;
					  
				   case "blindness":
					  $player = $this->getServer()->getPlayer($args[0]);
					 if(!$player instanceof Player){
						 $sender->sendMessage("§4[Error] Player not found");
					 } if(count($args) < 2){
                            $sender->sendMessage("§4Usage: /blindness <player> <Amplifier>");
                           } else {
							   $player->removeEffect(15);
					  $bad = Effect::getEffect(15);
					  $bad->setDuration(99999);
					  $bad->setAmplifier($args[1] + 10);
					  $bad->setVisible(false);
					  $player->addEffect($bad);
					  $sucess = $this->getConfig()->get("SucessMSGForSender"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForSender");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect}", "blindness " . $args[1], $msg);
					  $player->sendMessage("§b§l[EffectsCommands]§r§b " . $msg);
					  }
					  $sucess = $this->getConfig()->get("SucessMSGForConsole"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForConsole");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect}", "blindness " . $args[1], $msg);
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $msg);
					  }
						   }
					  return true;
					  break;
					  
				case "hunger":
					  $player = $this->getServer()->getPlayer($args[0]);
					 if(!$player instanceof Player){
						 $sender->sendMessage("§4[Error] Player not found");
					 } if(count($args) < 2){
                            $sender->sendMessage("§4Usage: /hunger <player> <Amplifier>");
                           } else {
							   $player->removeEffect(17);
					  $bad = Effect::getEffect(17);
					  $bad->setDuration(99999);
					  $bad->setAmplifier($args[1]);
					  $bad->setVisible(false);
					  $player->addEffect($bad);
					  $sucess = $this->getConfig()->get("SucessMSGForSender"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForSender");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect}", "hunger " . $args[1], $msg);
					  $player->sendMessage("§b§l[EffectsCommands]§r§b " . $msg);
					  }
					  $sucess = $this->getConfig()->get("SucessMSGForConsole"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForConsole");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect}", "hunger " . $args[1], $msg);
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $msg);
					  }
						   }
					  return true;
					  break;
					  
				   case "weakness":
					  $player = $this->getServer()->getPlayer($args[0]);
					 if(!$player instanceof Player){
						 $sender->sendMessage("§4[Error] Player not found");
					 } if(count($args) < 2){
                            $sender->sendMessage("§4Usage: /weakness <player> <Amplifier>");
                           } else {
							   $player->removeEffect(18);
					  $bad = Effect::getEffect(18);
					  $bad->setDuration(99999);
					  $bad->setAmplifier($args[1]);
					  $bad->setVisible(false);
					  $player->addEffect($bad);
					  $sucess = $this->getConfig()->get("SucessMSGForSender"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForSender");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect}", "weakness " . $args[1], $msg);
					  $player->sendMessage("§b§l[EffectsCommands]§r§b " . $msg);
					  }
					  $sucess = $this->getConfig()->get("SucessMSGForConsole"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForConsole");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect}", "weakness " . $args[1], $msg);
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $msg);
					  }
						   }
					  return true;
					  break;
					  
				   case "poison":
					  $player = $this->getServer()->getPlayer($args[0]);
					 if(!$player instanceof Player){
						 $sender->sendMessage("§4[Error] Player not found");
					 } if(count($args) < 2){
                            $sender->sendMessage("§4Usage: /poison <player> <Amplifier>");
                           } else {
							   $player->removeEffect(19);
					  $bad = Effect::getEffect(19);
					  $bad->setDuration(99999);
					  $bad->setAmplifier($args[1]);
					  $bad->setVisible(false);
					  $player->addEffect($bad);
					  $sucess = $this->getConfig()->get("SucessMSGForSender"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForSender");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect}", "poison " . $args[1], $msg);
					  $player->sendMessage("§b§l[EffectsCommands]§r§b " . $msg);
					  }
					  $sucess = $this->getConfig()->get("SucessMSGForConsole"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForConsole");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect}", "poison " . $args[1], $msg);
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $msg);
					  }
						   }
					  return true;
					  break;
					  
				   case "wither":
					  $player = $this->getServer()->getPlayer($args[0]);
					 if(!$player instanceof Player){
						 $sender->sendMessage("§4[Error] Player not found");
					 } if(count($args) < 2){
                            $sender->sendMessage("§4Usage: /wither <player> <Amplifier>");
                           } else {
							   $player->removeEffect(20);
					  $bad = Effect::getEffect(20);
					  $bad->setDuration(99999);
					  $bad->setAmplifier($args[1]);
					  $bad->setVisible(false);
					  $player->addEffect($bad);
					  $sucess = $this->getConfig()->get("SucessMSGForSender"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForSender");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect}", "wither " . $args[1], $msg);
					  $player->sendMessage("§b§l[EffectsCommands]§r§b " . $msg);
					  }
					  $sucess = $this->getConfig()->get("SucessMSGForConsole"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForConsole");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect}", "wither " . $args[1], $msg);
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $msg);
					  }
						   }
					  return true;
					  break;
					  
					  ##################################################################
					  #                                                                #
					  #                     Good Combined effects                      #
					  #                                                                #
					  ##################################################################
					  
				  case "allspeed":
					 $player = $this->getServer()->getPlayer($args[0]);
					 if(!$player instanceof Player){
						 $sender->sendMessage("§4[Error] Player not found");
					 } if(count($args) < 2){
                            $sender->sendMessage("§4Usage: /allspeed <player> <Amplifier>");
                           } else {
							   $sender->removeEffect(1);
							   $sender->removeEffect(3);
					  $speed = Effect::getEffectByName("SPEED");
					  $speed->setDuration(99999);
					  $speed->setAmplifier($args[1]);
					  $speed->setVisible(false);
					  $sender->addEffect($speed);
					  $haste = Effect::getEffect(3);
					  $haste->setDuration(99999);
					  $haste->setAmplifier($args[1]);
					  $haste->setVisible(false);
					  $sender->addEffect($haste);
					  $sucess = $this->getConfig()->get("SucessMSGForSender"); if($sucess == true) {
					  $msg = $this->getConfig()->get("AllSpeedMSGForSender");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect1}", "Speed " . $args[1], $msg);
					  $msg = str_replace("{effect2}", "haste " . $args[1], $msg);
					  $player->sendMessage("§b§l[EffectsCommands]§r§b " . $msg);
					  }
					  $sucess = $this->getConfig()->get("SucessMSGForConsole"); if($sucess == true) {
					  $msg = $this->getConfig()->get("AllSpeedMSGForConsole");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect1}", "Speed " . $args[1], $msg);
					  $msg = str_replace("{effect2}", "haste " . $args[1], $msg);
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $msg);
					  }
						   }
					  return true;
					  break;
				   case "nightpowers":
					  if ($args[0] == null) {
						  $player = $sender;
					  } else {
					 $player = $this->getServer()->getPlayer($args[0]);
					  } if(!$player instanceof Player){
						 $sender->sendMessage("§4[Error] Player not found");
					 } else {
						 $in = Effect::getEffectByName("NIGHT_VISION");
					  $in->setDuration(99999);
					  $in->setAmplifier(1);
					  $in->setVisible(false);
					  $player->addEffect($in);
					  $in = Effect::getEffectByName("INVISIBILITY");
					  $in->setDuration(99999);
					  $in->setAmplifier(1);
					  $in->setVisible(false);
					  $player->addEffect($in);
					  $sucess = $this->getConfig()->get("SucessMSGForSender"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NightPowersMSGForSender");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  }
					  $sucess = $this->getConfig()->get("SucessMSGForConsole"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NightPowersMSGForConsole");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $msg);
					  }
					 }
					 return true;
					 break;
			   case "liquidslife":
					 if(empty($args)) {
						  $player = $sender;
					  } else {
					    $player = $this->getServer()->getPlayer($args[0]);
					    } if(!$player instanceof Player){
						 $sender->sendMessage("§4[Error] Player not found");
					    } else {
					  $fres = Effect::getEffectByName("FIRE_RESISTANCE");
					  $fres->setDuration(99999);
					  $fres->setAmplifier(1);
					  $fres->setVisible(false);
					  $sender->addEffect($fres);
					  $haste = Effect::getEffectByName("WATER_BREATHING");
					  $haste->setDuration(99999);
					  $haste->setAmplifier(1);
					  $haste->setVisible(false);
					  $sender->addEffect($haste);
					  $sucess = $this->getConfig()->get("SucessMSGForSender"); if($sucess == true) {
					  $msg = $this->getConfig()->get("LiquidsLifeMSGForSender");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $player->sendMessage("§b§l[EffectsCommands]§r§b " . $msg);
					  }
					  $sucess = $this->getConfig()->get("SucessMSGForConsole"); if($sucess == true) {
					  $msg = $this->getConfig()->get("LiquidsLifeMSGForConsole");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $msg);
					  }
					 }
					 return true;
					 break;
			   case "superstrong":
					 $player = $this->getServer()->getPlayer($args[0]);
					 if(!$player instanceof Player){
						 $sender->sendMessage("§4[Error] Player not found");
					 } elseif(count($args) < 2){
                            $sender->sendMessage("§4Usage: /superstrong <player> <Amplifier>");
                      } else {
							   $player->removeEffect(11);
							   $player->removeEffect(5);
						  $res = Effect::getEffectByName("DAMAGE_RESISTANCE");
						  $res->setDuration(99999);
						  $res->setAmplifier($args[0]);
						  $res->setVisible(false);
						  $sender->addEffect($res);
						  $st = Effect::getEffect(5);
						  $st->setDuration(99999);
						  $st->setAmplifier($args[0]);
						  $st->setVisible(false);
						  $player->addEffect($st);
					      $sucess = $this->getConfig()->get("SucessMSGForSender"); if($sucess == true) {
							  $msg = $this->getConfig()->get("SuperStrongMSGForSender");
							  $msg = str_replace("{sender}", $sender->getName(), $msg);
							  $msg = str_replace("{player}", $player->getName(), $msg);
							  $msg = str_replace("{effect1}", "Resistance " . $args[1], $msg);
							  $msg = str_replace("{effect2}", "strength " . $args[1], $msg);
							  $player->sendMessage("§b§l[EffectsCommands]§r§b " . $msg);
					      } 
						 	$sucess = $this->getConfig()->get("SucessMSGForConsole"); if($sucess == true) {
							  $msg = $this->getConfig()->get("SuperStrongMSGForConsole");
							  $msg = str_replace("{sender}", $sender->getName(), $msg);
							  $msg = str_replace("{player}", $player->getName(), $msg);
							  $msg = str_replace("{effect1}", "Resistance " . $args[1], $msg);
							  $msg = str_replace("{effect2}", "strength " . $args[1], $msg);
							  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $msg);
					        }
						}
			      return true;
		          break;
			      case "healthy":
					 $player = $this->getServer()->getPlayer($args[0]);
					  if(!$player instanceof Player){
						 $sender->sendMessage("§4[Error] Player not found");
					 } if(count($args) < 2){
                            $sender->sendMessage("§4Usage: /healthy <player> <Amplifier>");
                       } else {
							   $sender->removeEffect(10);
							   $sender->removeEffect(21);
					           $hb = Effect::getEffectByName("HEALTH_BOOST");
					            $hb->setDuration(99999);
					 		   $hb->setAmplifier($args[0]);
							  $hb->setVisible(false);
							  $sender->addEffect($hb);
							  $regen = Effect::getEffect(10);
							  $regen->setDuration(99999);
							  $regen->setAmplifier($args[0]);
		  					  $regen->setVisible(false);
							  $sender->addEffect($regen);
						  $sucess = $this->getConfig()->get("SucessMSGForSender"); if($sucess == true) {
							  $msg = $this->getConfig()->get("HealthyMSGForSender");
							  $msg = str_replace("{sender}", $sender->getName(), $msg);
							  $msg = str_replace("{player}", $player->getName(), $msg);
							  $msg = str_replace("{effect1}", "Health Boost " . $args[1], $msg);
							  $msg = str_replace("{effect2}", "regeneration " . $args[1], $msg);
							  $player->sendMessage("§b§l[EffectsCommands]§r§b " . $msg);
						  }
						  $sucess = $this->getConfig()->get("SucessMSGForConsole"); if($sucess == true) {
							  $msg = $this->getConfig()->get("HealthyMSGForConsole");
							  $msg = str_replace("{sender}", $sender->getName(), $msg);
							  $msg = str_replace("{player}", $player->getName(), $msg);
							  $msg = str_replace("{effect1}", "Health Boost " . $args[1], $msg);
							  $msg = str_replace("{effect2}", "regeneration " . $args[1], $msg);
							  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $msg);
						  }
						}
						   return true;
						   break;
					  ##################################################################
					  #                                                                #
					  #                     Bad Combined effects                       #
					  #                                                                #
					  ##################################################################
					  
				case "drunk":
					  $player = $this->getServer()->getPlayer($args[0]);
					 if(!$player instanceof Player){
						 $sender->sendMessage("§4[Error] Player not found");
					 } if(count($args) < 2){
                            $sender->sendMessage("§4Usage: /drunk <player> <Amplifier>");
                           } else {
							   $player->removeEffect(9);
							   $player->removeEffect(10);
							   $player->removeEffect(19);
					  $bad = Effect::getEffectByName("NAUSEA");
					  $bad->setDuration(99999);
					  $bad->setAmplifier($args[1]);
					  $bad->setVisible(false);
					  $player->addEffect($bad);
					  $regen = Effect::getEffect(10);
					  $regen->setDuration(99999);
					  $regen->setAmplifier($args[1] + 10);
					  $regen->setVisible(false);
					  $player->addEffect($regen);
					  $bad = Effect::getEffect(19);
					  $bad->setDuration(99999);
					  $bad->setAmplifier($args[1]);
					  $bad->setVisible(false);
					  $player->addEffect($bad);
					  $level = $player->getLevel();
					  $level->addSound(new LaunchSound ($player->getLocation()));
					  $sucess = $this->getConfig()->get("SucessMSGForSender"); if($sucess == true) {
					  $msg = $this->getConfig()->get("DrunkMSGForSender");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect1}", "Nausea " . $args[1], $msg);
					  $msg = str_replace("{effect2}", "poison " . $args[1], $msg);
					  $msg = str_replace("{effect3}", "regeneration " . $args[1], $msg);
					  $player->sendMessage("§b§l[EffectsCommands]§r§b " . $msg);
					  }
					  $sucess = $this->getConfig()->get("SucessMSGForConsole"); if($sucess == true) {
					  $msg = $this->getConfig()->get("DrunkMSGForConsole");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect1}", "Nausea " . $args[1], $msg);
					  $msg = str_replace("{effect2}", "poison " . $args[1], $msg);
					  $msg = str_replace("{effect3}", "regeneration " . $args[1], $msg);
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $msg);
					  }
						   }
						   return true;
						   break;
				 case "nojump":
				 $player = $this->getServer()->getPlayer($args[0]);
					 if(!$player instanceof Player){
						 $sender->sendMessage("§4[Error] Player not found");
					 } if(count($args) < 1){
                            $sender->sendMessage("§4Usage: /nojump <player>");
                           } else {
							   $sender->removeEffect(8);
							   $bad = Effect::getEffect(8);
					  $bad->setDuration(99999);
					  $bad->setAmplifier(200);
					  $bad->setVisible(false);
					  $player->addEffect($bad);
					  $sucess = $this->getConfig()->get("SucessMSGForSender"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForSender");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect}", "No Jump", $msg);
					  $player->sendMessage("§b§l[EffectsCommands]§r§b " . $msg);
					  }
					  $sucess = $this->getConfig()->get("SucessMSGForConsole"); if($sucess == true) {
					  $msg = $this->getConfig()->get("NormalMSGForConsole");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect}", "No Jump " . $args[1], $msg);
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $msg);
					  }
						   }
					  return true;
					  break;
				 case "allslow":
					  $player = $this->getServer()->getPlayer($args[0]);
					 if(!$player instanceof Player){
						 $sender->sendMessage("§4[Error] Player not found");
					 } if(count($args) < 2){
                            $sender->sendMessage("§4Usage: /allslow <player> <Amplifier>");
                           } else {
							   $player->removeEffect(2);
							   $player->removeEffect(4);
					  $bad = Effect::getEffect(2);
					  $bad->setDuration(99999);
					  $bad->setAmplifier($args[1]);
					  $bad->setVisible(false);
					  $player->addEffect($bad);
					  $bad = Effect::getEffect(4);
					  $bad->setDuration(99999);
					  $bad->setAmplifier($args[1] + 10);
					  $bad->setVisible(false);
					  $player->addEffect($bad);
					  $sucess = $this->getConfig()->get("SucessMSGForSender"); if($sucess == true) {
					  $msg = $this->getConfig()->get("AllSlowMSGForSender");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect1}", "slowness " . $args[1], $msg);
					  $msg = str_replace("{effect2}", "mining fatigue " . $args[1], $msg);
					  $player->sendMessage("§b§l[EffectsCommands]§r§b " . $msg);
					  }
					  $sucess = $this->getConfig()->get("SucessMSGForConsole"); if($sucess == true) {
					  $msg = $this->getConfig()->get("AllSlowMSGForConsole");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $msg = str_replace("{effect1}", "slowness " . $args[1], $msg);
					  $msg = str_replace("{effect2}", "mining fatigue " . $args[1], $msg);
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $msg);
					  }
						   }
						   return true;
						   break;

					  ##################################################################
					  #                                                                #
					  #                        Other commands                          #
					  #                                                                #
					  ##################################################################
					  
                   case "egod":
					 if ($args[0] == null) {
						  $player = $sender;
					  } else {
					 $player = $this->getServer()->getPlayer($args[0]);
					  } if(!$player instanceof Player){
						 $sender->sendMessage("§4[Error] Player not found");
					 } else {
						 $num = 0;
						 $id = array(1, 3, 5, 8, 10, 11, 12, 13, 14, 16, 21, 22, 23);
						 while ($num < 13) {
						 $player->removeEffect($id);
					  $effect = Effect::getEffect($id[$num]);
					  $effect->setDuration(99999);
					  $effect->setAmplifier(60);
					  $effect->setVisible(false);
					  $sender->addEffect($effect);
					  $num ++;
						 }
					  $sucess = $this->getConfig()->get("SucessMSGForSender"); if($sucess == true) {
					  $msg = $this->getConfig()->get("EGodMSGForSender");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $player->sendMessage("§b§l[EffectsCommands]§r§b " . $msg);
					  }
					  $sucess = $this->getConfig()->get("SucessMSGForConsole"); if($sucess == true) {
					  $msg = $this->getConfig()->get("EGodMSGForConsole");
					  $msg = str_replace("{sender}", $sender->getName(), $msg);
					  $msg = str_replace("{player}", $player->getName(), $msg);
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $msg);
					  }
					 }
						   return true;
						   break;
				case "eclear":
					 if($args[0] ==! null)  {
					 $player = $this->getServer()->getPlayer($args[0]);
					 } else {
						 $player = $sender;
					 }
					 if(!empty($args[1])) {
						 if(is_numeric($args[1])){
							 $player->removeEffect($args[1]);
							 $sender->sendMessage("§4Clear effect " . $args[1] . " of " . $player->getName() . " !");
						 } else {
							 $effect = Effect::getEffectByName($args[1]);
							 $player->removeEffect($effect);
							 $sender->sendMessage("§4Clear effect " . $args[1] . " of " . $player->getName() . " !");
						 }
					 } else {
						 $id = 1;
						 while ($id < 24) {
							 $effect = Effect::getEffect($id);
							 $sender->sendMessage("§4Clear effect " . $effect . " of " . $player->getName() . "!");
							 $player->removeEffect($id);
							 $id ++;
						 }
					 }
					 return true;
					 break;
				 }
		  }
}
