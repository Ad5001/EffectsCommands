<?php
namespace Ad5001\EffectsCommands;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\IPlayer;
use pocketmine\server;
use pocketmine\entity\Effect;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase{
	public function onEnable() {
		$this->getServer()->getLogger()->info("EffectsCommands by Ad5001 has been enabled!\n Commands:");
	}
  public function onCommand(CommandSender $sender, Command $command, $label, array $args){
                 switch($command->getName()) {
					  ##################################################################
					  #                                                                #
					  #                        Normal effects                          #
					  #                                                                #
					  ##################################################################
					 case "speed":
					 if(!$sender instanceof Player){
						 $sender->sendMessage("§4You §lSERIOUSLY§r§4 think that you can add the Console effects?");
					 } elseif(count($args) < 1){
                            $sender->sendMessage("§4Usage: /speed <Amplifier>");
                           } else {
							   $sender->removeEffect(1);
					  $speed = Effect::getEffectByName("SPEED");
					  $speed->setDuration(999999999999 * 999999999999);
					  $speed->setAmplifier($args[0]);
					  $speed->setVisible(false);
					  $sender->addEffect($speed);
					  $sender->sendMessage("§b§l[EffectsCommands]§r§b You have now speed " . $args[0] . " effect");
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $sender->getName() . " sent the effect §bspeed " . $args[0] . "§6 to himself");
						   }
					  return true;
					  break;
					 case "jumpboost":
					 if(!$sender instanceof Player){
						 $sender->sendMessage("§4You §lSERIOUSLY§r§4 think that you can add the Console effects?");
					 } elseif(count($args) < 1){
                            $sender->sendMessage("§4Usage: /jumpboost <Amplifier>");
                           } else {
							   $sender->removeEffect(8);
					  $jumpb = Effect::getEffect(8);
					  $jumpb->setDuration(999999999999 * 999999999999);
					  $jumpb->setAmplifier($args[0]);
					  $jumpb->setVisible(false);
					  $sender->addEffect($jumpb);
					  $sender->sendMessage("§b§l[EffectsCommands]§r§b You have now §ajump boost " . $args[0] . "§b effect");
					  $this->getServer()->getLogger()->info("§6" . $sender->getName() . " sent the effect §ajump boost " . $args[0] . "§6 to himself");
						   }
					  return true;
					  break;
					 case "nightvision":
					 if(!$sender instanceof Player){
						 $sender->sendMessage("§4You §lSERIOUSLY§r§4 think that you can add the Console effects?");
					 } else {
						 $sender->removeEffect(16);
					  $nv = Effect::getEffect(16);
					  $nv->setDuration(999999999999 * 999999999999);
					  $nv->setAmplifier(1);
					  $nv->setVisible(false);
					  $sender->addEffect($nv);
					  $sender->sendMessage("§b§l[EffectsCommands]§r§b You have now §1night vision§b effect");
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $sender->getName() . " sent the effect §1night vision§6 to himself");
					 }
					  return true;
					  break;
					 case "regeneration":
					 if(!$sender instanceof Player){
						 $sender->sendMessage("§4You §lSERIOUSLY§r§4 think that you can add the Console effects?");
					 } elseif(count($args) < 1){
                            $sender->sendMessage("§4Usage: /regeneration <Amplifier>");
                           } else {
							   $sender->removeEffect(16);
					  $regen = Effect::getEffect(16);
					  $regen->setDuration(999999999999 * 999999999999);
					  $regen->setAmplifier($args[0]);
					  $regen->setVisible(false);
					  $sender->addEffect($regen);
					  $sender->sendMessage("§b§l[EffectsCommands]§r§b You have now §cregenration " . $args[0] . "§b effect");
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $sender->getName() . " sent the effect §cregeneration " . $args[0] . "§6 to himself");
						   }
					  return true;
					  break;
					 case "resistance":
					 if(!$sender instanceof Player){
						 $sender->sendMessage("§4You §lSERIOUSLY§r§4 think that you can add the Console effects?");
					 } elseif(count($args) < 1){
                            $sender->sendMessage("§4Usage: /resistance <Amplifier>");
                           } else {
							   $sender->removeEffect(11);
					  $res = Effect::getEffectByName("DAMAGE_RESISTANCE");
					  $res->setDuration(999999999999 * 999999999999);
					  $res->setAmplifier($args[0]);
					  $res->setVisible(false);
					  $sender->addEffect($res);
					  $sender->sendMessage("§b§l[EffectsCommands]§r§b You have now §7resistance " . $args[0] . "§b effect");
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $sender->getName() . " sent the effect §7resistance " . $args[0] . "§6 to himself");
						   }
					  return true;
					  break;
					 case "fireresistance":
					 if(!$sender instanceof Player){
						 $sender->sendMessage("§4You §lSERIOUSLY§r§4 think that you can add the Console effects?");
					 } else {
						 $sender->removeEffect(12);
					  $fres = Effect::getEffectByName("FIRE_RESISTANCE");
					  $fres->setDuration(999999999999 * 999999999999);
					  $fres->setAmplifier(1);
					  $fres->setVisible(false);
					  $sender->addEffect($fres);
					  $sender->sendMessage("§b§l[EffectsCommands]§r§b You have now §4fire resistance§b effect");
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $sender->getName() . " sent the effect §4fire resistance§6 to himself");
					 }
					  return true;
					  break;
					 case "haste":
					 if(!$sender instanceof Player){
						 $sender->sendMessage("§4You §lSERIOUSLY§r§4 think that you can add the Console effects?");
					 } elseif(count($args) < 1){
                            $sender->sendMessage("§4Usage: /haste <Amplifier>");
                           } else {
							   $sender->removeEffect(3);
					  $haste = Effect::getEffect(3);
					  $haste->setDuration(999999999999 * 999999999999);
					  $haste->setAmplifier($args[0]);
					  $haste->setVisible(false);
					  $sender->addEffect($haste);
					  $sender->sendMessage("§b§l[EffectsCommands]§r§b You have now §ehaste " . $args[0] . "§b effect");
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $sender->getName() . " sent the effect §ehaste " . $args[0] . "§6 to himself");
						   }
					  return true;
					  break;
					 case "invisible":
					 if(!$sender instanceof Player){
						 $sender->sendMessage("§4You §lSERIOUSLY§r§4 think that you can add the Console effects?");
					 } else {
						 $sender->removeEffect(14);
					  $inv = Effect::getEffectByName("INVISIBILITY");
					  $inv->setDuration(999999999999 * 999999999999);
					  $inv->setAmplifier(1);
					  $inv->setVisible(false);
					  $sender->addEffect($inv);
					  $sender->sendMessage("§b§l[EffectsCommands]§r§b You are now §0invisibile§b.");
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $sender->getName() . " set himself §0invisible§6.");
					 }
					  return true;
					  break;
					 case "saturation":
					 if(!$sender instanceof Player){
						 $sender->sendMessage("§4You §lSERIOUSLY§r§4 think that you can add the Console effects?");
					 } elseif(count($args) < 1){
                            $sender->sendMessage("§4Usage: /saturation <Amplifier>");
                           } else {
							   $sender->removeEffect(23);
					  $sat = Effect::getEffectByName("SATURATION");
					  $sat->setDuration(999999999999 * 999999999999);
					  $sat->setAmplifier($args[0]);
					  $sat->setVisible(false);
					  $sender->addEffect($sat);
					  $sender->sendMessage("§b§l[EffectsCommands]§r§b You have now §6saturation " . $args[0] . "§b effect");
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $sender->getName() . " sent the effect saturation " . $args[0] . " to himself");
						   }
					  return true;
					  break;
					 case "waterbreath":
					 if(!$sender instanceof Player){
						 $sender->sendMessage("§4You §lSERIOUSLY§r§4 think that you can add the Console effects?");
					 } elseif(count($args) < 1){
                            $sender->sendMessage("§4Usage: /weatherbreath <Amplifier>");
                           } else {
							   $sender->removeEffect(13);
					  $wb = Effect::getEffectByName("WATER_BREATHING");
					  $wb->setDuration(999999999999 * 999999999999);
					  $wb->setAmplifier($args[0]);
					  $wb->setVisible(false);
					  $sender->addEffect($wb);
					  $sender->sendMessage("§b§l[EffectsCommands]§r§b You have now §1water breathing " . $args[0] . "§b effect");
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $sender->getName() . " sent the effect §1water breathing " . $args[0] . "§6 to himself");
						   }
					  return true;
					  break;
					 case "absorption":
					 if(!$sender instanceof Player){
						 $sender->sendMessage("§4You §lSERIOUSLY§r§4 think that you can add the Console effects?");
					 } elseif(count($args) < 1){
                            $sender->sendMessage("§4Usage: /absorptiontion <Amplifier>");
                           } else {
							   $sender->removeEffect(22);
					  $abs = Effect::getEffectByName("ABSORPTION");
					  $abs->setDuration(999999999999 * 999999999999);
					  $abs->setAmplifier($args[0]);
					  $abs->setVisible(false);
					  $sender->addEffect($abs);
					  $sender->sendMessage("§b§l[EffectsCommands]§r§b You have now §eabsorbtion " . $args[0] . "§b effect");
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $sender->getName() . " sent the effect §eabsorbtion " . $args[0] . "§6 to himself");
						   }
					  return true;
					  break;
					 case "healthboost":
					 if(!$sender instanceof Player){
						 $sender->sendMessage("§4You §lSERIOUSLY§r§4 think that you can add the Console effects?");
					 } elseif(count($args) < 1){
                            $sender->sendMessage("§4Usage: /healthboost <Amplifier>");
                           } else {
							   $sender->removeEffect(21);
					  $heb = Effect::getEffectByName("HEALTH_BOOST");
					  $heb->setDuration(999999999999 * 999999999999);
					  $heb->setAmplifier($args[0]);
					  $heb->setVisible(false);
					  $sender->addEffect($heb);
					  $sender->sendMessage("§b§l[EffectsCommands]§r§b You have now §4health boost " . $args[0] . "§b effect");
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $sender->getName() . " sent the effect §4health boost " . $args[0] . "§6 to himself");
						   }
					  return true;
					  break;
					  case "strength":
					  $sender->removeEffect(5);
					 if(!$sender instanceof Player){
						 $sender->sendMessage("§4You §lSERIOUSLY§r§4 think that you can add the Console effects?");
					 } elseif(count($args) < 1){
                            $sender->sendMessage("§4Usage: /strength <Amplifier>");
                           } else {
					  $st = Effect::getEffect(5);
					  $st->setDuration(999999999999 * 999999999999);
					  $st->setAmplifier($args[0]);
					  $st->setVisible(false);
					  $sender->addEffect($st);
					  $sender->sendMessage("§b§l[EffectsCommands]§r§b You have now §4strength " . $args[0] . "§b effect");
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $sender->getName() . " sent the effect §4strength " . $args[0] . "§6 to himself");
						   }
					  return true;
					  break;
					  
					  ##################################################################
					  #                                                                #
					  #                       Combined effects                         #
					  #                                                                #
					  ##################################################################
					  
					  case "allspeed":
					 if(!$sender instanceof Player){
						 $sender->sendMessage("§4You §lSERIOUSLY§r§4 think that you can add the Console effects?");
					 } elseif(count($args) < 1){
                            $sender->sendMessage("§4Usage: /allspeed <Amplifier>");
                           } else {
							   $sender->removeEffect(1);
							   $sender->removeEffect(3);
					  $speed = Effect::getEffectByName("SPEED");
					  $speed->setDuration(999999999999 * 999999999999);
					  $speed->setAmplifier($args[0]);
					  $speed->setVisible(false);
					  $sender->addEffect($speed);
					  $haste = Effect::getEffect(3);
					  $haste->setDuration(999999999999 * 999999999999);
					  $haste->setAmplifier($args[0]);
					  $haste->setVisible(false);
					  $sender->addEffect($haste);
					  $sender->sendMessage("§b§l[EffectsCommands]§r§b You are now §as§bu§ep§4e§7r§b speedy! You have speed " . $args[0] . " and §ehaste " . $args[0] . "§b effects");
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $sender->getName() . " set himself §as§bu§ep§4e§7r§6 speedy! He have now §bspeed " . $args[0] . "§6 and §ehaste " . $args[0] . "§6 !");
						   }
					  return true;
					  break;
					  case "nightpowers":
					 if(!$sender instanceof Player){
						 $sender->sendMessage("§4You §lSERIOUSLY§r§4 think that you can add the Console effects?");
					 } else {
					  $in = Effect::getEffectByName("INVISIBILITY");
					  $in->setDuration(999999999999 * 999999999999);
					  $in->setAmplifier(1);
					  $in->setVisible(false);
					  $sender->addEffect($in);
					  $nv = Effect::getEffect(16);
					  $nv->setDuration(999999999999 * 999999999999);
					  $nv->setAmplifier(1);
					  $nv->setVisible(false);
					  $sender->addEffect($nv);
					  $sender->sendMessage("§b§l[EffectsCommands]§r§b You have now the §0powers of the night§b! You have now §0invisibility§b and §1night vision§b effects");
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $sender->getName() . " gave himself night's powers! He have now §0invisibility§6 and §1night vision§6 !");
					 }
					 return true;
					 break;
					 case "liquidslife":
					 if(!$sender instanceof Player){
						 $sender->sendMessage("§4You §lSERIOUSLY§r§4 think that you can add the Console effects?");
					 } else {
					  $fres = Effect::getEffectByName("FIRE_RESISTANCE");
					  $fres->setDuration(999999999999 * 999999999999);
					  $fres->setAmplifier(1);
					  $fres->setVisible(false);
					  $sender->addEffect($fres);
					  $haste = Effect::getEffectByName("WATER_BREATHING");
					  $haste->setDuration(999999999999 * 999999999999);
					  $haste->setAmplifier(1);
					  $haste->setVisible(false);
					  $sender->addEffect($haste);
					  $sender->sendMessage("§b§l[EffectsCommands]§r§b You can now live §1under§4liquids§b! You have now §1water breathing§b and §4fire resistance§b effects");
					  $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $sender->getName() . " gave himself a life §1under§4liquids§6! He have now  §1water breathing§6 and §4fire resistance§6 !");
					 }
					 return true;
					 break;
					 case "superstrong":
					 if(!$sender instanceof Player){
						 $sender->sendMessage("§4You §lSERIOUSLY§r§4 think that you can add the Console effects?");
					 } elseif(count($args) < 1){
                            $sender->sendMessage("§4Usage: /superstrong <Amplifier>");
                           } else {
							   $sender->removeEffect(11);
							   $sender->removeEffect(5);
					  $res = Effect::getEffectByName("DAMAGE_RESISTANCE");
					  $res->setDuration(999999999999 * 999999999999);
					  $res->setAmplifier($args[0]);
					  $res->setVisible(false);
					  $sender->addEffect($res);
					  $st = Effect::getEffect(5);
					  $st->setDuration(999999999999 * 999999999999);
					  $st->setAmplifier($args[0]);
					  $st->setVisible(false);
					  $sender->addEffect($st);
					  $sender->sendMessage("§b§l[EffectsCommands]§r§b You are now §as§bu§ep§4e§7r§b §l§4STRONG§r§b! You have now §7resistance " . $args[0] . "§b and §4strength " . $args[0] . "§b effects");
						   $this->getServer()->getLogger()->info("§l§6[EffectsCommands]§r§6 " . $sender->getName() . " set himself §as§bu§ep§4e§7r§6 §l§4STRONG§r§6! He have now §7resistance " . $args[0] . "§6 and §4strength " . $args[0] . "§6 !");
						   }
						   return true;
						   break;

					  ##################################################################
					  #                                                                #
					  #                        Other commands                          #
					  #                                                                #
					  ##################################################################
                     
					 case "eclear":
					 if(!empty($args[0])) {
						 if(is_numeric($args[0])){
							 $sender->removeEffect($args[0]);
							 $sender->sendPopup("§4Clear effect" . $args[0] . "!");
						 } else {
							 $effect = Effect::getEffectByName($args[0]);
							 $sender->removeEffect($effect);
							 $sender->sendPopup("§4Clear effect" . $args[0] . "!");
						 }
					 } else {
						 $id = 1;
						 while ($id < 24) {
							 $sender->sendPopup("§4Clear effect" . $id . "!");
							 $sender->removeEffect($id);
							 $id ++;
						 }
					 }
					 return true;
					 break;
				 }
		  }
}
