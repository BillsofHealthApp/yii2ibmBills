<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\User */

$this->title = 'My Profile: ' . ' ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'My Dashboard', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
//$this->params['breadcrumbs'][] = 'Update';
?>

<div class="user-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_profileu', [
        'model' => $model,
    ]) ?>

</div>
