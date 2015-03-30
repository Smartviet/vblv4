// -------------------------------
// Initialize Data Tables
// -------------------------------

$(document).ready(function() {
    $('.datatables').dataTable({
        "sDom": "<'row'<'col-xs-6'l><'col-xs-6'f>r>t<'row'<'col-xs-6'i><'col-xs-6'p >>",
        "sPaginationType": "bootstrap",
        "oLanguage": {
            "sLengthMenu": "_MENU_ Dòng trên một trang",
            "sZeroRecords": "không có dữ liệu để hiển thị",
            "sInfo": "Hiển thị _START_ đến _END_ trong _TOTAL_ mục",
            "sInfoEmpty": "Hiển thị 0 đến 0 của _TOTAL_ mục",
            "sInfoFiltered": " - Lọc từ tổng số _MAX_ mục ",
            "sSearch": ""
        },
        "iDisplayLength": 20,
        "aLengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],

    });
    $('.dataTables_filter input').addClass('form-control').attr('placeholder','Search...');
    $('.dataTables_length select').addClass('form-control');
});