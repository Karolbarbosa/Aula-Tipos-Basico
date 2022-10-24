<?php

$arquivo = true;
$arquivo2 = false;

$resulto = $arquivo && $arquivo2;
echo $result0, "<br>";

$arquivo3 = true;
$arquivo4 = false;

$resulto2 = $arquivo3 || $arquivo4;
echo $resulto2, "<br>";

$arquivo5 = true;
$arquivo6 = false;

$resulto3 = !$arquivo5;
echo $resulto3;