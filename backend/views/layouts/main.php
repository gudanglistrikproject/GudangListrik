<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="sidebar-mini skin-yellow-light">
<?php $this->beginBody() ?>

<div class="wrapper">
	<header class="main-header">
		<a href="" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>G</b>L</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>GUDANG</b>LISTRIK</span>
        </a>
		<nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
		  
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="admin/img/avatar5.png" class="user-image" alt="User Image">
                  <span class="hidden-xs">Alexander Pierce</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="admin/img/avatar5.png" class="img-circle" alt="User Image">
                    <p>
                      Alexander Pierce - Web Developer
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Change Password</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign Out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
		<?php
		/* NavBar::begin([
			'brandLabel' => 'Gudang Listrik',
			'brandUrl' => Yii::$app->homeUrl,
			'options' => [
				'class' => 'navbar navbar-static-top',
			],
		]);
		$menuItems = [
			['label' => 'Home', 'url' => ['/site']],
		];
		if (Yii::$app->user->isGuest) {
			$menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
		} else {
			$menuItems[] = '<li>'
				. Html::beginForm(['/site/logout'], 'post')
				. Html::submitButton(
					'Logout (' . Yii::$app->user->identity->username . ')',
					['class' => 'btn btn-link logout']
				)
				. Html::endForm()
				. '</li>';
		}
		echo Nav::widget([
			'options' => ['class' => 'navbar-nav navbar-right'],
			'items' => $menuItems,
		]);
		NavBar::end(); */
		?>
	</header>
	  
	<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN MENU</li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-user"></i> <span>Admin</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                  <li class="active">
					<?= Html::a('<i class="fa fa-circle-o"></i> Tambah Admin', ['/useradmin']) ?>
				  </li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-file"></i> <span>Mastering</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><?= Html::a('<i class="fa fa-circle-o"></i> Kategori Produk', ['/kategori']) ?></li>
                <li><?= Html::a('<i class="fa fa-circle-o"></i> Sub Kategori Produk', ['/subkategori']) ?></li>
                <li><?= Html::a('<i class="fa fa-circle-o"></i> Sub Sub Kategori Produk', ['/users']) ?></li>
                <li><?= Html::a('<i class="fa fa-circle-o"></i> Brand', ['/brand']) ?></li>
                <li><?= Html::a('<i class="fa fa-circle-o"></i> Jasa Pengiriman', ['/users']) ?></li>
                <li><?= Html::a('<i class="fa fa-circle-o"></i> Level Member', ['/leveluser']) ?></li>
                <li><?= Html::a('<i class="fa fa-circle-o"></i> Warna', ['/warna']) ?></li>
                <li><?= Html::a('<i class="fa fa-circle-o"></i> SKU & ID Produk', ['/users']) ?></li>
              </ul>
            </li>
			<li class="treeview">
              <a href="#">
                <i class="fa fa-dollar"></i> <span>Produk & Penjualan</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><?= Html::a('<i class="fa fa-circle-o"></i> Tambah Produk', ['/msproduk']) ?></li>
                <li><?= Html::a('<i class="fa fa-circle-o"></i> Produk Unggulan', ['/users']) ?></li>
                <li><?= Html::a('<i class="fa fa-circle-o"></i> Produk Promo', ['/users']) ?></li>
                <li><?= Html::a('<i class="fa fa-circle-o"></i> Produk Promo Plus', ['/users']) ?></li>
                <li><?= Html::a('<i class="fa fa-circle-o"></i> Voucher & Delivery', ['/voucher']) ?></li>
                <li><?= Html::a('<i class="fa fa-circle-o"></i> Ekspor & Impor', ['/users']) ?></li>
              </ul>
            </li>
			<li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i> <span>Customer</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><?= Html::a('<i class="fa fa-circle-o"></i> Daftar Customer', ['/users']) ?></li>
                <li><?= Html::a('<i class="fa fa-circle-o"></i> Kirim Pesan', ['/users']) ?></li>
              </ul>
            </li>
			<li class="treeview">
              <a href="#">
                <i class="fa fa-truck"></i> <span>Jasa Pengiriman</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
				<li>
				  <?= Html::a('<i class="fa fa-circle-o"></i> Master <i class="fa fa-angle-left pull-right"></i>', ['/users']) ?>
                  <ul class="treeview-menu">
					<li><?= Html::a('<i class="fa fa-circle-o"></i> Kabupaten / Kota', ['/users']) ?></li>
					<li><?= Html::a('<i class="fa fa-circle-o"></i> Kecamatan', ['/users']) ?></li>
					<li><?= Html::a('<i class="fa fa-circle-o"></i> Kode Pos', ['/users']) ?></li>
                  </ul>
                </li>
				<li><?= Html::a('<i class="fa fa-circle-o"></i> Input Biaya', ['/users']) ?></li>
				<li><?= Html::a('<i class="fa fa-circle-o"></i> Ekspor & Impor', ['/users']) ?></li>
              </ul>
            </li>
			<li>
			  <?= Html::a('<i class="fa fa-shopping-cart"></i> <span>Order & Transaksi</span>', ['/users']) ?>
            </li>
			<li class="treeview">
              <a href="#">
                <i class="fa fa-info-circle"></i> <span>Web Info</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
				<li><?= Html::a('<i class="fa fa-circle-o"></i> Slide Show', ['/slideshow']) ?></li>
				<li><?= Html::a('<i class="fa fa-circle-o"></i> Web Info', ['/users']) ?></li>
              </ul>
            </li>
			<li class="treeview">
              <a href="#">
                <i class="fa fa-line-chart"></i> <span>Report</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><?= Html::a('<i class="fa fa-circle-o"></i> By Waktu Transaksi', ['/users']) ?></li>
                <li><?= Html::a('<i class="fa fa-circle-o"></i> By Waktu Proses', ['/users']) ?></li>
                <li><?= Html::a('<i class="fa fa-circle-o"></i> By Waktu Kirim', ['/users']) ?></li>
                <li><?= Html::a('<i class="fa fa-circle-o"></i> Barang Yang Banyak Dilihat', ['/users']) ?></li>
                <li><?= Html::a('<i class="fa fa-circle-o"></i> Barang Terkirim By Tujuan', ['/users']) ?></li>
                <li><?= Html::a('<i class="fa fa-circle-o"></i> Barang Terlaku By Kategori', ['/users']) ?></li>
                <li><?= Html::a('<i class="fa fa-circle-o"></i> Barang Terlaku By Brands', ['/users']) ?></li>
                <li><?= Html::a('<i class="fa fa-circle-o"></i> Daftar Barang Yang Dijual', ['/users']) ?></li>
                <li><?= Html::a('<i class="fa fa-circle-o"></i> Nilai Transaksi', ['/users']) ?></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
	  
    <div class="content-wrapper">
        <section class="content-header">
			<?= Breadcrumbs::widget([
				'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
			]) ?>
		</section>
		
        <section class="content">
			<?= Alert::widget() ?>
			<?= $content ?>
		</section>
    </div>
</div>

<footer class="main-footer">
	<p class="pull-left">&copy; Gudang Listrik<?= date('Y') ?></p>

	<p class="pull-right hidden-xs"><?= Yii::powered() ?></p>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
