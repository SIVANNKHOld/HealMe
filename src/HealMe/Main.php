<?php

namespace HealMe;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase{

    public function onEnable(){
    }

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool {

        switch($cmd->getName()){

            case "healme":
                if($sender instanceof Player){
					$sender->sendMessage("Your heal has set!");
                    $sender->setHealth(20);
                }
            break;

        }

        return true;

    }

}
		