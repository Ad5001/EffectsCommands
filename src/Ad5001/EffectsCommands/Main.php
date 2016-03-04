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
  public function onCommand(CommandSender $sender, Command $command, $label, array $args){
                 switch($command->getName()) {
					 case "speed":
					  if(count($args) < 1){
                            $sender->sendMessage("§4Usage: /speed <Amplifier>");
                           } else {
					  $speed = Effect::getEffectByName("SPEED");
					  $speed->setDuration(999999999999);
					  $speed->setAmplifier($args[0]);
					  $speed->setVisible(false);
					  $sender->addEffect($speed);
						   }
					  return true;
					  break;
					 case "jumpboost":
					 if(count($args) < 1){
                            $sender->sendMessage("§4Usage: /jumpboost <Amplifier>");
                           } else {
					  $jumpb = Effect::getEffectByName("JUMP");
					  $jumpb->setDuration(999999999999);
					  $jumpb->setAmplifier($args[0]);
					  $jumpb->setVisible(false);
					  $sender->addEffect($jumpb);
						   }
					  return true;
					  break;
					 case "nightvision":
					  $nv = Effect::getEffectByName("NIGHT_VISION");
					  $nv->setDuration(999999999999);
					  $nv->setAmplifier($args[0]);
					  $nv->setVisible(false);
					  $sender->addEffect($nv);
					  return true;
					  break;
					 case "regeneration":
					 if(count($args) < 1){
                            $sender->sendMessage("§4Usage: /regeneration <Amplifier>");
                           } else {
					  $regen = Effect::getEffectByName("REGENERATION");
					  $regen->setDuration(999999999999);
					  $regen->setAmplifier($args[0]);
					  $regen->setVisible(false);
					  $sender->addEffect($regen);
						   }
					  return true;
					  break;
					 case "resistance":
					 if(count($args) < 1){
                            $sender->sendMessage("§4Usage: /resistance <Amplifier>");
                           } else {
					  $res = Effect::getEffectByName("DAMAGE_RESISTANCE");
					  $res->setDuration(999999999999);
					  $res->setAmplifier($args[0]);
					  $res->setVisible(false);
					  $sender->addEffect($res);
						   }
					  return true;
					  break;
					 case "fireresistance":
					  $fres = Effect::getEffectByName("FIRE_RESISTANCE");
					  $fres->setDuration(999999999999);
					  $fres->setAmplifier(1);
					  $fres->setVisible(false);
					  $sender->addEffect($fres);
					  return true;
					  break;
					 case "haste":
					 if(count($args) < 1){
                            $sender->sendMessage("§4Usage: /haste <Amplifier>");
                           } else {
					  $haste = Effect::getEffectByName("HASTE");
					  $haste->setDuration(999999999999);
					  $haste->setAmplifier($args[0]);
					  $haste->setVisible(false);
					  $sender->addEffect($haste);
						   }
					  return true;
					  break;
					 case "invisible":
					  $inv = Effect::getEffectByName("INVISIBILITY");
					  $inv->setDuration(999999999999);
					  $inv->setAmplifier(1);
					  $inv->setVisible(false);
					  $sender->addEffect($inv);
					  return true;
					  break;
					 case "saturation":
					 if(count($args) < 1){
                            $sender->sendMessage("§4Usage: /saturation <Amplifier>");
                           } else {
					  $sat = Effect::getEffectByName("SATURATION");
					  $sat->setDuration(999999999999);
					  $sat->setAmplifier($args[0]);
					  $sat->setVisible(false);
					  $sender->addEffect($sat);
						   }
					  return true;
					  break;
					 case "waterbreath":
					 if(count($args) < 1){
                            $sender->sendMessage("§4Usage: /weatherbreath <Amplifier>");
                           } else {
					  $wb = Effect::getEffectByName("WATER_BREATHING");
					  $wb->setDuration(999999999999);
					  $wb->setAmplifier($args[0]);
					  $wb->setVisible(false);
					  $sender->addEffect($wb);
						   }
					  return true;
					  break;
					 case "absorbtion":
					 if(count($args) < 1){
                            $sender->sendMessage("§4Usage: /absorbtion <Amplifier>");
                           } else {
					  $abs = Effect::getEffectByName("ABSORBTION");
					  $abs->setDuration(999999999999);
					  $abs->setAmplifier($args[0]);
					  $abs->setVisible(false);
					  $sender->addEffect($abs);
						   }
					  return true;
					  break;
					 case "healthboost":
					 if(count($args) < 1){
                            $sender->sendMessage("§4Usage: /healthboost <Amplifier>");
                           } else {
					  $heb = Effect::getEffectByName("HEALTH_BOOST");
					  $heb->setDuration(999999999999);
					  $heb->setAmplifier($args[0]);
					  $heb->setVisible(false);
					  $sender->addEffect($heb);
						   }
					  return true;
					  break;
				 }
		  }
}
