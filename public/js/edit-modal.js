/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************!*\
  !*** ./resources/js/edit-modal.js ***!
  \************************************/
$(document).ready(function () {
  $('.edit-btn').click(function (event) {
    event.preventDefault();
    var url = $(this).attr('href');
    $("#modal-global").modal('show');
    $.ajax({
      url: url,
      type: 'GET',
      dataType: 'json'
    }).done(function (response) {
      // console.log(response);
      $("#edit-title").val(response.title);
      $("#edit-content").val(response.content);
      $("#edit-price").val(response.price);
      $("#edit-quantity").val(response.quantity);
    });
  }); // 點選取消隱藏modal

  $("#hide").click(function () {
    $('#modal-global').modal('hide');
  });
});
/******/ })()
;