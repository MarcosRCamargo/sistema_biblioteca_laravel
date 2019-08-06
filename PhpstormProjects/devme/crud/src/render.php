<?php
function render($content, $templete, array $data =[]){
    $content = __DIR__ . '/../templetes/'. $content . '.tpl.php';
    return include __DIR__ . '/../templetes/'. $templete . '.tpl.php';

}