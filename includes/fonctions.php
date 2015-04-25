<?php
function genererGrille()
{
    $nombres = array();
    while (count($nombres) < 6) {
        $nombre = rand(1, 49);
        // dedoublonnage
        if (!in_array($nombre, $nombres)) {
            $nombres[] = $nombre;
        }
    }
    // trie
    sort($nombres);
    return $nombres;
}
