<?php

namespace app\modules\advertiser;

/**
 * advertiser module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\advertiser\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->layout = 'advertiser_layout';
        parent::init();

        // custom initialization code goes here
    }
}
