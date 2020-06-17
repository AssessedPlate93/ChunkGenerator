<?php

declare(strict_types=1);

namespace assessed\Generator;

use pocketmine\plugin\PluginBase;
use pocketmine\level\generator\Generator;

class Main extends PluginBase{
	public static function generate($path, $name, $seed, $generator, array $options = []){
		@mkdir($path, 0777, true);
		@mkdir($path, 0777);
	}
	public function onLoad(){
        Generator::addGenerator(chunk::class,   chunk::chunk);
    }
}
