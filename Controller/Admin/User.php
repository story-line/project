<?php
/**
 * Created by PhpStorm.
 * User: msi-pc
 * Date: 2018/6/9
 * Time: 9:21
 */

namespace Controller\Admin;

use Controller;
use Model\Database;

class User extends Controller
{
    public function login()
    {
        $this->display('Admin/User/login');
    }

    public function DoLogin()
    {

    }

    public function register()
    {
        echo 'this is register action';
    }
}