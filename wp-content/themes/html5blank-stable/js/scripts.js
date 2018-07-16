(function ($, root, undefined) {

    $(function () {

        'use strict';

        jQuery('.gallery a').each(function(){
           jQuery(this).attr({'data-lightbox':'galeria'}) ;
        });

    });

})(jQuery, this);
