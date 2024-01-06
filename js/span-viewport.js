(function($) {
    console.log("loaded");
    $(document).ready(function() {
        $(window).on('scroll resize', function() {
            $('p span').each(function() {
                if (isElementInViewport(this)) {
                    $(this).addClass('in-view');
                } else {
                    $(this).removeClass('in-view');
                }
            });
            $('img.arrow').each(function() {
                if (isElementInViewport(this)) {
                    $(this).addClass('in-view');
                } else {
                    $(this).removeClass('in-view');
                }
            })

            $('img.cloud').each(function() {
                if (isElementInViewport(this)) {
                    $(this).addClass('in-view');
                } else {
                    $(this).removeClass('in-view');
                }
            })
            $('.list-item').each(function() {
                if (isElementInViewport(this)) {
                    $(this).addClass('in-view');
                } 
            })
           

        });
    
        // Function to check if the element is in the viewport
        function isElementInViewport(element) {
            var rect = element.getBoundingClientRect();
            return (
                rect.top > 0 &&
                rect.left >= 0 &&
                rect.bottom < $(window).height() &&
                rect.right <= $(window).width()
            );
        }
    
        // Trigger the scroll event initially
        $(window).trigger('scroll');
    });
}) (jQuery)
