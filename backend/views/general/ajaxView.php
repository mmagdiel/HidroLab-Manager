<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $model common\models\General */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Generals'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="general-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('models', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::button(Yii::t('models', 'Select'), [
            'class' => 'btn btn-danger gridRow',
            'data' => [
                'url'=>Url::to(['general/select'])
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'copias',
            'caudal',
            'analisis',
            'Departamento_id',
            'Decreto_id',
            'Clientes_id',
            'Vendedor_id',
        ],
    ]) ?>

</div>
