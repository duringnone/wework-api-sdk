<?php

/**
 * Description of GetLoginInfoRsp
 *
 * @author jiang.ding
 */
namespace weworkapi\api\datastructure\serviceprovider;
use \weworkapi\utils\Utils;



class RegisterAuthUserInfo 
{
    public $email = null; // string
    public $mobile = null; // string
    public $userid = null; // string

    static public function ParseFromArray($arr)
    { 
        $info = new RegisterAuthUserInfo();

        $info->email = Utils::arrayGet($arr, "email"); 
        $info->mobile = Utils::arrayGet($arr, "mobile"); 
        $info->userid = Utils::arrayGet($arr, "userid"); 

        return $info;
    } 
}