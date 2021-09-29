<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AppUsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'App Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-users-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create App Users', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'email:email',
            'password',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
