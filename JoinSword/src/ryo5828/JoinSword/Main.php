<?php

namespace ryo5828\JoinSword;

use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\item\VanillaItems;
use pocketmine\plugin\PluginBase;

use pocketmine\utils\Config;

use pocketmine\event\Listener;

class Main extends PluginBase implements Listener {

    private $sword_config,
            $woodenSwordName,
            $stoneSwordName,
            $ironSwordName,
            $goldenSwordName,
            $diamondSwordName;


    public function onEnable(): void {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->saveResource('sword.yml');
        $this->sword_config = new Config($this -> getDataFolder().'sword.yml',Config::YAML);

        $this->woodenSwordName = $this->sword_config->get('wooden_sword');
        $this->stoneSwordName = $this->sword_config->get('stone_sword');
        $this->ironSwordName = $this->sword_config->get('iron_sword');
        $this->goldenSwordName = $this->sword_config->get('golden_sword');
        $this->diamondSwordName = $this->sword_config->get('diamond_sword');
    }
    public function onJoin(PlayerJoinEvent $event) {
        $player = $event->getPlayer();
        $wooden_sword = VanillaItems::WOODEN_SWORD()->setCustomName($this->woodenSwordName);
        $stone_sword = VanillaItems::STONE_SWORD()->setCustomName($this->stoneSwordName);
        $iron_sword = VanillaItems::IRON_SWORD()->setCustomName($this->ironSwordName);
        $golden_sword = VanillaItems::GOLDEN_SWORD()->setCustomName($this->goldenSwordName);
        $diamond_sword = VanillaItems::DIAMOND_SWORD()->setCustomName($this->diamondSwordName);

        if(!($player->getInventory()->contains($wooden_sword)) or !($wooden_sword->getCustomName() == $this->woodenSwordName)) {
            $player->getInventory()->canAddItem($wooden_sword);
            $player->getInventory()->addItem($wooden_sword);
        }
        if(!($player->getInventory()->contains($stone_sword)) or !($stone_sword->getCustomName() == $this->stoneSwordName)) {
            $player->getInventory()->canAddItem($stone_sword);
            $player->getInventory()->addItem($stone_sword);
        }
        if(!($player->getInventory()->contains($iron_sword)) or !($iron_sword->getCustomName() == $this->ironSwordName)) {
            $player->getInventory()->canAddItem($iron_sword);
            $player->getInventory()->addItem($iron_sword);
        }
        if(!($player->getInventory()->contains($golden_sword)) or !($golden_sword->getCustomName() == $this->goldenSwordName)) {
            $player->getInventory()->canAddItem($golden_sword);
            $player->getInventory()->addItem($golden_sword);
        }
        if(!($player->getInventory()->contains($diamond_sword)) or !($diamond_sword->getCustomName() == $this->diamondSwordName)) {
            $player->getInventory()->canAddItem($diamond_sword);
            $player->getInventory()->addItem($diamond_sword);
        }
    }
}