<?php

    function totalOvers($ball_number) {
        $round = ceil($ball_number/6) - 1;
        echo base_convert($ball_number + $round, 10, 7);
    }

    totalOvers(2400);
?>