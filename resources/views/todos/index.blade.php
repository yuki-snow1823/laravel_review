<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <h1>test</h1>
  <h2>{{ $todos[0]->title }}</h2>
  <h2>{{ $todos }}</h2>

  {{-- 普通に出力される。親には出力される？ --}}
  @extends('layouts.footer')

  {{-- このページ内のlayoutの部分 --}}
  @section('test')
    <h1>テスト</h1>
    <h2>テスト！！</h2>
  @endsection

  <form action="/todo" method="POST">
    @csrf
    <input type="text">
    <input type="submit">
  </form>
</body>

</html>
