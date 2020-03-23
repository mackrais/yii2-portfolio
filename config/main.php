<?php
/**
 * Created by PhpStorm.
 * @user: MackRais
 * @site: http://mackrais.com
 * @email: mackraiscms@gmail.com
 */

$moduleName = basename(dirname(dirname(__FILE__)));
return [
    'modules' => [
        $moduleName => [
            'class' => 'app\modules\\'.$moduleName.'\\Module'
       ],
    ],
    'components' => [
        'urlManager' => [
            'rules' => [
                $moduleName . '/<action>' => $moduleName . '/default/<action>',
            ],
        ],
    ],
];
