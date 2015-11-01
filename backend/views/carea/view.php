<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Carea */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Careas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carea-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('models', 'Update'), ['update', 'id' => $model->id, 'Celular_id' => $model->Celular_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('models', 'Delete'), ['delete', 'id' => $model->id, 'Celular_id' => $model->Celular_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('models', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nombre',
            'Celular_id',
        ],
    ]) ?>

</div>