<?php

/**
 * Description of vtree
 *
 * @author laurent
 * 
 * Creates a vtree for accessing all the sites constants
 * $vtree : multiple tree
 */
class vtree {

    public $vtree = array();
    private $directory = "vtree/vconf/";

    public function __construct() {
        $files = $this->get_all_files();
        $this->read_files($files);
    }

    public function get($key) {
        $helper = $this->vtree;
        $key = explode('.', $key);
        foreach ($key as $node) {
            if (array_key_exists($node, $helper)) {
                $helper = $helper[$node];
            } else {
                return FALSE;
            }
        }
        return $helper;
    }

    public function set($key, $value) {
        $helper =& $this->vtree;
        $key = explode('.', $key);
        foreach ($key as $node) {
            if (array_key_exists($node, $helper)) {
                $helper =& $helper[$node];
            } else {
                return FALSE;
            }
        }
        $helper = $value;
    }

    private function get_all_files() {
        $files = array();
        $dir = opendir($this->directory);
        $file = '';
        $filepath = '';

        while (($file = readdir($dir)) !== false) {
            $filepath = $this->directory . $file;
            if (is_file($filepath)) {
                $files[] = $filepath;
            }
        }
        closedir($dir);
        return $files;
    }

    private function read_files($files) {
        foreach ($files as $path) {
            $this->read_file($path);
        }
    }

    private function read_file($file) {
        $handle = fopen($file, "r");
        $helper = '';
        $parsed_file = explode('.', explode('/', $file)[2]);
        $key = '';
        unset($parsed_file[count($parsed_file) - 1]);
        $this->populate_nodes($parsed_file, null, 0);
        while (!feof($handle)) {
            $helper = \fgets($handle);
            $key = explode('=', $helper);
            $this->insert_into_tree($parsed_file, $key[0], $key[1]);
        }
        fclose($handle);
    }

    private function insert_into_tree($nodes_array, $key, $value) {
        $subtree = & $this->vtree;
        foreach ($nodes_array as $node) {
            if (array_key_exists($node, $subtree)) {
                $subtree = & $subtree[$node];
            } else {
                return FALSE;
            }
        }
        $subtree[$key] = $value;
    }

    private function populate_nodes($nodes_array) {
        $subtree = & $this->vtree;

        foreach ($nodes_array as $key) {
            if (array_key_exists($key, $subtree)) {
                /* $key exists */
                $subtree = & $subtree[$key];
            } else {
                /* adding $key */
                $subtree[$key] = array();
                $this->populate_nodes($nodes_array);
                break;
            }
        }
    }

    private function vtree_search($key, $subtree) {
        //TODO
    }

}
