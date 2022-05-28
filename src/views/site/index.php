<?php
use yii\helpers\Html;
?>


<form>
    <p>Please select the form you want to fill out:</p>
    <div>
        <input type="radio" id="form1"
               name="form" class="f1" value="form1" checked>
        <label for="form1">Form 1</label>

        <input type="radio" id="form2"
               name="form" class="f2" value="form2">
        <label for="form2">Form 2</label>
    </div>
</form>

<div class="form1-create" >
    <h1><?= Html::encode('Form 1') ?></h1>

    <?= $this->render('first_form', [
        'first_model' => $first_model,
    ]) ?>
</div>

<div class="form2-create">
    <h1><?= Html::encode('Form 2') ?></h1>

    <?= $this->render('second_form', [
        'second_model' => $second_model,
    ])

    ?>
</div>

<div class="modal">
    <div class="modal_content">
        <span class="close">&times;</span>
        <h5>Thank you for filling out the form!</h5>
        <p>This message will close in 15 seconds</p>
    </div>
</div>



