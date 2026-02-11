<?php
/**
 * @var string|null $title The webpage's title
 */
?>
    <title>{{ $title ?? 'Tempest' }}</title>
        
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script src="/assets/unpoly.min.js"></script>

    <link rel="icon" href="/favicon/favicon.ico">
    <link rel="stylesheet" :href="'/assets/main.css?dt=' . time()">
    <link rel="stylesheet" href="/assets/unpoly.min.css">
