<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>

</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= $content ?>
    </div>
</main>

<footer class="footer mt-auto py-3 text-muted">

</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

<script>
    window.addEventListener("DOMContentLoaded", function(event) {
        if($(".f1")[0].checked) {
            $(".form2-create").hide();
        }
    });
    $(document).ready(function(){
        $(".f1").click(function (e) {
            var form1 = $("#form").val();
            $.ajax({
                url: 'web/index.php',
                type: 'POST',
                data: {form1: form1},
                success: function () {
                    $(".form2-create").fadeOut(500, function () {
                        $(".form2-create").hide();
                        $(".form1-create").show();
                    });
                },
                error: function () {
                    alert("Error!");
                }
            });
        });
        $(".f2").click(function (e) {
            var form2 = $("#form").val();
            $.ajax({
                url: 'web/index.php',
                type: 'POST',
                data: {form2: form2},
                success: function () {
                    $(".form1-create").fadeOut(500, function () {
                        $(".form1-create").hide();
                        $(".form2-create").show();
                    });
                },
                error: function () {
                    alert("Error!");
                }
            });
        });
        $('form').on('submit', function(e){
            var data = $(this).serialize();
            var request =$.ajax({
                url: '/web/index.php',
                type: 'POST',
                data: data,
                success: function(res){
                    $('input[type="text"],textarea').val('');
                },
                error: function(){
                    alert('Error!');
                }
            });
            request.done(function () {
                popup()

            })

            return false;
        });
    });

    function popup() {

        const modal = document.querySelector(".modal")
        const closeBtn = document.querySelector(".close")

        modal.style.display = "block";
        closeBtn.addEventListener("click", () => {
            modal.style.display = "none"
        })

        setTimeout(() => modal.style.display = "none" , 15000)

    }




</script>
