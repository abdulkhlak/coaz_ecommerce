$('body').on('change','input[name="warranty"]',function () {
    var n= $(this).val();
    if (n==1)
        $('.warranty-box').show();
    else
        $('.warranty-box').hide();
});
// if($('input[name="warranty"]').val()==1)
//     $('.warranty-box').show();



// schedule date scripts
var sale_schedule = document.getElementById('sale_schedule');

sale_schedule.onclick = function() {
    var div = document.getElementById('sale_price_date');
    if (div.style.display !== 'none') {
        div.style.display = 'none';
    }
    else {
        div.style.display = 'block';
    }
};



$(".removeproductimage").click(function(e) {
    e.preventDefault();
    var deleted_id = $(this).data('id');
    var hidden_data = $("#deletect_image").val();
    debugger;
    if (hidden_data == '')
        $("#deletect_image").val(deleted_id);
    else
        $("#deletect_image").val(hidden_data + ',' + deleted_id);
    $(this).parent().remove();
});
