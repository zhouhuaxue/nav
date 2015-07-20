<?php
/**
 * Created by PhpStorm.
 * User: xue
 * Date: 15-7-21
 * Time: 上午7:23
 */
?>

<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./web/common.css">

</head>
<body>


<?php
 include('header.html.php');
?>

<ul>

    <?php
    foreach($arrPortal as $key=>$val):
        ?>
        <li><?php echo $key; ?>|
        <?php
        foreach($val as $k=>$v):
            ?>
            <a href ="<?php echo $v; ?>"> <?php echo $k;?></a>
        <?php  endforeach;?>
        </li>
    <?php  endforeach;?>
</ul>
</body>