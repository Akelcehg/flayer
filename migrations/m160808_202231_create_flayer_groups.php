<?php

class m160808_202231_create_flayer_groups extends \yii\mongodb\Migration
{
    public function up()
    {
        $this->createCollection('flayer_groups');
        $this->batchInsert('flayer_groups',[
            ['name' => 'FOOD & DRINK'],
            ['name' => 'EVENTS'],
            ['name' => 'BEAUTY']
        ]);
    }

    public function down()
    {
        $this->dropCollection('flayer_groups');
    }
}