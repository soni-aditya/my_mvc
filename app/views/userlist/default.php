<style>
    .heading{
        text-align: left !important;
    }
    li{
        text-align: left !important;
    }
</style>
<div class="content">
<h1 class="heading">User List</h1><br>
<ul>
    <?php
    $basket=My_Mvc::getInstance('basket');
    foreach ($basket->node as $key=>$value)
    {
?>

        <li>
            <?php
                echo $value;
            }
            ?>
        </li>

</ul>
</div>