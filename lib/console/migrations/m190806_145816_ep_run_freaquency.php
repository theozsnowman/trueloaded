<?php
/**
 * This file is part of True Loaded.
 *
 * @link http://www.holbi.co.uk
 * @copyright Copyright (c) 2005 Holbi Group LTD
 *
 * For the full copyright and license information, please view the LICENSE file that was distributed with this source code.
 */

use common\classes\Migration;

/**
 * Class m190806_145816_ep_run_freaquency
 */
class m190806_145816_ep_run_freaquency extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {

      $this->addTranslation('admin/main', [
        'TEXT_NN_HOURS' => 'Every %s hours',
      ]);
      
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        //echo "m190806_145816_ep_run_freaquency cannot be reverted.\n";
      $this->removeTranslation('admin/main', [
        'TEXT_NN_HOURS'
        ]);

        //return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190806_145816_ep_run_freaquency cannot be reverted.\n";

        return false;
    }
    */
}
