$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function(){

    $('.addcart').dblclick(function(event){
        alert("show cart");
        window.location.href = "/shoppingcart";
    });

    $('.addcart').click(function(event){

        var productId = $(this).attr('data-id');
        var userId = $(this).attr('data-userid');
        if (userId == '' || !userId) {
            alert('You must be logged in to add to your cart');
        }
        else {

            var myData = {
                productId: productId,
                userId: userId
            };
            $.ajax({
                type: 'POST',
                data: myData,
                url: '/addcart',
                dataType: 'json',
                success: function (data) {
                    $('#cartcount').text(data['itemCount']);
                },
                error: function (xhr, status, error) {
                    alert('add_cart error=' + xhr.responseText);
                    var err = eval("(" + xhr.responseText + ")");
                    alert(err.Message);
                }
            });

        };
    });

});