@extends('admin.index')
@section('content')
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
<div style="display: flex; justify-content: space-between;">
    <h2 class="title-5 m-b-35 bg-primary">Danh sách sản phẩm </h2>
  
</div>
<div style="display: flex; justify-content: space-between;">
    <h3>Tổng tiền: <b class="text-danger">{{($total)}} vnĐ</b></h3>

</div>
<table class="table table-data2">
    <thead>
        <tr>
            <th>...</th>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá </th>
            <th>Tổng tiền</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $book)
        @foreach ($products as $item)
            @if ($book->idProduct==$item->id)
            <tr class="tr-shadow">
                <td>{{$book->id}}</td>
                <td><b>{{$item->name}}</b></td>
                <td><b class="text-danger">{{$book->amount}}</b></td>
                <td><b class="text-primary">{{ number_format($item->price)}}</b>vnĐ</td>
                <td><b class="text-warning">{{ number_format($item->price * $book->amount)}} vnĐ</b></td>
            </tr>
            <tr class="spacer"></tr>
            @endif
        @endforeach
        @endforeach
    </tbody>
</table>

<form method="POST" action="" id="formDelete">
    @csrf @method('DELETE')
</form>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
@stop();

