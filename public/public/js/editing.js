$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function(){

    $('.addcart').dblclick(function(event){
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

                }
            });

        };
    });

    $('#NameSearch').change(function(event){
        var userId = $(this).val();
        if(userId > 0) {

            window.location.href = "/xy/admin/edituser/" + userId;
        }
    });

    $('#ConfigSearch').change(function(event){
        var userId = $(this).val();
        if(userId > 0) {

            window.location.href = "/xy/admin/configuser/" + userId;
        }
    })

    $('.quantity').change(function(event){
        var itemId = $(this).attr('data-id');
        var quantity = $(this).val();
        var myData = {
            itemId: itemId,
            quantity:quantity
        };

        $.ajax({
            type: 'POST',
            data: myData,
            url: '/changecartquantity',
            dataType: 'json',
            success: function (data) {
                window.location.reload(true);
            },
            error: function (xhr, status, error) {
                alert('add_cart error=' + xhr.responseText);
                var err = eval("(" + xhr.responseText + ")");
                alert(err.Message);
            }
        });
    });

});

function updateAddress(sel)
{
    if( sel.value != '' ){
        window.location.href = "/changeshippingaddress/"+sel.value;
    }
}

function updateyoutube(src)
{

   // var vidsrc = "https://www.youtube.com/embed/"+src+"?rel=0";
   // alert(vidsrc);
    var iframe = document.getElementById('video_iframe');
    iframe.src = "https://www.youtube.com/embed/"+src+"?rel=0";

}

function updateyouvimeo(src)
{

    // var vidsrc = "https://www.youtube.com/embed/"+src+"?rel=0";
    // alert(vidsrc);
    var iframe = document.getElementById('video_iframe');
    iframe.src = "https://player.vimeo.com/video/"+src+"?color=e6d9c3&byine=0&portrait=0";

}

function editBoutique(sel){
    var value = sel.value;
    window.location = "/store/edit/"+value;
}

function onekind(sel){
    var value = sel.value;
    window.location = '/onekind/sub/'+value;
}

function multikind(sel){
    var value = sel.value;
    window.location = '/multikind/sub/'+value;
}