<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>
<table class="table table-condensed">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
    <h2>Button Tags</h2>
  <a href="#" class="btn btn-info" role="button">Link Button</a>
  <button type="button" class="btn btn-default">Default</button>
  <button type="button" class="btn btn-info">Info</button>
  <button type="button" class="btn btn-primary">Primary</button>
  <input type="button" class="btn btn-success" value="Success">
  <input type="button" class="btn btn-warning" value="Warning">
  <input type="submit" class="btn btn-danger" value="Danger">
    <code><?= __FILE__ ?></code>
</div>
