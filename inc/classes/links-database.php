<?php
/**
 * Creating a little ad-hoc database using json files
 */

class Links_Database {

    /**
     * Specify here all the possible db "tables" before loading, links is the
     * primary table used to generate the page content. Other tables will
     * require their own behavior implementations explicitly defined.
     */
    var $db;
    var $links;

    // Optional tables
    var $page;
    var $theme;
    var $options;

    public function __construct($db) {
        $this->load_file($db);

        $this->load_data();
    }

    function get_db_file_path($db_file = null) {
        if (! $db_file) {
            trigger_error('No db file name was provided');
        }
        
        $db_file_path = JSON_PATH . DIRECTORY_SEPARATOR . $db_file;

        if (!file_exists($db_file_path)) {
            trigger_error("The database file {$db_file_path} does not exist");
            return null;
        }

        return $db_file_path;
    }

    function link_tags() {
        foreach ($this->links as $link) {
            $links_tags[] =  sprintf(
                '<li><a href="%s">%s</a></li>',
                $link->href,
                $link->text
            );
        }

        return sprintf('<ul>%s</ul>', implode('', $links_tags) );
    }


    function load_data() {
        if (empty($this->db->files)) {
            return;
        }

        foreach ($this->db->files as $db_file) {
            // Should be loading...
            echo('<!-- '. $db_file . ' loading -->');
            $this->load_file($db_file);
        }
    }

    function load_file($db_file) {
        $db_file_path = $this->get_db_file_path($db_file);
        if (empty($db_file_path)) {
            return;
        }
        $json = json_decode(file_get_contents($db_file_path)) ?: false;

        if (!$json) {
            trigger_error('The database file did not contain valid json');
        }

        // set the instance variable name from the json file name
        $dbname = str_replace('.json', '', basename($db_file));
        $this->$dbname = $json;
    }
}
