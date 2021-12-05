<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloCommand extends Command
{
    protected static $defaultName = 'parser:hello';

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Hello world!');

        return Command::SUCCESS;
    }
}
