/**
 * Theme: Cherish
 * 
 * Helper for the background and link text color options.
 */

jQuery(document).ready(function($){
    $('.meta-color').wpColorPicker();
    $('.cherish-text-color').wpColorPicker();
    
    $(window).on("load", function () {
        $('.editor-post-title__block .editor-post-title__input').css('color', cherish_colors.cherish_text_color);
        $('a', '.editor-writing-flow a', '.block-editor-writing-flow a').css('color', cherish_colors.cherish_text_color);
    });

    $('.block-editor__container').css('background-color', cherish_colors.cherish_background);
    

    $(".meta-color").wpColorPicker(
        'option',
        'change',
        function (event, ui) {
            $('.block-editor__container').css('background-color', this.value);
        }
    );

    $(".cherish-text-color").wpColorPicker(
        'option',
        'change',
        function (event, ui) {
            $('.editor-post-title__input').css('color', this.value);
            $('a', '.editor-writing-flow a', '.block-editor-writing-flow a').css('color', this.value);

        }
    );
  
});

