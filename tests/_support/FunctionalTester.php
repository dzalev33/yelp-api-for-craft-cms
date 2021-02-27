<?php
/**
 * Yelp API for Craft CMS plugin for Craft CMS 3.x
 *
 * This is a plugin for task. It is getting data from Yelp API
 *
 * @link      dzalev.com
 * @copyright Copyright (c) 2021 Stefan Salev
 */

use Codeception\Actor;
use Codeception\Lib\Friend;

/**
 * Inherited Methods
 *
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method Friend haveFriend($name, $actorClass = null)
 *
 * @SuppressWarnings(PHPMD)
 *
 */
class FunctionalTester extends Actor
{
    use _generated\FunctionalTesterActions;

}
