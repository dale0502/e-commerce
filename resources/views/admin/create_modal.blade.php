  <!-- Modal -->
  <form action="{{ route('store') }}" method="post">
    @csrf
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">新增商品</h5>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="title">商品名稱</label>
                    <input type="text" class="form-control is-invalid" id="title" name="title" required> 
                  </div>
                  <div class="form-group">
                    <label for="content">商品描述</label>
                    <input type="text" class="form-control is-invalid" id="content" name="content" required>
                  </div>
                  <div class="form-group ">
                    <label for="price">價格</label>
                    <input type="number" class="form-control is-invalid" id="price" name="price" required>
                    <div class="invalid-feedback">
                        請輸入數字
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="price">數量</label>
                    <input type="number" class="form-control is-invalid" id="price" name="quantity" required>
                    <div class="invalid-feedback">
                        請輸入數字
                    </div>
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