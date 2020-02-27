<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
  public function list()
  {
    $customers = [
      'haha',
      'haha',
      'haha',
      'Dương Văn Lợi',
      'Thái Bình Dương'
    ];
    return view('internals.customers', [
    'customers' => $customers,
    ]);
  }
  public function index($site)
  {
    return ["site" =>$site];
  }
}
