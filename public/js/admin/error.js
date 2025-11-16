setTimeout(() => {
    $('.errors').fadeOut();
}, 3000);

$('[data-dismiss-target]').click(function () {
    var target = $(this).data('dismiss-target');

    $(target).fadeOut();
})