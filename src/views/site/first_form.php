<?php

use kartik\datetime\DateTimePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>


<div class="form1-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($first_model, 'company_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($first_model, 'position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($first_model, 'position_desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($first_model, 'salary')->textInput() ?>

    <?= $form->field($first_model, 'start_date')->widget(DateTimePicker::className(),[
        'name' => 'dp_1',
        'type' => DateTimePicker::TYPE_COMPONENT_PREPEND,
        'convertFormat' => true,
        'readonly'=> true,
        'value'=> date("Y-m-d H:i",(integer) $first_model->start_date),
        'pluginOptions' => [
            'format' => 'yyyy-MM-dd H:i',
            'autoclose'=>true,
            'weekStart'=>1,
            'startDate' => date('Y-m-d H:i'),
            'todayBtn'=>true,
        ]
    ]); ?>
    <?php
    function dateDifference(){
        $dt = new DateTime();
        $dt->format('Y-m-d H:i');
        $s = date_add($dt,date_interval_create_from_date_string('3 month'));
        return $s->format('Y-m-d H:i');
    }
    ?>
    <?= $form->field($first_model, 'end_date')->widget(DateTimePicker::className(),[
        'name' => 'dp_2',
        'type' => DateTimePicker::TYPE_COMPONENT_PREPEND,
        'convertFormat' => true,
        'value'=> date("Y-m-d H:i",(integer) $first_model->start_date),
        'readonly'=> true,
        'pluginOptions' => [
            'singleDatePicker' => true,
            'format' => 'yyyy-MM-dd H:i',
            'autoclose'=>true,
            'weekStart'=>1,
            'startDate' => dateDifference(),
        ]
    ]);  ?>

    <?= $form->field($first_model, 'placement_date')->widget(DateTimePicker::className(),[
        'name' => 'dp_3',
        'type' => DateTimePicker::TYPE_COMPONENT_PREPEND,
        'convertFormat' => true,
        'readonly'=> true,
        'value'=> date("Y-m-d H:i",(integer) $first_model->start_date),
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
