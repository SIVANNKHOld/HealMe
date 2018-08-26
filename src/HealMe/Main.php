<?php

namespace HealMe;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase{

    public function onEnable(){
        $this->getLogger()->info("HealMe by SIVANNKH has been enabled!");
    }
    public function onDisable(){
        $this->getLogger()->info("HealMe by SIVANNKH has been disabled!");
    }

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool {

        switch($cmd->getName()){

            case "healme":
                if($sender instanceof Player){
			if($sender->hasPermission("healme.command")){
				$sender->setHealth(20);
				$sender->sendMessage("You have been healed!");
			}
			   
                }
            break;

        }

        return true;

    }

}
		
