<?php

namespace AppBundle\Utils;

class Slugger
{
    public function slug($string)
    {
        return preg_replace(
            '/[^a-z0-9]/', '-', strtolower(trim(strip_tags($string)))
        );
    }
}