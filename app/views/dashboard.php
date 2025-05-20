<?php
ob_start();
$user = \App\helpers\Auth::user();
?>

<div class="tab-content">
    Data  <?php print_r($user) ?>
    <br>

    My name is:  <?= $user->name ?>
    <br>
    My email is:  <?= $user->email ?>
</div>