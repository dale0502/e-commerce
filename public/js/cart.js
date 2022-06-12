/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/cart.js ***!
  \******************************/
$("#addToCart").on('click', function () {
  var quantityInput = $("input[name='quantity']"); // var quantity= $("input:text").attr("name");

  if (quantityInput) {
    var quantity = parseInt(Cookies.get('quantity')) || 0;
    var addQuantity = parseInt(quantityInput.val()) || 0;
    var newQuantity = quantity + addQuantity;
    Cookies.set('quantity', newQuantity);
    alert('Add' + '' + newQuantity);
  }
});
/******/ })()
;