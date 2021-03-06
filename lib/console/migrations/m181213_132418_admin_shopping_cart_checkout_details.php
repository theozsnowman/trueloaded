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
 * Class m181213_132418_admin_shopping_cart_checkout_details
 */
class m181213_132418_admin_shopping_cart_checkout_details extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn('admin_shopping_carts', 'checkout_details', $this->binary()->notNull());        
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        return $this->dropColumn('admin_shopping_carts', 'checkout_details');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181213_132418_admin_shopping_cart_checkout_details cannot be reverted.\n";

        return false;
    }
    */
}
