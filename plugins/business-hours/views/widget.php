<!-- This file is used to markup the public-facing widget. -->

<p>
<?php if (strlen(trim($weekdays)) > 0) : ?>
<span> Monday - Friday : </span>
<?php echo $weekdays; ?>
<?php endif; ?>

<p>

<p>
<?php if (strlen(trim($saturday)) > 0) : ?>
<span> Saturday : </span>
<?php echo $saturday; ?>
<?php endif; ?>

<p>

<p>
<?php if (strlen(trim($sunday)) > 0) : ?>
<span> Sunday : </span>
<?php echo $sunday; ?>
<?php endif; ?>

<p>
