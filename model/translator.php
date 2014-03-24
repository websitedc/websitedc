<?php
include_once 'vtree/vtree.php';
include_once 'model/common/validators.php';
/**
 * Description of translate
 *
 * @author laurent
 */
class translator {
    private $vtree ;
    private $language ;
    private $possible_lang = array();
    
    public function __construct(){
        $this->vtree = new vtree();
        $this->language = "FR";
        $this->possible_lang = $this->vtree->get("language");
    }
    public function change_language($new_language) {
        $this->language = $new_language;
    }
    
    public function translate($key) {
        $helper = "language." . $this->language . '.' . $key;
        return $this->vtree->get($helper);
        
    }
    
    public function get_possible_lang() {
        return $this->possible_lang;
        
    }
    
    public function get_vtree() {
        return $this->vtree;        
    }
    
    public function get_language() {
        return $this->language;        
    }
}
