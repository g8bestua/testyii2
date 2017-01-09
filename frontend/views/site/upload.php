<?php
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use yii\helpers\Html;
use yii\helpers\Url;
$this->registerJsFile('@web/js/myjs.js');

?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

<?= $form->field($model, 'imageFile[]')->widget(FileInput::classname(), ['options' => ['accept' => 'image/*','multiple' => false],]); ?>

 <?php echo Html::submitButton('Отправить', [
        'class'=> 'btn btn-success']
);?>

<?php ActiveForm::end() ?>

<?php
foreach ($all_images as $item):
    $variable = substr($item->path, strrpos($item->path, '/') + 1);

    ?>
    <table class="table">
        <tr>
        <td><?php echo Html::img('@web'.$item->path)?></td>

        <td>
            <div><button class=" rotate btn btn-block" >Rotate</button></div><br>
            <div><button class=" delete btn btn-block" value="<?php echo htmlspecialchars($variable); ?>">Delete</button></div>

        </td>
        </tr>
    </table>
<?php
endforeach;
?>

