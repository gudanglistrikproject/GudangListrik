<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ms Produks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ms-produk-index">
	<div class="box">
		<div class="box-header with-border">
			<h3 class="box-title">Data Master Produk</h3>
			<p class="pull-right">
				<?= Html::a('<i class="glyphicon glyphicon-plus"></i>New Produk', ['create'], ['class' => "btn btn-success modalBtn",
                                                    'data-toggle'=>"modal",
                                                    'data-target'=>"#modalPopup"
                                                    ]) ?>
			</p>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<?= GridView::widget([
				'dataProvider' => $dataProvider,
				'columns' => [
					['class' => 'yii\grid\SerialColumn'],
					[
						'attribute'=> 'vNama_produk',
						'label'=>'Nama Produk',
					],
                                        [
						'attribute'=> 'nID_kategori',
						'label'=>'Kategori',
					],
                                        [
						'attribute'=> 'nID_subkategori',
						'label'=>'Sub Kategori',
					],
                                        [
						'attribute'=> 'nID_brand',
						'label'=>'Brand',
					],		
					['class' => 'yii\grid\ActionColumn',
						'buttons'=>[
							'view'=>function ($url, $model) {
								return  Html::a('<span class="glyphicon glyphicon-eye-open"></span>' ,['view','id'=>$model->nID_ms_produk],[
                                                                                'class' => "modalBtn",
                                                                                'data-toggle'=>"modal",
                                                                                'data-target'=>"#modalPopup"
                                                                                ]);
                                                                },
							'update'=>function ($url, $model) {
								return  Html::a('<span class="glyphicon glyphicon-pencil"></span>' ,['update','id'=>$model->nID_ms_produk],[
                                                                                'class' => "modalBtn",
                                                                                'data-toggle'=>"modal",
                                                                                'data-target'=>"#modalPopup"
                                                                                ]);
                                                                },
                                                        ],
					],
				],
			]); ?>
		</div>
	</div>
</div>