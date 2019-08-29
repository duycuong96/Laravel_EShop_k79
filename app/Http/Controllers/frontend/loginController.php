<?php

namespace App\Http\Controllers\frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Auth;
class loginController extends Controller
{
    function getLogin() { 
        return view('backend.login');

    }
    function postLogin(LoginRequest $r)
    {
        //lấy dữ liệu từ ô input
        $email=$r->email;
        $password=$r->password;
        // đăng nhập với trường email=$email , trường password=$password
        //mật khẩu phải được mã hoá bằng bcrypt()

      if (Auth::attempt(['email' => $email, 'password' => $password])) {
          return redirect('admin');
      }
      else
      {
          return redirect()->back()->withErrors(['email'=>'Tài khoản hoặc mật khẩu không chính xác!'])->withInput();
      }
       

    }
}
