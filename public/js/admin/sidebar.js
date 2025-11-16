let sidebar = $('#sidebar-multi-level-sidebar');
let overlay = $('#layout-overlay');

$('#sidebarButton').click(function (e) {
    e.stopPropagation(); // Bu tıklamanın dökümana ulaşmasını engeller
    sidebar.removeClass('-translate-x-full');

    overlay.fadeIn(300);
});

$(document).on('click', function (e) {
    if (!sidebar.is(e.target) && sidebar.has(e.target).length === 0 && !$(e.target).is('#sidebarButton')) {
        sidebar.addClass('-translate-x-full');
        overlay.fadeOut(300);
    }
});

$('.sidebarDropdownButton').on('click', function () {
    var target = $(this).data('collapse-toggle');

    $('#' + target).slideToggle(300);
})