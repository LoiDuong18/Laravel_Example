<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Customers</title>
  </head>
  <body>
    @extends('layout')

    @section('content')
        <h1>Customers</h1>

        <ul>
          @foreach ($customers as $customer)
          <li>{{ $customer }}</li>
          @endforeach
        </ul>
    @endsection

  </body>
</html>
