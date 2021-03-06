<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ar\Equipment */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => Yii::t('app', 'Equipment'),
]) . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Equipments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="equipment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
		'expiriences' => $expiriences,
		'materials' => $materials,
		'levels' => $levels,
		'expirienceData' => $expirienceData,
    ]) ?>

</div>
