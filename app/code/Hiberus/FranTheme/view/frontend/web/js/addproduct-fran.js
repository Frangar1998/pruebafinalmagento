define(['jquery'], function($) {
    return function(config, element) {
        $(element).on('click', 'inputbutton', function(){
            let currentValue = $(element).find('.inputval').val();
            $(element).find('.inputval').val(parseInt(currentValue) + 1);
        });
    }
});