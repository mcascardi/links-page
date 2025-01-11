<?php

class Init {

    public function __construct() {
        // Constructor code
        require_once 'links-database.php';
    }

    public function load_classes() {
        $class_instances = [];

        $class_instances['links'] = new Links_Database('db.json');

        return $class_instances;
    }
}
