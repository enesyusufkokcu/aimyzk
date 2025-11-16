$(document).ready(function () {
    $("[data-target]").on("click", function () {
        var target = $(this).data('target');

        $("html, body").animate({
            scrollTop: $("#" + target).offset().top
        }, 700);
    });
});

// Modal JS
$('[data-modal-button]').click(function (event) {
    var id = $(this).data('modal-button');
    var modal = $('[data-modal="' + id + '"]');

    if (modal.is(':visible')) {
        modal.hide();
    } else {
        $('[data-modal]').hide();
        modal.show();
    }
    event.stopPropagation();
});

// Sayfa genelinde herhangi bir yere tıklanırsa modal'ı gizle
$(document).click(function () {
    $('[data-modal]').hide();
});

// Modal'ın kendisine tıklanırsa gizlenmesini engelle
$('[data-modal]').click(function (event) {
    event.stopPropagation();
});


$('[data-modal-hide]').click(function () {
    var val = $(this).data('modal-hide');
    $('#' + val).hide();
});

$('[data-open-popup]').click(function () {
    var popup = $(this).data('open-popup');
    $('#' + popup).show();
})

// District Select function
function appendDistricts(select, data) {
    $('#' + select).empty();
    data[0].districts.forEach(function (item) {
        $('#' + select).append($('<option>', {
            value: item.id,
            text: item.name
        }));
    });
}

// switcher js
$('.toggle-switch').click(function () {
    // Tüm toggle-switch öğelerinin sınıflarını kaldır
    $('.toggle-switch').removeClass('bg-white text-strong-950 toggle-shadow').addClass(
        'text-soft-400');

    // Seçilen toggle-switch öğesinin sınıflarını güncelle
    $(this).toggleClass('bg-white text-strong-950 toggle-shadow text-soft-400');

    // Seçili toggle-switch öğesinin data-toggle değerini al
    var selectedToggle = $(this).data('toggle');

    // Tüm alanları gizle
    $('[data-content]').hide();

    // Seçilen toggle-switch öğesine bağlı olan alanı göster
    $('[data-content="' + selectedToggle + '"]').show();
});

// Price Input Js
$(document).ready(function () {
    // Toggle dropdown visibility
    $(document).on('click', '.price_button', function (event) {
        event.stopPropagation(); // Prevent the event from bubbling up
        var button = $(this);
        var target = button.data('dropdown-toggle');
        var id = button.data('id');
        var position = button.data('position'); // Get position data attribute

        // Set dropdown position using JavaScript
        var dropdown = $('#' + target);
        var dropdownHeight = dropdown.outerHeight();

        if (position === 'top') {
            dropdown.css({
                top: (-dropdownHeight) + (-2),
            });
        }

        dropdown.toggleClass('hidden');

        // Hide dropdown when clicking outside
        $(document).on('click', function (event) {
            if (!$(event.target).closest('#' + id + '_price_button, #' + id + '_price').length) {
                dropdown.addClass('hidden');
            }
        });
    });

    $(document).on('keyup', '.price-input', function() {
        let input = $(this);
        let oldValue = input.val();
        
        // Nokta ve virgül hariç tüm karakterleri kaldır
        let rawValue = oldValue.replace(/[^\d,.]/g, '');
        
        // Noktalardan önceki kısmı al (tam sayı kısmı)
        let integerPart = rawValue.split(',')[0].replace(/\D/g, '');
        
        // Virgülden sonraki kısmı al (ondalık kısmı), varsa
        let decimalPart = rawValue.includes(',') ? ',' + rawValue.split(',')[1].replace(/\D/g, '').slice(0, 2) : '';
        
        // Tam sayı kısmını binlik gruplara ayırarak biçimlendir
        let formattedIntegerPart = integerPart.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
        
        // Biçimlendirilmiş değeri oluştur
        let formattedValue = formattedIntegerPart + decimalPart;
    
        // Girdi değerini güncelle
        input.val(formattedValue);
    });
    
    

    // Handle country option click
    $(document).on('click', '.country-option', function () {
        var flagSrc = $(this).data('flag-src');
        var country = $(this).data('country');
        var parentContainer = $(this).closest('[data-id]'); // Find the closest container with data-id attribute
        var id = parentContainer.data('id');

        $('#' + id + '_price_country').val(country);
        $('#' + id + '_selected_country').html(`
    <div class="w-5 h-5 mr-2">
        <img src="${flagSrc}" alt="Selected Country Flag" class="w-5 h-5">
    </div>
    <span class="paragraph-sm text-strong-950">${country}</span>
    `);

        $('#' + id + '_price').addClass('hidden');
    });  

    // Set default selected currency if provided
    $('[data-id]').each(function () {
        var container = $(this);
        var selectedCurrency = container.data('selected-currency');

        if (selectedCurrency) {
            var countryOption = container.find('.country-option').filter(function () {
                return $(this).data('country') === selectedCurrency;
            });

            if (countryOption.length) {
                var flagSrc = countryOption.data('flag-src');
                var country = countryOption.data('country');
                var id = container.data('id');

                $('#' + id + '_price_country').val(country);
                $('#' + id + '_selected_country').html(`
    <div class="w-5 h-5 mr-2">
        <img src="${flagSrc}" alt="Selected Country Flag" class="w-5 h-5">
    </div>
    <span class="paragraph-sm text-strong-950">${country}</span>
    `);
            }
        }
    });
});

// Accordion JS
$(document).ready(function () {
    // Accordion click event
    $('[data-accordion-target]').on('click', function () {
        var target = $(this).data('accordion-target');
        var isExpanded = $(this).attr('aria-expanded') === 'true';

        // Toggle accordion body visibility
        $(target).slideToggle(300);

        // Update aria-expanded attribute
        $(this).attr('aria-expanded', !isExpanded);

        // Toggle border radius classes
        if (!isExpanded) {
            $(this).removeClass('rounded-t-xl').addClass('rounded-xl');
            $(this).removeClass('border-b-transparent');
        } else {
            $(this).removeClass('rounded-xl').addClass('rounded-t-xl');
            $(this).addClass('border-b-transparent');
        }
    });
});

// Tc no JS
$('.tc_no').on('input', function () {
    let value = $(this).val().replace(/\D/g, ''); // Sadece sayıları al
    if (value.length > 11) value = value.slice(0, 11); // 11 karakter ile sınırla
    $(this).val(value);
});

// count input js
$(document).ready(function() {
    $('.increment').on('click', function(e) {        
        e.preventDefault();
        let input = $(this).siblings('input');
        let currentValue = parseInt(input.val()) || 0;
        input.val(currentValue + 1).trigger('change');
    });

    $('.decrement').on('click', function(e) {
        e.preventDefault();
        let input = $(this).siblings('input');
        let currentValue = parseInt(input.val()) || 0;
        if (currentValue > 0) {
            input.val(currentValue - 1).trigger('change');
        }
    });
});

// sortable
function navigate(queryString) {
    var currentUrl = window.location.href;
    var paramName = queryString.split('=')[0];
    var urlParts = currentUrl.split('?');
    var baseUrl = urlParts[0];
    var queryParams = urlParts[1] ? urlParts[1].split('&') : [];
    queryParams = queryParams.filter(function (param) {
        return !param.startsWith('sort');
    });
    queryParams.push(queryString);
    var newUrl = baseUrl + (queryParams.length > 0 ? '?' + queryParams.join('&') : '');
    window.location.href = newUrl;
}

$('.sortable-td').click(function (event) {
    event.preventDefault();
    var sortType = $(this).find('input');
    navigate(sortType.attr('name') + '=' + sortType.val());
});

function navigateUrl(queryString) {
    var currentUrl = window.location.href; // Mevcut URL'yi al
    var urlParts = currentUrl.split('?'); // URL'yi parametrelerden ayır
    var baseUrl = urlParts[0]; // Temel URL
    var queryParams = urlParts[1] ? urlParts[1].split('&') : []; // Mevcut parametreler

    // Dinamik parametreyi güncelle ya da ekle
    var found = false;
    queryParams = queryParams.map(param => {
        if (param.startsWith(queryString.split('=')[0] + '=')) {
            found = true; // Eğer parametre bulunursa işaretle
            return queryString; // Eski parametreyi yeni değeri ile değiştir
        }
        return param; // Diğer parametreleri olduğu gibi bırak
    });

    // Eğer parametre bulunmadıysa yeni parametreyi ekle
    if (!found) {
        queryParams.push(queryString);
    }
    
    // Yeni URL'yi oluştur
    var newUrl = baseUrl + (queryParams.length > 0 ? '?' + queryParams.join('&') : '');
    
    // Yeni URL'ye yönlendir
    window.location.href = newUrl;
}