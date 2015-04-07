/**
 * Created by tranngoclam1909 on 4/2/2015.
 */

function addLoadEvent(func) {
    if (document.readyState === 'complete') {
        func();
    } else {
        var oldonload = window.onload;
        if (typeof window.onload != 'function') {
            window.onload = func;
        } else {
            window.onload = function () {
                if (oldonload) {
                    oldonload();
                }
                func();
            }
        }
    }
}


addLoadEvent(function () {
    $('#close-ol-fr-banner').on('click', function () {
        $('#ol-fr-banner-wrapper').css('height', '0px');
        $.ajax({
            url: '/Home/CloseOnlineFridayBanner',
            type: 'post',
            complete: function () { }
        });
    });
})