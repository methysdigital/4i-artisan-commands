<?php

namespace Rhaarhoff\fouriArtisanCommands\Console\Device\Authentication\Responses;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;

class CreateAllResponses extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = '4i:auth:responses';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create all custom response classes';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Response';


    public function handle()
    {
        $this->createStandardResponse();
    }

    protected function createStandardResponse() {
        $this->call('4i:auth:response', ['name' => 'StandardResponse', '-s' => true]);
    }

}