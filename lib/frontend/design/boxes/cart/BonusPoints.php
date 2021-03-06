<?php
/**
 * This file is part of True Loaded.
 *
 * @link http://www.holbi.co.uk
 * @copyright Copyright (c) 2005 Holbi Group LTD
 *
 * For the full copyright and license information, please view the LICENSE file that was distributed with this source code.
 */

namespace frontend\design\boxes\cart;

use Yii;
use yii\base\Widget;
use frontend\design\IncludeTpl;

class BonusPoints extends Widget
{

    public $file;
    public $params;
    public $settings;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $groupId = (int) \Yii::$app->storage->get('customer_groups_id');
        /** @var \common\services\OrderManager $manager */
        $manager = $this->params['manager'];
        $bonus_points = $manager->getBonusesDetails();
        return IncludeTpl::widget(['file' => 'boxes/cart/bonus-points.tpl', 'params' => [
            'bonus_points' => $bonus_points,
            'id' => $this->id,
            'groupId' => $groupId
        ]]);
    }
}
