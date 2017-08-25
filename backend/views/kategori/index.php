<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kategoris';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="kategori-index">
	<div class="box">
		<div class="box-header with-border">
			<h3 class="box-title">Data Kategori</h3>
			<p class="pull-right">
				<?= Html::a('<i class="glyphicon glyphicon-plus"></i>New Kategori', ['create'], ['class' => "btn btn-success modalBtn",
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
						'attribute'=> 'vNama_kategori',
						'label'=>'Nama kategori',
					],
                                        [
						'attribute'=> 'kategori_seo',
						'label'=>'Kategori Seo',
					],
                                        [
						'attribute'=> 'vLink',
						'label'=>'Link',
					],
                                        [
						'attribute'=> 'parent_id',
						'label'=>'ID Parent',
					],		
					['class' => 'yii\grid\ActionColumn',
						'buttons'=>[
							'view'=>function ($url, $model) {
								return  Html::a('<span class="glyphicon glyphicon-eye-open"></span>' ,['view','id'=>$model->nID_kategori],[
                                                                                'class' => "modalBtn",
                                                                                'data-toggle'=>"modal",
                                                                                'data-target'=>"#modalPopup"
                                                                                ]);
                                                                },
							'update'=>function ($url, $model) {
								return  Html::a('<span class="glyphicon glyphicon-pencil"></span>' ,['update','id'=>$model->nID_kategori],[
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