<?php
/**
 * This file is part of True Loaded.
 * 
 * @link http://www.holbi.co.uk
 * @copyright Copyright (c) 2005 Holbi Group LTD
 * 
 * For the full copyright and license information, please view the LICENSE file that was distributed with this source code.
 */

namespace backend\controllers;

use Yii;

/**
 * default controller to handle user requests.
 */
class Cron_managerController extends Sceleton  {

    public $acl = ['TEXT_SETTINGS', 'BOX_HEADING_CRON_MANAGER'];
    
    public function actionIndex() {
      global $language;
      
      $this->selectedMenu = array('settings', 'cron_manager');
      $this->navigation[] = array('link' => Yii::$app->urlManager->createUrl('cron_manager/index'), 'title' => HEADING_TITLE);
      
      $this->view->headingTitle = HEADING_TITLE;
      
        $messages = $_SESSION['messages'];
        unset($_SESSION['messages']);
        if (!is_array($messages)) $messages = [];
        return $this->render('index', array('messages' => $messages));
      
    }
    
}
