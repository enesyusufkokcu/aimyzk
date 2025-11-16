$(document).ready(function () {
    // Dropdown açma/kapama işlevi
    $('[data-dropdown-toggle]').click(function (e) {
        e.stopPropagation();
        var drop = $(this).data('dropdown-toggle');
        var $dropdown = $('#' + drop);
        $dropdown.toggleClass('hidden');
        $dropdown.attr('aria-expanded', function (_, attr) {
            return attr == 'true' ? 'false' : 'true';
        });
    });

    // Dışarı tıklandığında dropdown menüyü gizle
    $(document).click(function () {
        $('.dropdown').addClass('hidden').attr('aria-expanded', 'false');
    });

    // Dropdown menüye tıklandığında dışarı tıklamayı önle
    $('.dropdown').click(function (e) {
        e.stopPropagation();
    });
});