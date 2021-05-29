<?php
// Autor: Ana 6d2 Ruiz <ana6d2@gmail.com>
// El nombre por defecto es Mundo
$nombre = isset($argv[1]) ? $argv[1] : "Mundo";
@print "Hola, {$nombre}\n";