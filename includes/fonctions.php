<?php
function genererGrille()
{
    $nombres = array();
    while (count($nombres) < 6) {
        $nombres[] = rand(1, 49);
    }
    return $nombres;
}
