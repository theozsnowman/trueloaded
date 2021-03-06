<?php
/**
 * This file is part of True Loaded.
 *
 * @link http://www.holbi.co.uk
 * @copyright Copyright (c) 2005 Holbi Group LTD
 *
 * For the full copyright and license information, please view the LICENSE file that was distributed with this source code.
 */

namespace frontend\design\boxes;

use Yii;
use yii\base\Widget;
use frontend\design\IncludeTpl;

class Html_box extends Widget
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
        $content = \common\classes\TlUrl::replaceUrl($this->settings[0]['text']);
        $content = \frontend\design\Info::translateKeys($content);

        if ($this->settings[0]['pdf']){
            return $content;
        } else {
            return IncludeTpl::widget(['file' => 'boxes/html.tpl', 'params' => ['text' => $content]]);
        }
    }
}