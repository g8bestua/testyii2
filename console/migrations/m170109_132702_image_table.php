<?php

use yii\db\Migration;

class m170109_132702_image_table extends Migration
{
    public function up()
    {
        $this->createTable('image', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'path' => $this->string(),
        ]);
    }

    public function down()
    {
        $this->dropTable('image');
    }
}
