function addToCart(itemId){
    console.log("js - addToCart");
    $.ajax({
        type: 'POST',
        url: "/cart/addtocart/"+itemId+'/',
        dataType : 'json',
        success: function (data) {
            if(data['success']){
                $('#cartCntItems').html(data['cntItems']);

                $('#addCart_'+itemId).hide();
                $('#removeCart_'+itemId).show();
            }
        },
        error: function (request, status, error) {
            console.log(request.responseText);
        }
    })
}