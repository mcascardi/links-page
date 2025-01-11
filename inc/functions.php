<?php


function theme_assets_head() {
    // "Enqueue" stylesheets  and javascript for head tag
    ?>
    <link rel="stylesheet" href="./css/main.css">

    <?php
}

function theme_assets_footer() {
    // Script and style tags for the footer
}

function page_title() {
   return 'Page Title Test';
}

function page_header() {
    return '<header>Page Header Test</header>';
}

function page_footer() {
    return '<footer>Page Footer Test</footer>';
}

function get_json_file($filename, $decode = true) {
    $file_path = JSON_PATH . DIRECTORY_SEPARATOR . $filename;
    if (!file_exists($file_path)) {
        return;
    }
}
