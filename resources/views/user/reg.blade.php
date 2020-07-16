<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>注册</title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
@if(!empty(session('msg')))
    <div>
        <h3>{{session('msg')}}</h3>
    </div>
@endif
<form  action="/user/regdo"  method="post">
    <div class="form-group">
        <label for="name">用户名</label>
        <input type="text" class="form-control" name="user_name" placeholder="请输入要注册的用户名">
    </div>
    <div class="form-group">
        <label for="name">邮箱</label>
        <input type="email" class="form-control" name="email" placeholder="请输入邮箱">
    </div>
    <div class="form-group">
        <label for="name">密码</label>
        <input type="password" class="form-control" name="password" placeholder="请输入密码">
    </div>
    <div class="form-group">
        <label for="name">确认密码</label>
        <input type="password" class="form-control" name="passwordked" placeholder="请输入确认密码">
    </div>
    <input type="submit" class="btn btn-primary"
           value="注册">
    已有账号，前往<a href="{{url('/user/login')}}">登录</a>
</form>
</body>
</html>
