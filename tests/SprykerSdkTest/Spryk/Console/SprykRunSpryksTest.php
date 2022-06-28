<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerSdkTest\Spryk\Console;

use Codeception\Test\Unit;
use SprykerSdk\Spryk\Console\SprykRunConsole;

/**
 * Auto-generated group annotations
 *
 * @group SprykerSdkTest
 * @group Spryk
 * @group Console
 * @group SprykRunSpryksTest
 * Add your own group annotations below this line
 */
class SprykRunSpryksTest extends Unit
{
    /**
     * @var \SprykerSdkTest\SprykConsoleTester
     */
    protected $tester;

    /**
     * @return void
     */
    public function testExecutesSpryks(): void
    {
        /** @var \SprykerSdk\Spryk\Console\SprykRunConsole $command */
        $command = $this->tester->getClass(SprykRunConsole::class);
        $tester = $this->tester->getConsoleTester($command);

        $arguments = [
            'command' => $command->getName(),
            SprykRunConsole::ARGUMENT_SPRYK => 'SprykWithSpryks',
            '--mode' => 'core',
        ];

        $tester->execute($arguments);

        $this->assertDirectoryExists($this->tester->getVirtualDirectory() . 'vendor/spryker/spryker/Bundles/FooBar/firstDirectory');
        $this->assertDirectoryExists($this->tester->getVirtualDirectory() . 'vendor/spryker/spryker/Bundles/FooBar/secondDirectory');
    }

    /**
     * @return void
     */
    public function testExecutesNotUniqueSpryks(): void
    {
        /** @var \SprykerSdk\Spryk\Console\SprykRunConsole $command */
        $command = $this->tester->getClass(SprykRunConsole::class);
        $tester = $this->tester->getConsoleTester($command);

        $arguments = [
            'command' => $command->getName(),
            SprykRunConsole::ARGUMENT_SPRYK => 'SprykWithNotUniqueSpryks',
            '--mode' => 'core',
        ];

        $tester->execute($arguments);

        $this->assertDirectoryExists($this->tester->getVirtualDirectory() . 'vendor/spryker/spryker/Bundles/FooBar/firstDirectory');
        $this->assertDirectoryExists($this->tester->getVirtualDirectory() . 'vendor/spryker/spryker/Bundles/FooBar/secondDirectory');
    }

    /**
     * @return void
     */
    public function testExecutesSpryksIfSprykeHasExecutedSpryks(): void
    {
        /** @var \SprykerSdk\Spryk\Console\SprykRunConsole $command */
        $command = $this->tester->getClass(SprykRunConsole::class);
        $tester = $this->tester->getConsoleTester($command);

        $arguments = [
            'command' => $command->getName(),
            SprykRunConsole::ARGUMENT_SPRYK => 'SprykWithSpryksAndExecutedSpryks',
            '--mode' => 'core',
        ];

        $tester->execute($arguments);

        $this->assertDirectoryDoesNotExist($this->tester->getVirtualDirectory() . 'vendor/spryker/spryker/Bundles/FooBar/firstDirectory');
        $this->assertDirectoryDoesNotExist($this->tester->getVirtualDirectory() . 'vendor/spryker/spryker/Bundles/FooBar/secondDirectory');
    }
}
