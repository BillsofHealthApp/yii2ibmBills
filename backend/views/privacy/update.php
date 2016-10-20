<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Privacy */

$this->title = 'Update Privacy: ' . ' ' . $model->privacy_id;
$this->params['breadcrumbs'][] = ['label' => 'Privacies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->privacy_id, 'url' => ['view', 'id' => $model->privacy_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="privacy-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
