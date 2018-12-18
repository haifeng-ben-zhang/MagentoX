<?php
require_once __DIR__ . '/abstract.php';

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command;

class test extends Mage_Shell_Abstract
{
    public function run()
    {
        $application = new Application('echo', '1.0.0');
        $command = new Command();
        $command->setName("testing");

        $application->add($command);

        $application->setDefaultCommand($command->getName(), true);
        $application->run();
    }
}

$shell = new test();
$shell->run();