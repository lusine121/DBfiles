<?php
function imageRequired()
{
    foreach ($_FILES as $image) {
        if ($image['size'] > 0) {
            return true;
        }
    }

    return false;
}



function required($input){
    if(trim(strlen($input)) > 0) return true;

    return false;
}