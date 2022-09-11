<?php

namespace App\Services;

class TimesServices {

    public function showTimeNow(){
        return date("H:i");
    }
}