/**
 * Created by tranngoclam1909 on 11/25/2014.
 */

window.setTimeout(function() { closebb(); }, 3000); // Thời gian đóng popup

function closebb() {
    $('#closebb').click();

    if ($(".bb_open").css('display') == 'none') {
        $(".bb_open").show();
        $(".bb_close").hide();
        $(".bottombar").toggle();
    }
}

function toggle_bb() {
    if ($(".bb_open").css('display') == 'none') {
        $(".bb_open").show();
        $(".bb_close").hide();
        $(".bottombar").toggle();
    }
    else
    if ($(".bb_close").css('display') == 'none') {
        $(".bb_open").hide();
        $(".bb_close").show();
        $(".bottombar").toggle();
    }
}