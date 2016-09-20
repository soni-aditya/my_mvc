<?php
    $basket=My_Mvc::getInstance('basket');
?>
<h1>This is Addition Page</h1>
<p>You have given the numbers <?php echo $basket->get('num_one'); ?> and <?php echo $basket->get('num_two'); ?></p>
<p>Their sum is <?php echo $basket->get('sum'); ?></p>