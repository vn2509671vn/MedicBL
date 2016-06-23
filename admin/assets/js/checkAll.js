$(document).ready(function() {
    checkAndUncheck();
});
function checkAndUncheck() {
    $("input[name='checkAll']").click(function() {
        var checked = $(this).attr("checked");
        if(!checked) checked = "";
        $("#table tbody tr td input:checkbox").attr("checked", checked);
    });
}