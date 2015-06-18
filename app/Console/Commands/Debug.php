<?php
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 15/06/18
 * Time: 10:17
 */

namespace App\Console\Commands;

use App\Services\Address;
use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class Debug extends Command{

    protected $name = "debug";
    protected $description = "hogehoge";

    protected function getOptions(){
        return [
            ["mode",null,InputOption::VALUE_OPTIONAL,"sample option","none"]
        ];
    }
    protected function getArguments(){
        return [
            ["key",InputArgument::OPTIONAL,"sample option","大阪"]
        ];
    }

    public function handle(){
        $this->line("引数：". $this->argument("key"));
        $this->line("オプション:".$this->option("mode"));

        $this->line(Address::get($this->argument("key")));





    }

}