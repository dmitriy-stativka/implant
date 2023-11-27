require("../sass/style.scss");
require("./vendor/lightbox");
require("./vendor/picturefill");
require("./custom/custom");

(function ($) {
    if($('.use_cases_container').length > 0){
        require("./custom/custom");
        require("./vendor/lightbox");
    }
})(jQuery);