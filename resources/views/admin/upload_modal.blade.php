<!-- Modal -->
<form id="upload-image" method='post' action='' enctype="multipart/form-data">
    @csrf
    <div id="uploadModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">上傳圖片</h5>
                </div>        
                <div class="modal-body">
                    <input type="hidden" id="csrf_token" name="_token" value="{{ csrf_token() }}">
                    <input type="file" id="input-id" name="image" accept="image/*">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="hide-btn">Close</button>
                </div>
            </div>
        </div>
    </div>
</form>