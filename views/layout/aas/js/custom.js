var url = window.location.host;
jQuery(document).ready(function ($) {
    /* BX slider 1*/
    // Support for AJAX loaded modal window.
    // Focuses on first input textbox after it loads the window.
    //$('[data-toggle="modal"]').on('shown.bs.modal',function(e) {
    //	e.preventDefault();
    //	var url = $(this).attr('href');
    //	if (url.indexOf('#') == 0) {
    //		$(url).modal('open');
    //	} else {
    //		$.get(url, function(data) {
    //			$('<div class="modal hide fade  modal-lg">' + data + '</div>').modal();
    //		}).success(function() { $('input:text:visible:first').focus(); });
    //	}
    //});
    //$('.manual-ajax').bind('click', function(e) {//select all the buttons with a class selector
    //
    //        var loadFile = $(this).data("file");
    //
    //        // Prevents the default action to be triggered. 
    //        e.preventDefault();
    //
    //        // Triggering bPopup when click event is fired
    //        $('#element_to_pop_up').bPopup({
    //            contentContainer:'.content',
    //            loadUrl: loadFile //Uses jQuery.load()
    //        });
    //    });
    //$('[data-toggle="modal"]').on('shown.bs.modal',function(e) {
    //  e.preventDefault();
    //  $.get(this.href, function(html) {
    //    $(html).appendTo('body').modal();
    //  });
    //});

    $('[data-load-remote]').click(function(e) {
        e.preventDefault();

        $( '.modal-body' ).html( 'Carregando...' );
        var $this = $(this);
        var remote = $this.data('load-remote');
        if(remote) {
            $($this.data('remote-target')).load(remote);
        }
    //    return false;
    
    });

 
    var bannerslider = $('#banner_slider');
    if (bannerslider.length) {
        bannerslider.bxSlider({
            auto: true, 
            minSlides: 1, 
            maxSlides: 1, 
            slideMargin: 18, 
            speed: 500
        });
    }
    var newslider = $('.bxslider');
    if (newslider.length) {
        $('.bxslider').bxSlider({
            pagerCustom: '#bx-pager',
            controls: false
        });
    
    }
    
    var newslider = $('#news_slider');
    if (newslider.length) {
        newslider.bxSlider({
            minSlides: 1, 
            maxSlides: 1, 
            slideMargin: 18, 
            speed: 500
        });
    }
    var videoslider = $('.video_slider');
    if (videoslider.length) {
        videoslider.bxSlider({
            minSlides: 1, 
            maxSlides: 1, 
            slideMargin: 25, 
            speed: 500
        });
    }
    var blogslider = $('#blog_slider');
    if (blogslider.length) {
        blogslider.bxSlider({
            minSlides: 1, 
            maxSlides: 1
        });
    }
    var shopslider = $('#shop_slider');
    if (shopslider.length) {
        shopslider.bxSlider({
            slideWidth: 205,
            minSlides: 1, 
            maxSlides: 2, 
            slideMargin: 28
        });
    }
    var officeslider = $('#office_slider');
    if (officeslider.length) {
        officeslider.bxSlider({
            slideWidth: 270, 
            minSlides: 1, 
            maxSlides: 4, 
            slideMargin: 28
        });
    }
    var productslider = $('#slider_products');
    if (productslider.length) {
        productslider.bxSlider({
            slideWidth: 270, 
            minSlides: 1, 
            maxSlides: 1, 
            slideMargin: 10
        });
    }

    /* bootstrap Add class to accordion **/
    var sidebar = $('.accordion-heading'); /* cache sidebar to a variable for performance */
    sidebar.delegate('.accordion-toggle', 'click', function () {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            $(this).addClass('inactive');
            $("#icon_toggle i", this).removeClass('icon-minus').addClass('icon-plus');
        } else {
            sidebar.find('.active').addClass('inactive');
            sidebar.find('.active').removeClass('active');
            $(this).removeClass('inactive');
            $(this).addClass('active');
            $("#icon_toggle i", this).removeClass('icon-plus').addClass('icon-minus');
        }
    });
    /* End of bootstrap Add class to accordion **/

    /* Footer Gallery Pretty Photo Widget **/
    
    if($().prettyPhoto) {
     var image = jQuery(".pp_pic_holder").find("#pp_full_res img").attr("src");   
    //alert(image);
        $("a[rel^='prettyPhoto']").prettyPhoto({
            animation_speed: 'normal', 
            theme: 'light_square', 
            slideshow: 3000, 
            autoplay_slideshow: false,
            image_markup: '<img id="fullResImage" src="{path}" /><span class="download-btn"><a class="btn btn-primary" href="{path}">Download</a></span>',
            changepicturecallback: function(){
                var valorDaDiv = $(".pp_description").text();
                
                //var id_to_find = $(".pp_description").html('title');
                $(".btn-primary").attr("href", "http://"+url+"/page/baixarimagem/"+valorDaDiv);
                jQuery(".pp_content").css("height", $(".pp_content").height() + jQuery(".download-btn").outerHeight() + 10);
            }
        });
        $("a[rel^='prettyPhoto2']").prettyPhoto();
        $("a[rel^='prettyPhoto3']").prettyPhoto();
  
    }
    /* End of Footer Gallery Pretty Photo Widget **/
	
    /* Start of Photo Gallery Pretty Photo **/

    
    /* End of Photo Gallery Pretty Photo **/
	
    /* Social Icons **/
    var social_active = $('.social_active');
    if (social_active.length) {
        $('.social_active').hoverdir({});
    }
    /* End of Social Icons Animation **/

    /* Start of Counter */
    var year = $('#year');
    if (year.length) {
        $('#year').text(austDay.getFullYear());
    }
    /* End of Counter */
	
    /* Bootstrap Tooltip */
    var tooltip = $("[rel='tooltip']");
    if (tooltip.length) {
        $("[rel='tooltip']").tooltip();
    }
    /* Bootstrap Tooltip */
	 
    $('.nav li, .nav li').on({
        mouseenter: function() {
            $(this).children('ul').stop(true, true).slideDown(400);
        },
        mouseleave: function() {
            $(this).children('ul').slideUp(100);
        }
    });
	
});
/* End of Counter */