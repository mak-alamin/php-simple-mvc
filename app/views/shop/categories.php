<h1> <?php echo $data['title']; ?> </h1>
<h2> Categories: </h2>

<ul>
<?php
    $cats = $data['cats'];

    foreach ($cats as $key => $value) {
        echo '<li><a href="#">' . $value . '</a></li>';
    }
?>
</ul>