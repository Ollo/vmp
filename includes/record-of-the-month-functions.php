<?php

function renderJS() { ?>
  <script type="text/javascript">
  $(document).ready(function (){
    $.fn.scrollTo = function( target, options, callback ){
      if(typeof options == 'function' && arguments.length == 2){ callback = options; options = target; }
      var settings = {
        scrollTarget  : target,
        offsetTop     : options && options.offsetTop || 0,
        duration      : options && options.duration || 500 ,
        easing        : options && options.easing || 'swing'
      };
      return this.each(function(){
        if ( this.isScrollingTo !== true) {
          var scrollPane = $(this);
          var scrollTarget = (typeof settings.scrollTarget == "number") ? settings.scrollTarget : $(settings.scrollTarget);
          var scrollY = (typeof scrollTarget == "number") ? scrollTarget : scrollTarget.offset().top + scrollPane.scrollTop() - settings.offsetTop - scrollPane.offset().top;
          this.isScrollingTo = true;
          scrollPane.animate({scrollTop : scrollY }, parseInt(settings.duration), settings.easing, function(){
            this.isScrollingTo = false;
            if (typeof callback == 'function') { callback.call(this); }
          });
        }
      });
    }

    $('#rotm-scroll-nav a').click(function(e) {
      e.preventDefault()
      $('body').scrollTo($(this).attr('href'), { duration: 1500, offsetTop: 170 })
    })

    // Find all iframes
    var $iframes = $( "iframe" );

    // Find and save the aspect ratio for all iframes
    $iframes.each(function () {
      $(this).data( "ratio", this.height / this.width )
        // Remove the hardcoded width and height attributes
        .removeAttr( "width" )
        .removeAttr( "height" );
    });

    // Resize the iframes when the window is resized
    $( window ).resize( function () {
      $iframes.each( function() {
        // Get the parent container's width
        var width = $(this).parent().width();
        $(this).width(width)
             .height( width * $( this ).data( "ratio" ) );
      });
    }).resize();
  })
  </script>
<?php
}
?>
