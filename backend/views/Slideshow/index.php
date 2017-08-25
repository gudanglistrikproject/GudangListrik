<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Slide Shows';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slide-show-index">
	<div class="box">
		<div class="box-header with-border">
			<h3 class="box-title">Data Slide Show</h3>
			<p class="pull-right">
				<?= Html::a('<i class="glyphicon glyphicon-plus"></i>New Slide', ['create'], ['class' => "btn btn-success modalBtn",
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
						'attribute'=> 'vJudul',
						'label'=>'Judul',
					],
                                        [
						'attribute'=> 'vIsi',
						'label'=>'Isi',
					],
                                        [
						'attribute'=> 'vPath_image',
						'label'=>'Gambar',
					],
                                        [
						'attribute'=> 'vLink',
						'label'=>'Link',
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