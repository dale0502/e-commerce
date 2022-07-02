<!-- EditModal -->
<form action="/admin/update" method="post">
    @csrf
    @method('PUT')
    <div class="modal fade" id="modal-global" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <input type="hidden" name="id"  id="edit-id">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">編輯商品</h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">商品名稱</label>
                        <input type="text" class="form-control" id="edit-title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="content">商品描述</label>
                        <input type="text" class="form-control" id="edit-content" name="content">
                    </div>
                    <div class="form-group ">
                        <label for="price">價格</label>
                        <input type="number" class="form-control" id="edit-price" name="price">
                    </div>
                    <div class="form-group ">
                        <label for="quantity">數量</label>
                        <input type="number" class="form-control" id="edit-quantity" name="quantity">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="hide">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>
