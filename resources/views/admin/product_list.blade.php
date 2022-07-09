@extends('layouts.admin')

@section('content')
    <div class="container-fluid px-4">
        <div class="mb-2 mt-2 d-flex flex-row-reverse">
            <button class="btn btn-outline-dark" data-toggle="modal" data-target="#createModal">
                新增產品
            </button>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                產品列表
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>產品序號</th>
                            <th>產品圖片</th>
                            <th>產品名稱</th>
                            <th>產品描述</th>
                            <th>價格</th>
                            <th>數量</th>
                            <th>功能</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td><img src="{{ $product->image_url }}" alt="" width="40" height="50">
                                </td>
                                <td>{{ $product->title }}</td>
                                <td>{{ $product->content }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>
                                    <a href="{{ route('admin::edit', $product->id) }}"
                                        class="btn btn-outline-dark edit-btn"> <i class="fa-regular fa-pen-to-square">
                                        </i></a>
                                    <a href="{{ route('admin::destroy', $product->id) }}" class="btn btn-outline-dark"><i
                                            class="fa-regular fa-trash-can"></i></a>
                                    <!-- 圖片上傳 -->
                                    <a href="{{ route('admin::upload-modal', $product->id) }}"
                                        class="btn btn-outline-dark upload-btn" data-id="{{ $product->id }}"><i
                                            class="fa fa-upload"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    @include('admin.create_modal')
    @include('admin.edit_modal')
    @include('admin.upload_modal')
@endsection

@section('script')
    <script type="text/javascript">
        @error('title')
            $('#createModal').modal('show');
        @enderror
    </script>
    <script src="{{ mix('/js/edit-modal.js') }}"></script>
    <script src="{{ mix('/js/upload-image.js') }}"></script>
@endsection
