<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account; // Đảm bảo đã import
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class CustomerAuthController extends Controller
{
    public function showLoginForm() {
        return view('frontend.auth.customer_login');
    }

    public function showSignUpForm() {
        return view('frontend.auth.customer_signup');
    }

    public function login(Request $request) {
        // Xác thực dữ liệu đầu vào
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
    
        // Truy vấn tài khoản theo email
        $account = Account::where('email', $request->email)->first();
    
        // Kiểm tra xem tài khoản có tồn tại và mật khẩu có khớp không
        if ($account && Hash::check($request->password, $account->password)) {
            // Đăng nhập thành công
            Auth::login($account); // Sử dụng Auth để đăng nhập người dùng
    
            return redirect()->route('home')->with('success', 'Đăng nhập thành công');
        } else {
            // Đăng nhập thất bại
            return redirect()->back()->withErrors(['email' => 'Email hoặc mật khẩu không đúng']);
        }
    }
    

    public function signUp(Request $request) {
        // Xác thực dữ liệu đầu vào
        $request->validate([
            'email' => 'required|email|unique:accounts,email', // Đảm bảo tên bảng là "accounts"
            'password' => 'required|min:6|confirmed',
        ]);

        // Lưu thông tin vào bảng account
        Account::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Chuyển hướng hoặc trả về thông báo thành công
        return redirect()->route('customer.login')->with('success', 'Tài khoản tạo thành công');
    }
}
