<?php

namespace RedCraftPE\RedSkyBlock\Commands\SubCommands;

use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;
use pocketmine\Player;

class delete  {

    /** @var IslandManager */
    private static $instance;

public function getName(): string {
        return "delete";
    }

    public function getUsageMessageContainer(): MessageContainer {
        return new MessageContainer("DELETE_USAGE");
    }

    public function getDescriptionMessageContainer(): MessageContainer {
        return new MessageContainer("DELETE_DESCRIPTION");
    }

    public function onCommand(Session $session, array $args): void {
        if($this->checkFounder($session)) {
            return;
        }
        IslandFactory::deleteIsland($session->getIsland());
    }

}
