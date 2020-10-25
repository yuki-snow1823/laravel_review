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
  <table border="2">
    <th>タイトル</th>
    <th>内容</th>
    @foreach ($todos as $todo)
    <tr>
      <td><p>{{ $todo->title }}</p></td>
      <td><p>{{ $todo->context}}</p></td>
    <tr>
      @endforeach
  </table>

  {{-- 普通に出力される。親には出力される？ --}}
  @extends('layouts.footer')

  {{-- このページ内のlayoutの部分 --}}
  @section('test')
    <h1>テスト</h1>
    <h2>テスト！！</h2>
  @endsection

  <form action="/todo" method="POST">
    @csrf
    <input type="text" name="message">
    <input type="submit">
  </form>
</body>

</html>
