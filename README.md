# Magento Symfony Console

Magento module that adds symfony console capabilities like in Magento 2.

## Installation

```
composer require "staempfli/magento-symfony-console":"~1.0"
```

## Usage

```
<magento_dir>/bin/magento
```

## Add Commands

1. Add your model class to the available commands on `etc/config.xml`

    ```
    <default>
        <staempfli_console>
            <commands>
                <unique_key>vendorname_packagename/console_sampleCommand</unique_key>
            </commands>
        </staempfli_console>
    </default>
    ```

2. Create your class under `Model` and extend from `Staempfli_Console_Model_Command`

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
                ->setHelp("Help Help!");
        }

        protected function execute(InputInterface $input, OutputInterface $output)
        {
           // ... Your actions here
        }
    }
    ```

## Custom Configuration

If you use a custom `vendor-dir`, you can configure that in your project `etc/config.xml`

```
<default>
    <staempfli_console>
        <vendor_dir>../vendor</vendor_dir> <!-- Related path from magento base dir -->
    </staempfli_console>
</default>
```

If you need a specific version of `symfony/console`, you can set that on your project `composer.json`

```
composer require "symfony/console": "<version>"
```

## Prerequisites

- PHP >= 5.5.*
- Magento >= 1.*
