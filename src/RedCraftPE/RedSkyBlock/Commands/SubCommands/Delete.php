<?php

namespace RedCraftPE\RedSkyBlock\Commands\SubCommands;

use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;
use pocketmine\Player;

class DisbandCommand extends IslandCommand {

    /** @var IslandManager */
    private $islandManager;

    public function __construct(IslandCommandMap $map) {
        $this->islandManager = $map->getPlugin()->getIslandManager();
    }

    public function getName(): string {
        return "disband";
    }

    public function getUsageMessageContainer(): MessageContainer {
        return new MessageContainer("DISBAND_USAGE");
    }

    public function getDescriptionMessageContainer(): MessageContainer {
        return new MessageContainer("DISBAND_DESCRIPTION");
    }

    public function onCommand(Session $session, array $args): void {
        if($this->checkFounder($session)) {
            return;
        }
        IslandFactory::disbandIsland($session->getIsland());
    }

}
