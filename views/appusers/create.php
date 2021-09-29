<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AppUsers */

$this->title = 'Create App Users';
$this->params['breadcrumbs'][] = ['label' => 'App Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-users-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
