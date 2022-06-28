  <!-- Modal -->
  <form action="{{ route('store') }}" method="post">
    @csrf
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">新增商品</h5>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="title">商品名稱</label>
                    <input type="text" class="form-control" id="title" name="title"> 
                  </div>
                  <div class="form-group">
                    <label for="content">商品描述</label>
                    <input type="text" class="form-control" id="content" name="content">
                  </div>
                  <div class="form-group ">
                    <label for="price">價格</label>
                    <input type="number" class="form-control" id="price" name="price">
                  </div>
                  <div class="form-group ">
                    <label for="price">數量</label>
                    <input type="number" class="form-control" id="price" name="quantity">
                  </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </div>
    </div>
</form>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

