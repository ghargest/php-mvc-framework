<?php
/** @var $this ghargest\phpmvc\View */
/** @var $model app\models\ContactForm */
use ghargest\phpmvc\form\TextAreaField;
$this->title = 'Contact';
?>
<h1>Contact</h1>
<br/>
<?php $form = \ghargest\phpmvc\form\Form::begin('', 'post') ?>
  <?php echo $form->inputField($model, 'subject') ?>
  <br/>
  <?php echo $form->inputField($model, 'email') ?>
  <br/>
  <?php echo $form->textAreaField($model, 'body') ?>
  <br/>
  <button type="submit" class="btn btn-primary">Submit</button>
<?php \ghargest\phpmvc\form\Form::end() ?>