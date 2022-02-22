<?php
/** @var $this ghargest\phpmvc\View */
/** @var $model app\models\LoginForm */
use ghargest\phpmvc\form\TextAreaField;
$this->title = 'Login';
?>
<h1>Login</h1>
<br/>
<?php $form = \ghargest\phpmvc\form\Form::begin('', 'post') ?>
  <?php echo $form->inputField($model, 'email') ?>
  <br/>
  <?php echo $form->inputField($model, 'password')->passwordField() ?>
  <br/>
  <button type="submit" class="btn btn-primary">Submit</button>
<?php \ghargest\phpmvc\form\Form::end() ?>