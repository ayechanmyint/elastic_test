<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class TraitGeneratorCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:trait';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */

    protected $type = "Traits";

    protected function getStub(){
        return __DIR__.'/stub/traits.stub';
    }

    protected function getDefaultNamespace($rootNameSpace){
        return $rootNameSpace . '\Traits';
    }

}
