<?php
/**
 * This file is part of True Loaded.
 *
 * @link http://www.holbi.co.uk
 * @copyright Copyright (c) 2005 Holbi Group LTD
 *
 * For the full copyright and license information, please view the LICENSE file that was distributed with this source code.
 */

namespace backend\design\boxes\DeliveryLocation;

use Yii;
use yii\base\Widget;

class LocationProducts extends Widget
{

    public $id;
    public $params;
    public $settings;
    public $visibility;

    public function init()
    {
        parent::init();
    }

    public function run()
    {

        return $this->render('../../views/delivery-location-products.tpl', [
            'id' => $this->id, 'params' => $this->params, 'settings' => $this->settings,
            'visibility' => $this->visibility,
        ]);
    }
}