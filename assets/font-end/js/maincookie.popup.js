cookie_popup = (function() {
    if ($.cookie('cookie_popup') == undefined) {
        $('.cookie-popup-wrap').fadeIn(600);
        $.cookie('cookie_popup',true,{ expires: 0.0005 }); //Thời gian cookie bị xóa. Giá trị expires là ngày
    };

    $('#closepopup').click(function (e) {
        e.preventDefault();
        $('.cookie-popup-wrap').fadeOut(600);
    });

    //if mask is clicked
    $('.mask').click(function () {
        $(this).hide();
        $('.cookie-popup-wrap').hide();
    });
    
    
    //popup hien thi sau khi dang ky mail
    if ($.cookie('cookie_popup') == undefined) {
        $('.cookie-popup-wrap-wp').fadeIn(600);
        $.cookie('cookie_popup',true,{ expires: 0.0005 }); //Thời gian cookie bị xóa. Giá trị expires là ngày
    };

    $('#closepopup-wp').click(function (e) {
        e.preventDefault();
        $('.cookie-popup-wrap-wp').fadeOut(600);
    });

    //if mask is clicked
    $('.mask-wp').click(function () {
        $(this).hide();
        $('.cookie-popup-wrap-wp').hide();
    });
});

setTimeout(function() {
    cookie_popup();
}, 1000);