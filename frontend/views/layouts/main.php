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
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
	
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

    <?php
    NavBar::begin([
        'brandLabel' => '',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-custom navbar-orange navbar-fixed-top',
        ],
    ]);
    /* $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
    ]; */
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => '<span class="glyphicon glyphicon-shopping-cart"></span>', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Daftar', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-default logout']
            )
            . Html::endForm()
            . '</li>';
    }
	echo '<form class="navbar-form navbar-left">
			<div class="input-group">
				<input type="text" class="form-control navbar-search" placeholder="Search" aria-label="...">
				<div class="input-group-btn">
					<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
				</div>
			</div>
		  </form>';
		  
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
		'encodeLabels' => false,
    ]);
	
    NavBar::end();
    ?>
	
	<div class="content">
		<?php
			NavBar::begin([
				'innerContainerOptions' => ['class' => 'container-fluid'],
				'brandLabel' => false,
				//'brandUrl' => Yii::$app->homeUrl,
				'options' => [
					'class' => 'navbar-custom menu-bar',
				],
			]);
			
			echo '<div class="btn-group navbar-btn navbar-left">
					<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Kategori Produk <span class="caret"></span></button>
					<ul class="dropdown-menu" role="menu">
					  <li><a href="#">Action</a></li>
					  <li><a href="#">Another action</a></li>
					  <li><a href="#">Something else here</a></li>
					  <li class="divider"></li>
					  <li><a href="#">Separated link</a></li>
					</ul>
				  </div>';
			
			echo '<button type="button" class="btn btn-warning navbar-btn navbar-right">Konfirmasi Pembayaran</button>';
			
			NavBar::end();
		?>
	
		<div class="container">
			<?= Breadcrumbs::widget([
				'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
			]) ?>
			<?= Alert::widget() ?>
			<div class="content">
			<?= $content ?>
		</div>
	</div>

	<footer class="footer footer-orange">
		<div class="container">
			<p class="pull-left">&copy; Gudang Listrik <?= date('Y') ?></p>

			<p class="pull-right"><?= Yii::powered() ?></p>
		</div>
	</footer>

<?php $this->endBody() ?>
</body>
	
<script type="text/javascript">
	$('#da-slider').cslider({
		autoplay	: true,
		bgincrement	: 450
	});
</script>

</html>
<?php $this->endPage() ?>
