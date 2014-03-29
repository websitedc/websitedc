<?php

class validators {

    public function lang_validator($lang) {
        return preg_match("/^[a-zA-Z]{2}$/", $lang);
    }

}
