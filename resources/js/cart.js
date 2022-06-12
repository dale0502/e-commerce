
function initCart(){
    return getCart()
}

function getCart(){
    return Cookies.get('cart') || {}
}

function saveCart(cart){
    Cookies.set('cart', cart)
}

function addProductCart(productId, quantity){
    var cart = getCart()
    var currentQuantity = parseInt(cart[productId]) || 0 
    var addQuantity = parseInt(quantity) || 0 
    var newQuantity = currentQuantity + addQuantity 
    cart[productId] = newQuantity
    saveCart(cart)
}

function alertProductQuantity(productId){
    var cart = getCart()
    var quantity = parseInt(cart[productId]) || 0 
    alert(quantity)
}

$("#addToCart").on('click', function(){
    var quantityInput = $("input[name='quantity']");

    // var quantity= $("input:text").attr("name");
    if(quantityInput){
        addProductCart(productId, quantityInput.val())
        alertProductQuantity(productId)
        // var quantity = parseInt(Cookies.get('quantity')) || 0 ;
        // var addQuantity = parseInt(quantityInput.val()) || 0 ;
        // var newQuantity = quantity + addQuantity ;
        // Cookies.set('quantity', newQuantity);
        // alert('Add'  + ''  + newQuantity);
    }
   
})
