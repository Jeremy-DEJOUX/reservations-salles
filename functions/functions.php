<?php
    function print_r_pre($array, $name) {
        echo '<pre>' . $name . ':<br />';
        print_r($array);
        echo '</pre>';
    }
    function var_dump_pre($array, $name) {
        echo '<pre>' . $name . ':<br />';
        var_dump($array);
        echo '</pre>';
    }
    function randomRgb() {
        $r = rand(0, 255);
        $g = rand(0, 255);
        $b = rand(0, 255);
        // echo $r . ' ' . $g . ' ' . $b;
        $return = 'rgb(' . $r . ', ' . $g . ', ' . $b . ')';
        return $return;
    }