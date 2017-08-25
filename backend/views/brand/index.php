<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Brands';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="brand-index">
	<div class="box">
		<div class="box-header with-border">
			<h3 class="box-title">Data Brands</h3>
			<p class="pull-right">
				<?= Html::a('<i class="glyphicon glyphicon-plus"></i>New Brand', ['create'], ['class' => "btn btn-success modalBtn",
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
						'attribute'=> 'nID_kategori',
						'label'=>'Kategori',
					],
                                        [
						'attribute'=> 'vBrand_seo',
						'label'=>'Brand Seo',
					],
                                        [
						'attribute'=> 'vInisial_brand',
						'label'=>'Inisial Brand',
					],
                                        [
						'attribute'=> 'vNama_brand',
						'label'=>'Nama Brand',
					],		
					['class' => 'yii\grid\ActionColumn',
						'buttons'=>[
							'view'=>function ($url, $model) {
								return  Html::a('<span class="glyphicon glyphicon-eye-open"></span>' ,['view','id'=>$model->nID_brand],[
                                                                                'class' => "modalBtn",
                                                                                'data-toggle'=>"modal",
                                                                                'data-target'=>"#modalPopup"
                                                                                ]);
                                                                },
							'update'=>function ($url, $model) {
								return  Html::a('<span class="glyphicon glyphicon-pencil"></span>' ,['update','id'=>$model->nID_brand],[
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
	
	<?php
		echo "<div class='row'>"; // open a new row of 4 card
		foreach ($dataProvider->models as $card) {
			echo "<div class='col-md-3 col-xs-12'>";
			echo "<div class='thumbnail'>";
			echo $card->vBrand_seo;
			echo "</br>";
			echo $card->vInisial_brand;
			echo "</br>";
			echo $card->vNama_brand;
			echo "</div></div>";
			
		}
		echo "</div><!-- close row last row-->";
	?>
</div>
