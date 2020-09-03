$('body').on('change','input[name="warranty"]',function () {
    var n= $(this).val();
    if (n==1)
        $('.warranty-box').show();
    else
        $('.warranty-box').hide();
});



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