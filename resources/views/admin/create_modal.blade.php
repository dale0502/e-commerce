  <!-- Modal -->
  <form action="{{ route('admin::store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">新增商品</h5>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="title">商品名稱</label>
                    <input type="text" class="form-control" id="title" name="title"> 
                    @if($errors->has('title'))
                        <div class="error">{{ $errors->first('title') }}</div>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="content">商品描述</label>
                    <input type="text" class="form-control" id="content" name="content">
                    @if($errors->has('content'))
                      <div class="error">{{ $errors->first('content') }}</div>
                    @endif
                  </div>
                  <div class="form-group ">
                    <label for="price">價格</label>
                    <input type="number" class="form-control" id="price" name="price">
                    @if($errors->has('price'))
                      <div class="error">{{ $errors->first('price') }}</div>
                    @endif
                  </div>
                  <div class="form-group ">
                    <label for="quantity">數量</label>
                    <input type="number" class="form-control" id="quantity" name="quantity">
                    @if($errors->has('quantity'))
                      <div class="error">{{ $errors->first('quantity') }}</div>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="image" class="block text-sm leading-5 font-medium text-gray-700" >
                      圖片上傳
                      <input type="file" name="image" data-traget="preview_image" accept="image/*" onchange="document.getElementById('preview_img').src = window.URL.createObjectURL(this.files[0])">
                    </label>
                    @if($errors->has('image'))
                      <div class="error">{{ $errors->first('image') }}</div>
                    @endif
                  </div>
                  <div class="text-center">
                      <img id="preview_img" src="https://via.placeholder.com/400x300" alt="" width="300" height="400" >        
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
