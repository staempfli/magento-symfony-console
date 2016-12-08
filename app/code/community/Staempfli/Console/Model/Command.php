<?php

/**
 * Command
 *
 * @copyright Copyright (c) 2016 Staempfli AG
 * @author    juan.alonso@staempfli.com
 */
use Symfony\Component\Console\Command\Command;

class Staempfli_Console_Model_Command extends Command
{
    public function __construct($name)
    {
        if (!$name) {
            $name = null;
        }
        parent::__construct($name);
    }
}