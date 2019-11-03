jQuery(document).ready(function($) {	

	/**
     * Script for switch option
     */
    $('.switch_options').each(function() {
        //This object
        var obj = $(this);

        var switchPart = obj.children('.switch_part').attr('data-switch');
        var input = obj.children('input'); //cache the element where we must set the value
        var input_val = obj.children('input').val(); //cache the element where we must set the value

        obj.children('.switch_part.'+input_val).addClass('selected');
        obj.children('.switch_part').on('click', function(){
            var switchVal = $(this).attr('data-switch');
            obj.children('.switch_part').removeClass('selected');
            $(this).addClass('selected');
            $(input).val(switchVal).change(); //Finally change the value to 1
        });

    });

    /**
     * Script for Customizer icons
     */ 
    $(document).on('click', '.ap-customize-icons li', function() {
        $(this).parents('.ap-customize-icons').find('li').removeClass();
        $(this).addClass('selected');
        var iconVal = $(this).parents('.icons-list-wrapper').find('li.selected').children('i').attr('class');
        var inpiconVal = iconVal.split(' ');
        $(this).parents( '.ap-customize-icons' ).find('.ap-icon-value').val(inpiconVal[1]);
        $(this).parents( '.ap-customize-icons' ).find('.selected-icon-preview').html('<i class="' + iconVal + '"></i>');
        $('.ap-icon-value').trigger('change');
    });

    /**
     * Radio Image control in customizer
     */
    // Use buttonset() for radio images.
    $( '.customize-control-radio-image .buttonset' ).buttonset();

    // Handles setting the new value in the customizer.
    $( '.customize-control-radio-image input:radio' ).change(
        function() {

            // Get the name of the setting.
            var setting = $( this ).attr( 'data-customize-setting-link' );

            // Get the value of the currently-checked radio input.
            var image = $( this ).val();

            // Set the new value.
            wp.customize( setting, function( obj ) {

                obj.set( image );
            } );
        }
    );

    /**
     * Multiple checkboxes
     */
    /* === Checkbox Multiple Control === */

    $( '.customize-control-checkbox-multiple input[type="checkbox"]' ).on( 'change', function() {
        checkbox_values = $( this ).parents( '.customize-control' ).find( 'input[type="checkbox"]:checked' ).map(
            function() {
                return this.value;
            }
        ).get().join( ',' );

        $( this ).parents( '.customize-control' ).find( 'input[type="hidden"]' ).val( checkbox_values ).trigger( 'change' );
    });

    /**
     * Text editor on customizer
     */
    (function($) {
        wp.customizerCtrlEditor = {

            init: function() {

                $(window).load(function() {

                    $('textarea.wp-editor-area').each(function() {
                        var tArea = $(this),
                            id = tArea.attr('id'),
                            input = $('input[data-customize-setting-link="' + id + '"]'),
                            editor = tinyMCE.get(id),
                            setChange,
                            content;

                        if (editor) {
                            editor.on('change', function(e) {
                                editor.save();
                                content = editor.getContent();
                                clearTimeout(setChange);
                                setChange = setTimeout(function() {
                                    input.val(content).trigger('change');
                                }, 500);
                            });
                        }

                        tArea.css({
                            visibility: 'visible'
                        }).on('keyup', function() {
                            content = tArea.val();
                            clearTimeout(setChange);
                            setChange = setTimeout(function() {
                                input.val(content).trigger('change');
                            }, 500);
                        });
                    });
                });
            }
        };
        wp.customizerCtrlEditor.init();
    })(jQuery);
});