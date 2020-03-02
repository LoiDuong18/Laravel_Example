<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
  </head>
  <body>
    @extends('layout')

    @section('content')
    <style media="screen">
      .img{
        font-size: 50px;
      }
    </style>
      <h1>Welcome Come To</h1>

      <p>Dương Văn Lợi</p>

      <div class="class">
        <a href="https://www.facebook.com/Caythongcodon.danang/">Link</a>
      </div>
      <ul>
        <!-- @foreach($errors->all() as $e)
        <li>{{$e}}</li>
        @endforeach -->
      </ul>

    @endsection

  </body>
</html>
