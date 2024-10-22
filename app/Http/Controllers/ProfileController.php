<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        // Lấy thông tin profile của người dùng hiện tại
        $user = auth()->user();

        // Trả về view hiển thị thông tin profile
        return view('profile.show', compact('user'));
    }

    public function edit()
    {
        // Lấy thông tin profile của người dùng hiện tại
        $user = auth()->user();

        // Trả về view hiển thị form chỉnh sửa profile
        return view('profile.edit', compact('user')); 
    }

    public function update(Request $request)
    {
        // Validate dữ liệu từ form
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . auth()->id(),
            // ... các rule validation khác ...
        ]);

        // Cập nhật thông tin profile
        $user = auth()->user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        // ... cập nhật các trường khác ...
        $user->save();

        // Chuyển hướng về trang profile hoặc trang khác
        return redirect()->route('profile.show')->with('success', 'Profile updated successfully!');
    }
}