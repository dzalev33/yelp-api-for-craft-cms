<?php
/**
 * Yelp API for Craft CMS plugin for Craft CMS 3.x
 *
 * This is a plugin for task. It is getting data from Yelp API
 *
 * @link      dzalev.com
 * @copyright Copyright (c) 2021 Stefan Salev
 */

namespace yelpapicraftcms\yelpapiforcraftcms\models;

use yelpapicraftcms\yelpapiforcraftcms\YelpApiForCraftCms;

use Craft;
use craft\base\Model;

/**
 * YelpApiForCraftCmsModel Model
 *
 * Models are containers for data. Just about every time information is passed
 * between services, controllers, and templates in Craft, it’s passed via a model.
 *
 * https://craftcms.com/docs/plugins/models
 *
 * @author    Stefan Salev
 * @package   YelpApiForCraftCms
 * @since     1.0.0
 */
class YelpApiForCraftCmsModel extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * Some model attribute
     *
     * @var string
     */
    public $someAttribute = 'Some Default';

    // Public Methods
    // =========================================================================

    /**
     * Returns the validation rules for attributes.
     *
     * Validation rules are used by [[validate()]] to check if attribute values are valid.
     * Child classes may override this method to declare different validation rules.
     *
     * More info: http://www.yiiframework.com/doc-2.0/guide-input-validation.html
     *
     * @return array
     */
    public function rules()
    {
        return [
            ['someAttribute', 'string'],
            ['someAttribute', 'default', 'value' => 'Some Default'],
        ];
    }
}
