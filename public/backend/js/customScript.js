window.setTimeout(function () {
    $("#success").fadeTo(500, 0).slideUp(500, function () {
        $(this).remove();
    });
}, 5000);
window.setTimeout(function () {
    $("#error").fadeTo(500, 0).slideUp(500, function () {
        $(this).remove();
    });
}, 5000);
window.setTimeout(function () {
    $("#warning").fadeTo(500, 0).slideUp(500, function () {
        $(this).remove();
    });
}, 5000);
$(document).on("hover", ".treeview-menu", function () {
    alert("done");
});
$(document).ready(function () {
    $(document).on('mouseenter', '.treeview-menu, .treeview a', function () {
       $(this).siblings("a").css({"border": "1px solid #662d7c","border-left": "3px solid #662d7c","border-right": "0"});
    }).on('mouseleave', '.treeview-menu', function () {
        $(this).siblings("a").css("border", "1px solid transparent");
    });
});
