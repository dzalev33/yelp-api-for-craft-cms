<?php
/**
 * Yelp API for Craft CMS plugin for Craft CMS 3.x
 *
 * This is a plugin for task. It is getting data from Yelp API
 *
 * @link      dzalev.com
 * @copyright Copyright (c) 2021 Stefan Salev
 */

namespace yelpapicraftcms\yelpapiforcraftcmstests\unit;

use Codeception\Test\Unit;
use UnitTester;
use Craft;
use yelpapicraftcms\yelpapiforcraftcms\YelpApiForCraftCms;

/**
 * ExampleUnitTest
 *
 *
 * @author    Stefan Salev
 * @package   YelpApiForCraftCms
 * @since     1.0.0
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
            YelpApiForCraftCms::class,
            YelpApiForCraftCms::$plugin
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
