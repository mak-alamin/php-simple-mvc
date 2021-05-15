<?php

function dprintr($data)
{
    echo "<pre>";
    die(print_r($data));
    echo "</pre>";
}