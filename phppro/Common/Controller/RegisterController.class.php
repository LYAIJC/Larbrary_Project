<?php
namespace Common\Controller;
use Base\BaseController;
use Common\Model\RegisterModel;


final class Register extends BaseController{

    //显示注册用户界面
    public function register(){
        $this->smarty->display("register.html");
    }

    //Json添加用户接口
    public function insert(){
       
        $reguser['id']      =  $_POST['userId'];
        $reguser['pwd']     =  md5($_POST['password']);
        $reguser['name']    =  $_POST['name'];
        $reguser['classname']   =  $_POST['classname'];
        $reguser['major']   =  $_POST['major'];		
        $reguser['status']  =  1 ;

        $registerModel = new RegisterModel;

        if(in_array("",$reguser)){
            $this->sendJsonMessage("请将信息填写完整",1);
        }

        if($registerModel->rowCount("id={$reguser['id']}")){
            $this->sendJsonMessage("该用户帐号已存在",1);
        }

        if($registerModel->insert($reguser)){
            $this->sendJsonMessage("添加用户信息成功",0);
        }else{
            $this->sendJsonMessage("添加用户信息失败",1);
        }
    }

   
}