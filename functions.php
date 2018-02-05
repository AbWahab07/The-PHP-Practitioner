<?php
    function dd($value)
    {
        echo '<pre>';
        die(var_dump($value));
        echo '</pre>';
    }

    function verify_age($age)
    {
        if ($age > 21) {
            return true;
        }
        else {
            return false;
        }
    }

?>
