<?php

class validators {

    public function lang_validator($lang) {
        $pattern = "[a-z][A-Z]{2}";
        if (!preg_match($pattern, $lang)) {
            return FALSE;
        }
    }

}
