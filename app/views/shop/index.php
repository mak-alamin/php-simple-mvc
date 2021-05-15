<h1> <?php echo $data['title']; ?> </h1>
<h2> Products: </h2>

<ul>
<?php
    $products = $data['products'];

    foreach ($products as $key => $value) {
        echo '<li>' . $value . '</li>';
    }
?>
</ul>