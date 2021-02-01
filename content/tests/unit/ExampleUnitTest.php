<?php
/**
 * lujayn plugin for Craft CMS 3.x
 *
 * test
 *
 * @link      https://lujayninfoways.com
 * @copyright Copyright (c) 2021 aamir
 */

namespace testlujayn\lujayntests\unit;

use Codeception\Test\Unit;
use UnitTester;
use Craft;
use testlujayn\lujayn\Lujayn;

/**
 * ExampleUnitTest
 *
 *
 * @author    aamir
 * @package   Lujayn
 * @since     1
 */
class ExampleUnitTest extends Unit
{
    // Properties
    // =========================================================================

    /**
     * @var UnitTester
     */
    protected $tester;

    // Public methods
    // =========================================================================

    // Tests
    // =========================================================================

    /**
     *
     */
    public function testPluginInstance()
    {
        $this->assertInstanceOf(
            Lujayn::class,
            Lujayn::$plugin
        );
    }

    /**
     *
     */
    public function testCraftEdition()
    {
        Craft::$app->setEdition(Craft::Pro);

        $this->assertSame(
            Craft::Pro,
            Craft::$app->getEdition()
        );
    }
}
