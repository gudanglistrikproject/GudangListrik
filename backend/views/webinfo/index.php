<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Webinfos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="warna-index">
	<div class="box">
		<div class="box-header with-border">
			<h3 class="box-title">Data Menu</h3>
			<p class="pull-right">
				<?= Html::a('<i class="glyphicon glyphicon-plus"></i>New Menu', ['create'], ['class' => "btn btn-success modalBtn",
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
						'attribute'=> 'vNama',
						'label'=>'Nama Menu',
					],
                                        [
						'attribute'=> 'vDiv1',
						'label'=>'Keterangan 1',
					],
                                        [
						'attribute'=> 'vDiv2',
						'label'=>'Keterangan 2',
					],
                                        [
						'attribute'=> 'vDiv3',
						'label'=>'Keterangan 3',
					],		
					['class' => 'yii\grid\ActionColumn',
						'buttons'=>[
							'view'=>function ($url, $model) {
								return  Html::a('<span class="glyphicon glyphicon-eye-open"></span>' ,['view','id'=>$model->nID],[
                                                                                'class' => "modalBtn",
                                                                                'data-toggle'=>"modal",
                                                                                'data-target'=>"#modalPopup"
                                                                                ]);
                                                                },
							'update'=>function ($url, $model) {
								return  Html::a('<span class="glyphicon glyphicon-pencil"></span>' ,['update','id'=>$model->nID],[
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