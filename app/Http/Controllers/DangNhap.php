<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DangNhapRequest;

class DangNhap extends Controller
{
    //
    public function create()
    {
      return view('login');
    }
    public function store(DangNhapRequest $request)
    {
      //   $validatedData = $request->validate([
      //     'email' => 'required|unique:posts|max:255',
      //     'password' => 'required',
      // ]);
      $validated = $request->validated();
    }   
}
