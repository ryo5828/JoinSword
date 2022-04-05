<?php

namespace ryo5828\JoinSword;

use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\item\VanillaItems;
use pocketmine\plugin\PluginBase;

use pocketmine\event\Listener;

class Main extends PluginBase implements Listener {
    public function onEnable(): void {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->saveDefaultConfig();
    }
    public function onJoin(PlayerJoinEvent $ev) {
        $player = $ev->getPlayer();
        $wooden_sword = VanillaItems::WOODEN_SWORD()->setCustomName($this->getConfig()->get('wooden_sword'));
        $stone_sword = VanillaItems::STONE_SWORD()->setCustomName($this->getConfig()->get('stone_sword'));
        $iron_sword = VanillaItems::IRON_SWORD()->setCustomName($this->getConfig()->get('iron_sword'));
        $golden_sword = VanillaItems::GOLDEN_SWORD()->setCustomName($this->getConfig()->get('golden_sword'));
        $diamond_sword = VanillaItems::DIAMOND_SWORD()->setCustomName($this->getConfig()->get('diamond_sword'));

        if(!($player->getInventory()->contains($wooden_sword)) and !($this->getConfig()->get('wooden_sword'))) {
            $player->getInventory()->addItem($wooden_sword);
        }
        if(!($player->getInventory()->contains($stone_sword)) and !($this->getConfig()->get('stone_sword'))) {
            $player->getInventory()->addItem($stone_sword);
        }
        if(!($player->getInventory()->contains($iron_sword)) and !($this->getConfig()->get('iron_sword'))) {
            $player->getInventory()->addItem($iron_sword);
        }
        if(!($player->getInventory()->contains($golden_sword)) and !($this->getConfig()->get('golden_sword'))) {
            $player->getInventory()->addItem($golden_sword);
        }
        if(!($player->getInventory()->contains($diamond_sword)) and !($this->getConfig()->get('diamond_sword'))) {
            $player->getInventory()->addItem($diamond_sword);
        }
    }
}