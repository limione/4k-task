<?php

use kartik\datetime\DateTimePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="form1-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($second_model, 'company_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($second_model, 'position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($second_model, 'contact_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($second_model, 'contact_email')->input('email')?>

    <?= $form->field($second_model, 'placement_date')->widget(DateTimePicker::className(),[
        'name' => 'dp_1',
        'type' => DateTimePicker::TYPE_COMPONENT_PREPEND,
        'convertFormat' => true,
        'readonly'=> true,
        'value'=> date("Y-m-d H:i",(integer) $second_model->placement_date),
        'pluginOptions' => [
            'format' => 'yyyy-MM-dd H:i',
            'autoclose'=>true,
            'weekStart'=>1,
            'startDate' => date('Y-m-d H:i'),
            'todayBtn'=>true,
        ]
    ]);  ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>