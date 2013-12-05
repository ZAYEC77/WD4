<?php 
function __autoload($class_name) {
    require ucfirst($class_name) . '.php';
} ?>