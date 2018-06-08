<?php

namespace Test;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase{

    public function onEnable(){
    }

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool {

        switch($cmd->getName){

            case
"test":
                if($sender instanceof Playet){

                    $sender->sendMessage("It is a test text with my own plugin");

                }
            break;

        }

        return true;

    }

}