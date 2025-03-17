<?php
namespace app\services\josh;


class Base
{

    /**
     *  BC Math 扩展-------------------------
     * 
     *  bcadd() — 高精度加法
     *  bcsub() — 高精度减法
     *  bcmul() — 高精度乘法
     *  bcdiv() — 高精度除法
     *  bcmod() — 高精度取余
     *  bcpow() — 高精度幂运算
     *  bcsqrt() — 高精度平方根
     *  bcscale() — 设置默认的运算精度
     * 
     */
    


    public function __construct()
    {

    }


    public static function getUUID()
    {
        return sprintf(
            '%04x%04x%04x%04x%04x',
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0x0fff) | 0x4000,
            mt_rand(0, 0x3fff) | 0x8000
        ) . substr(md5(uniqid(mt_rand(), true)), 0, 12);
    }



}