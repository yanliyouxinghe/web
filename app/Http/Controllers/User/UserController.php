<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\User;
class UserController extends Controller
{

        /*
         * 登录页面
         */
        public function login(){
            return view('user.login');
        }
        /*
         *登录
         * */
        public function logindo(){
            $user_name = request()->input('user_name');
            $password = request()->input('password');
            if(empty($user_name) || empty($password)){
                echo "<script>alert('必填选项不能为空...');location.href='/user/login'</script>";
            }

            $uModel = new User();
            $ret =  $user = $uModel->where('user_name',$user_name)->first();
            if($ret){
                if(md5($password) != $ret->password){
                    echo "<script>alert('密码不正确...');location.href='/user/login'</script>";
                }else{
                    echo "<script>alert('登录成功...');location.href='/user/create'</script>";
                }
            }else{
                echo "<script>alert('此用户不存在...');location.href='/user/login'</script>";
            }
        }





        /*
        *注册页面
         */
        public function reg(){
            return view('user.reg');
        }



        /*
          *  注册
         */
        public function regdo(Request $request){
            $user_name = $request->input('user_name');
            $email = $request->input('email');
            $password = $request->input('password');
            $passwordked = $request->input('passwordked');


            if(empty($user_name) || empty($email) || empty($password) || empty($passwordked)){
                echo "<script>alert('必填选项不能为空...');location.href='/user/reg'</script>";
            }

            if($password != $passwordked){
               echo "<script>alert('请确保密码和确认密码一致...');location.href='/user/reg'</script>";
            }


            $uModel =new User();
            $user = $uModel->where('user_name',$user_name)->first();
            $email1 = $uModel->where('email',$email)->first();
            if($user){
                echo "<script>alert('此用户已被注册...');location.href='/user/reg'</script>";
            }

            if($email1){
                echo "<script>alert('此邮箱已被注册...');location.href='/user/reg'</script>";
            }
            $len = strlen($password);
            if($len < 6){
                echo "<script>alert('密码不能小于六位...');location.href='/user/reg'</script>";
            }

            $data = [
                'user_name'=>$user_name,
                'email'=>$email,
                'password'=>md5($password),
            ];
            $rest = $uModel->insert($data);
            if($rest){
                echo "<script>alert('注册成功，即将为您跳转...');location.href='/user/login'</script>";
            }else{
                echo "<script>alert('注册失败...');location.href='/user/reg'</script>";
            }






        }
}
