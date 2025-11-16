<?php
declare(strict_types=1);

function lw(string $text): void {
    echo $text . PHP_EOL;
}

function ld(string $text): void {
    exit(lw($text));
}