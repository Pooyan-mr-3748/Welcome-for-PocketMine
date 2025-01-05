<?php

namespace Pooyan3748\welcome;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\player\Player;
use pocketmine\player\GameMode;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\Listener;
use onebone\economyapi\EconomyAPI;

class Main extends PluginBase implements Listener{
    public function onEnable() : void{
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info(TextFormat::GREEN ."on plugin");
    }

    public function onPlayerJoin(PlayerJoinEvent $event) {
        $player = $event->getPlayer();
        $name = $player->getName();

        $player->sendMessage(TextFormat::GREEN ."Hi " .TextFormat::RED. $name .TextFormat::GREEN." Welcome to server" );
        $player->setGamemode(GameMode::SURVIVAL);
        $player->sendTitle(TextFormat::GREEN ."§lWelcome \n to server");
        $player->sendMessage($player.$name);
        


    }



    public function onDisable() : void {
        $this->getLogger()->info(TextFormat::RED ."off Plugin");
    }
}
