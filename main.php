<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    
        <div class="row">
            <ul class="nav flex-column menu-left">
                <li class="nav-item buffer_bottom buffer_top">
                    <img src="img\TrueCare24_logo.png">
                </li>
                <li class="nav-item">
                    <img src="img\Dashboard.png">
                    <a class="nav-link" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                    <img src="img\FAQ.png">
                    <a class="nav-link" href="#">FAQ</a>
                </li>
                <li class="nav-item">
                    <img src="img\Sign out.png">
                    <a class="nav-link" href="#">Sign out</a>
                </li>
            </ul>
       
            <div class="col-sm-8">
            
                    <form class="form-inline">
                        <div class="form-group mb-2">
                                <img src="img\Back 1.png">BACK
                            </div>
                            <div class="form-group mx-sm-3 mb-2">
                            <input type="text" class="form-control" aria-label="Go to case ID#">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">></button>
                            </div>
                        </div>
                    </form>
              
               
                <div class="content">
                    <?= Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]) ?>
                    <?= Alert::widget() ?>
                    <?= $content ?>
                </div>
            </div>
        </div>   
   
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
