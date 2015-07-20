
/*-------------GOOGLE MAPS-----------------*/

function initialize() {

    var mapOptions = {
        center: new google.maps.LatLng(55.662878, 37.540873),
        zoom: 17,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false
    };    
    var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);    
    var image = img.url + 'map-marker.png';
    var myLatLng = new google.maps.LatLng(55.662561,37.540873);
    var beachMarker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        icon: image
    });
}

function loadScript() {
    var script = document.createElement("script");
    script.type = "text/javascript";
    script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyAaOWKyamSxMTXclSDFmJ2N4Am20PCTD6I&sensor=FALSE&callback=initialize";
    document.body.appendChild(script);
}

window.onload = loadScript;



$(function() {

    $(window).scroll(function() {
        if($(this).scrollTop() != 0) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    });
    $('#toTop').click(function() {
        $('body,html').animate({scrollTop: 0}, 1000);
    });

    $('.smoothScroll').click(function(event) {
        event.preventDefault();
        var href=$(this).attr('href');
        var target=$(href);
        var top=target.offset().top;
        $('html,body').animate({
            scrollTop: top
        }, 1000);
    });    
});

(function($) {
        $(function() {
            $('input, select').styler({
                selectSearch: true
            });
        });
        })(jQuery);

(function($) {
$(function() {

    $('ul.menu').on('click', 'li:not(.current)', function() {
        $(this).addClass('current').siblings().removeClass('current')
            .parents('div.wrapper').find('div.box').removeClass('visible').eq($(this).index()).addClass('visible');
         window.location.hash = $(this).data('hash');
         $('input').blur();
    });
    hash = window.location.hash.replace(/#(.+)/, '$1');
    if ( hash !== '' ) {
        $('ul.menu li[data-hash='+hash+']').click();
    }

    $.fn.toggleDisabled = function() {
        return this.each(function() {
            this.disabled = !this.disabled;
        });
    };

    $.fn.toggleChecked = function() {
        return this.each(function() {
            this.checked = !this.checked;
        });
    };

    $('button').click(function(e) {
        e.preventDefault();
    });

    $('button.add-checkbox').click(function() {
        var inputs = '';
        for (var i = 1; i <= 5; i++) {
            inputs += '<label><input type="checkbox" name="checkbox" /> чекбокс ' + i + '</label><br />';
        }
        $(this).closest('div.section').append('<div>' + inputs + '</div>');
        $('input:checkbox').styler();
    });

    $('button.add-radio').click(function() {
        var inputs = '';
        for (var i = 1; i <= 5; i++) {
            inputs += '<label><input type="radio" name="radio" /> радиокнопка ' + i + '</label><br />';
        }
        $(this).closest('div.section').append('<div>' + inputs + '</div>');
        $('input:radio').styler();
    });

    $('button.add-file').click(function() {
        var file = $('<input type="file" name="" />');
        $(this).closest('div.section').append(file);
        file.wrap('<div></div>').styler();
    });

    $('button.add-number').click(function() {
        var number = $('<input type="number" />');
        $(this).closest('div.section').append(number);
        number.before('<br /><br />').styler();
    });

    $('button.add-select').click(function() {
        var multiple = '';
        if ( $(this).is('.multiple') ) multiple = ' multiple';
        var select = $('<select' + multiple +'><option>-- Выберите --</option><option>Пункт 1</option><option>Пункт 2</option><option>Пункт 3</option><option>Пункт 4</option><option>Пункт 5</option></select>');
        $(this).closest('div.section').append(select);
        select.before('<br /><br />').styler();
    });

    $('button.add-options').click(function() {
        var options = '';
        for (i = 1; i <= 5; i++) {
            options += '<option>Опция ' + i + '</option>';
        }
        $(this).closest('div.section').find('select').each(function() {
            $(this).append(options);
        }).trigger('refresh');
    });

    $('button.check').click(function() {
        $(this).closest('div.section').find('input').toggleChecked().trigger('refresh');
    });

    $('button.disable-input').click(function() {
        $(this).closest('div.section').find('input').toggleDisabled().trigger('refresh');
    });

    $('button.disable-select').click(function() {
        $(this).closest('div.section').find('select').toggleDisabled().trigger('refresh');
    });

    $('button.disable-options').click(function() {
        $(this).closest('div.section').find('option').toggleDisabled().trigger('refresh');
    });

});
})(jQuery);

$(function(){
$(window).scroll(function() {
        $('.first__slide').each(function(){
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
            if (imagePos = topOfWindow) {  
                $(this).addClass("animated");            
                $(this).addClass("visible");
                $(this).addClass("slideInLeft");            
            }
        });

        $('.second__slide').each(function(){
        var imagePos2 = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
            if (imagePos2-200 < topOfWindow) {  
                $(this).addClass("animated");            
                $(this).addClass("visible");
                $(this).addClass("slideInRight");            
            }
        });
    });
});

$(window).scroll(function() {
        
    });
