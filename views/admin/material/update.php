<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ar\Material */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Material',
]) . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Materials'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="material-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
		'expiriences' => $expiriences,
		//'materials' => $materials,
		'levels' => $levels,
		'expirienceData' => $expirienceData,
    ]) ?>

</div>
