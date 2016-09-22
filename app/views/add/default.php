<?php
    $basket=My_Mvc::getInstance('basket');
?>
<style>
    h2{
        background-color: #449d44;
    }
    .content{
        background-color: #985f0d;
        color: maroon;
    }
    .result{
        color: chocolate;
    }
</style>
<h2>This is Addition Page</h2>
<p class="content">You have given the numbers <?php echo $basket->get('num_one'); ?> and <?php echo $basket->get('num_two'); ?></p>
<p class="result">Their sum is <?php echo $basket->get('sum'); ?></p>