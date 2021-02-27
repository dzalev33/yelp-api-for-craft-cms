<?php
/**
 * Yelp API for Craft CMS plugin for Craft CMS 3.x
 *
 * This is a plugin for task. It is getting data from Yelp API
 *
 * @link      dzalev.com
 * @copyright Copyright (c) 2021 Stefan Salev
 */

namespace yelpapicraftcms\yelpapiforcraftcms\assetbundles\yelpapiforcraftcms;

use Craft;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * YelpApiForCraftCmsAsset AssetBundle
 *
 * AssetBundle represents a collection of asset files, such as CSS, JS, images.
 *
 * Each asset bundle has a unique name that globally identifies it among all asset bundles used in an application.
 * The name is the [fully qualified class name](http://php.net/manual/en/language.namespaces.rules.php)
 * of the class representing it.
 *
 * An asset bundle can depend on other asset bundles. When registering an asset bundle
 * with a view, all its dependent asset bundles will be automatically registered.
 *
 * http://www.yiiframework.com/doc-2.0/guide-structure-assets.html
 *
 * @author    Stefan Salev
 * @package   YelpApiForCraftCms
 * @since     1.0.0
 */
class YelpApiForCraftCmsAsset extends AssetBundle
{
    // Public Methods
    // =========================================================================

    /**
     * Initializes the bundle.
     */
    public function init()
    {
        // define the path that your publishable resources live
        $this->sourcePath = "@yelpapicraftcms/yelpapiforcraftcms/assetbundles/yelpapiforcraftcms/dist";

        // define the dependencies
        $this->depends = [
            CpAsset::class,
        ];

        // define the relative path to CSS/JS files that should be registered with the page
        // when this asset bundle is registered
        $this->js = [
            'js/YelpApiForCraftCms.js',
        ];

        $this->css = [
            'css/YelpApiForCraftCms.css',
        ];

        parent::init();
    }
}
