<?php
namespace app\modules\api;

use yii\base\Module;

class Api extends Module{
    public function init(){
        parent::init();

        $this->modules = [
            'v1' => [
                'class' => 'app\modules\api\modules\v1\VersionOne',
            ],
        ];
    }

}