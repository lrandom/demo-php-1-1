<?php

class KhuonBanh
{
    var $hinhDanh;
    static $chatLieuKhuon;

    static function ducBanh()
    {

    }
}

$khuonhBanh = new KhuonBanh();
$khuonhBanh->hinhDanh;
$khuonhBanh->chatLieuKhuon;

KhuonBanh::$chatLieuKhuon;
KhuonBanh::ducBanh();