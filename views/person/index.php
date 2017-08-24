<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PersonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'People';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="person-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Person', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'plz',

            ['class' => 'yii\grid\ActionColumn',
	         'template'=>'{view}{audittrail}{update}{delete}',
                            'buttons'=>[
                              'audittrail' => function ($url, $model) {     
                                return Html::a('<span class="glyphicon glyphicon-briefcase"></span>', $url, [
                                        'title' => 'Audit Trail',
                                ]);                                
            
                              }
                          ]   	
		],
        ],
    ]); ?>
</div>
