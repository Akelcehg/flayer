<?php

class m160808_202231_create_flayer_groups extends \yii\mongodb\Migration
{
    public function up()
    {
        $this->createCollection('flayer_groups');
        $this->batchInsert('flayer_groups', [
            /*['name' => 'FOOD & DRINK', 'count' => 0],
            ['name' => 'EVENTS', 'count' => 0],
            ['name' => 'BEAUTY', 'count' => 0],
            ['name' => 'FITNESS', 'count' => 0],
            ['name' => 'ELECTRONICS', 'count' => 0],
            ['name' => 'FURNITURE', 'count' => 0],
            ['name' => 'FASHION', 'count' => 0],
            ['name' => 'SHOPPING', 'count' => 0],
            ['name' => 'HOME & GARDEN', 'count' => 0],
            ['name' => 'TRAVEL', 'count' => 0],*/
        ]);
    }

    public function down()
    {
        $this->dropCollection('flayer_groups');
    }
}
/*
 * # creates a new migration named 'create_user_collection'
yii mongodb-migrate/create create_user_collection

# applies ALL new migrations
yii mongodb-migrate

# reverts the last applied migration
yii mongodb-migrate/down
 * */