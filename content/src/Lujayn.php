<?php
/**
 * lujayn plugin for Craft CMS 3.x
 *
 * test
 *
 * @link      https://lujayninfoways.com
 * @copyright Copyright (c) 2021 aamir
 */

namespace testlujayn\lujayn;


use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;

use yii\base\Event;

/**
 * Class Lujayn
 *
 * @author    aamir
 * @package   Lujayn
 * @since     1
 *
 */
class Lujayn extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var Lujayn
     */
    public static $plugin;

    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $schemaVersion = '1';

    /**
     * @var bool
     */
    public $hasCpSettings = false;

    /**
     * @var bool
     */
    public $hasCpSection = false;

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Event::on(
            Plugins::class,
            Plugins::EVENT_AFTER_INSTALL_PLUGIN,
            function (PluginEvent $event) {
                if ($event->plugin === $this) {
                }
            }
        );

        Craft::info(
            Craft::t(
                'lujayn',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }

    // Protected Methods
    // =========================================================================

}
