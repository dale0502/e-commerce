@extends('layouts.app')

@section('content')
    <h1>Admin</h1>
    <div ><a class="btn btn-primary" href="{{ route('create')}}" data-toggle="modal" data-target="#exampleModalCenter">新增商品</a></div>
   <table>
       <thead>
           <tr>
               <td>產品名稱</td>
               <td>產品描述</td>
               <td>價格</td>
               <td>數量</td>
           </tr>
       </thead>
       <tbody>
            @foreach ($products as $product)
                <tr>  
                    <td>{{  $product->title }}</td>
                    <td>{{  $product->content }}</td>
                    <td>{{  $product->price }}</td>
                    <td>{{  $product->quantity }}</td>
                    <td><a href="{{ route('edit', $product->id)}}">edit</a></td>
                    
                </tr>
            @endforeach
       </tbody>
   </table>

   @include('admin.create_modal')
@endsection