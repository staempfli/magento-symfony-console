# Magento Symfony Console

Magento module that adds symfony console capabilities.

## Installation

```
composer require "staempfli/magento-symfony-console":"~1.0"
```

## Usage

```
<magento_dir>/bin/magento
```

## Add Commands

1. Create your commands under Model and extend from `Staempfli_Console_Model_Command`

```
<?php

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class VendorName_PackageName_Model_Console_SampleCommand extends Staempfli_Console_Model_Command
{
    protected function configure()
    {
        $this->setName('command:name')
            ->setDescription('Command Description')
            ->setHelp("Help Help!")
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
       // ... Your actions here
    }
}
```

2. Add it to the list of available commands on your `config.xml`

```
<config>
    <default>
        <staempfli_console>
            <commands>
                <unique_key>vendorname_packagename/console_sampleCommand</unique_key>
            </commands>
        </staempfli_console>
    </default>
</config>
```

## Configuration

If you use a custom `vendor-dir`, you can configure that in your project `config.xml`

```
<config>
    <default>
        <staempfli_console>
                <vendor_dir>../vendor</vendor_dir> <!-- Related path from magento base dir -->
        </staempfli_console>
    </default>
</config>
```

If you need a specific version of `symfony/console` just can set that on your composer.json

```
composer require "symfony/console": "<version>"
```

## Prerequisites

- PHP >= 5.5.*
- Magento >= 1.*
