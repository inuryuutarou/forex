(function($) {

    var scripts = document.getElementsByTagName("script"),
        src = scripts[scripts.length-1].src;

    src = src.split('/');
    src.pop();
    src = src.join('/');

    $.getScript(src + '/handlebars/handlebars-1.0.rc.1.min.js', function( data, textStatus, jqxhr ) {
//        console.log( "Handlebars was loaded." );
    });

    $.fn.Holo_Ajax_Loader = function() {

        if ( jQuery().imagesLoaded && jQuery().isotope ) {

            var $button = $(this);

            var data = $button.data();

            var $_container = $(data['container']);

            var _template_source = $(data['template']).html();
            var _thumbnail_size = data['thumbnail_size'];
            var _page = data['page'];
            var _posts_per_page = data['posts_per_page'];
            var _post_type = data['post_type'];

            $button.click(function(event) {

                event.preventDefault();

                $.ajax({
                    url: src + '/process.php',
                    dataType: "json",
                    type: 'POST',
                    data: {
                        page: _page,
                        post_type: _post_type,
                        posts_per_page: _posts_per_page,
                        thumbnail_size: _thumbnail_size
                    },
                    beforeSend: function() {
                        $('.ajax-preloader').show();
                        $('.ajax-preloader').closest('.over').find('span').hide();
                    },
                    success: function(data) {

                        $('.ajax-preloader').hide();
                        $('.ajax-preloader').closest('.over').find('span').show();

                        var items = [];

                        $.each(data, function(key, item) {

                            items.push(item);

                        });

                        var template = Handlebars.compile(_template_source);

                        var templ_data = { items: items };

                        var $item_markup = jQuery(template(templ_data));

                        if ( data.length == 0 ) {

                            jQuery('.load').html('<p>No more data</p>');

                            return;
                        }

                        $_container.append($item_markup);

                        $_container.imagesLoaded(function(){
                            $_container.isotope('insert', $item_markup);
                        });

                        next_page(_page);

                        $('.mgp-img').magnificPopup({
                            type: 'image',
                            removalDelay: 300,
                            mainClass: 'mgp-fade'
                        });

                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
            });

            function next_page(page) {

                _page = ++page;

                $button.data['page'] = _page;

            }

        }
    }


})(jQuery);
