<?php
/**
 * Created by PhpStorm.
 * PHP Version: 7.4
 *
 * @category
 * @author     Oleh Boiko <developer@mackais.com>
 * @copyright  2018-2020 @MackRais
 * @link       <https://mackrais.com>
 * @date       3/26/20
 */

declare(strict_types=1);

use app\assets\BootstrapAsset;
use \yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

BootstrapAsset::register($this);
$this->registerCssFile('https://use.fontawesome.com/releases/v5.0.7/css/all.css');
$this->registerCss(file_get_contents(__DIR__ . '/../../assets/css/portfolio.css'));
$this->registerCss(file_get_contents(__DIR__ . '/../../assets/css/print.css'), ['media' => 'print']);

?>

<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <base href="<?= \Yii::$app->request->absoluteUrl ?>">
        <?php $this->head() ?>
    </head>
    <body>


    <?php $this->beginBody() ?>

    <main class="container-fluid h-100">
        <?= $content ?>
    </main>


    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>


