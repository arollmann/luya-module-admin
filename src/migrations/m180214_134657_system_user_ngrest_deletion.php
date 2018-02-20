<?php

use yii\db\Migration;

/**
 * Class m180214_134657_system_user_ngrest_deletion
 */
class m180214_134657_system_user_ngrest_deletion extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn('admin_user', 'is_api_user', $this->boolean()->defaultValue(false));
        $this->addColumn('admin_user', 'api_rate_limit', $this->integer()->null());
        $this->addColumn('admin_user', 'api_allowed_ips', $this->string()->null());
        $this->addColumn('admin_user', 'api_last_activity', $this->integer()->null());
        $this->addColumn('admin_ngrest_log', 'is_delete', $this->boolean()->defaultValue(false));
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropColumn('admin_user', 'is_api_user');
        $this->dropColumn('admin_user', 'api_rate_limit');
        $this->dropColumn('admin_user', 'api_allowed_ips');
        $this->dropColumn('admin_user', 'api_last_activity');
        $this->dropColumn('admin_ngrest_log', 'is_delete');
    }
}
