<?php

declare(strict_types=1);

namespace assessed\Generator;

use pocketmine\plugin\PluginBase;
use pocketmine\level\generator\Generator; #Plugin is not finished. Please do not copy. When it will be aviable to use, i will share download link...

class Main extends PluginBase{
	public static function generate($path, $name, $seed, $generator, array $options = []){
		@mkdir($path, 0777, true);
		@mkdir($path, 0777); #To-Do Find better method for that
	}
	public function onLoad(){
        Generator::addGenerator(chunk::class,   chunk::chunk); #Downstairs-soon
		
    }
}
