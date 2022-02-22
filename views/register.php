<?php
/** @var $this ghargest\phpmvc\View */
/** @var $model app\models\User */
use ghargest\phpmvc\form\TextAreaField;
$this->title = 'Register Account';
?>
<h1>Register Account</h1>
<br/>
<?php $form = \ghargest\phpmvc\form\Form::begin('', 'post') ?>
  <div class="row">
    <div class="col">
      <?php echo $form->inputField($model, 'firstname') ?>
    </div>
    <div class="col">
      <?php echo $form->inputField($model, 'lastname') ?>
    </div>
  </div>
  <br/>
  <?php echo $form->inputField($model, 'email') ?>
  <br/>
  <?php echo $form->inputField($model, 'password')->passwordField() ?>
  <br/>
  <?php echo $form->inputField($model, 'confirmPassword')->passwordField() ?>
  <br/>
  <button type="submit" class="btn btn-primary">Submit</button>
<?php \ghargest\phpmvc\form\Form::end() ?>