let dropdown = $('.mobile-header');

$('#navbar-burger').click(function (e) {
    e.stopPropagation(); // Bu tıklamanın dökümana ulaşmasını engeller
    dropdown.removeClass('-translate-x-full');
});

$(document).on('click', function (e) {
    if (!dropdown.is(e.target) && dropdown.has(e.target).length === 0 && !$(e.target).is(
        '.navbar-burger')) {
        dropdown.addClass('-translate-x-full');
    }
});

$('.mobile-nav-links').click(function () {
    dropdown.addClass('-translate-x-full');
});