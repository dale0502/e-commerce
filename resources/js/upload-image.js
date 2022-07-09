$(document).ready(function () {


    $('.upload-btn').click(function(event) {
        // alert("123");
        event.preventDefault();

        // alert(111);
        var url = $(this).attr('href');

        var id = $(this).data('id');

        $("#uploadModal").modal('show');

        var $el1 = $("#input-id");
        $el1.fileinput({
            allowedFileExtensions: ['jpg', 'png', 'gif'],
            uploadUrl: "/admin/file-upload-batch/" + id,
            uploadExtraData:{'_token':$('#csrf_token').val()},
            uploadAsync: true,
            deleteUrl: "/site/file-delete",
            showUpload: true, // hide upload button
            overwriteInitial: false, // append files to initial preview
            minFileCount: 1,
            maxFileCount: 5,
            browseOnZoneClick: true,
            initialPreviewAsData: true,
        }).on('filebatchuploadsuccess', function(event, data) {
            setTimeout(()=>{
                location.reload(true);
            },1000);
        });
        
    });

    // 點選取消隱藏modal
    $("#hide-btn").click(function(){
        $('#uploadModal').modal('hide')
    })
});