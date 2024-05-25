<?php
// function to fileter login data
function filteration($data)
{
    global $con;
    return  mysqli_real_escape_string($con, $data);
}

// function to print array
function pp($arr)
{
    echo "<pre>";
    print_r($arr);
    exit;
}
