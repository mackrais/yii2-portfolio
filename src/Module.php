<?php
/**
 * Created by PhpStorm.
 * @user: MackRais
 * @site: http://mackrais.com
 * @email: mackraiscms@gmail.com
 */
namespace app\modules\portfolio;

use app\components\MrCmsModule;
use yii\base\BootstrapInterface;

class Module extends MrCmsModule implements BootstrapInterface
{

    public function bootstrap($app)
    {
//        if ($app instanceof \yii\console\Application) {
//            $this->controllerNamespace = 'app\modules\sitemap\commands';
//        }
    }
}


