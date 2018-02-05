<?php
/**
 *
 */
class Foo
{
    const BUSINESS_FEE = 0.2;
    const TAX = 0.7 + self::BUSINESS_FEE; // Not supported in php 5.5 or ealrier

    function __construct()
    {
        # code...
    }


}

echo Foo::TAX;

 ?>
