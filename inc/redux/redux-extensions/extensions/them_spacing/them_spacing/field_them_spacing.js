/*global redux*/

(function( $ ) {
    "use strict";

    redux.field_objects = redux.field_objects || {};
    redux.field_objects.them_spacing = redux.field_objects.them_spacing || {};

    $( document ).ready(
        function() {
            //redux.field_objects.them_spacing.init();
        }
    );

    redux.field_objects.them_spacing.init = function( selector ) {

        if ( !selector ) {
            selector = $( document ).find( ".redux-group-tab:visible" ).find( '.redux-container-them_spacing:visible' );
        }
        
        $( selector ).each(
            function() {
                var el = $( this );
                var parent = el;
                if ( !el.hasClass( 'redux-field-container' ) ) {
                    parent = el.parents( '.redux-field-container:first' );
                }
                if ( parent.is( ":hidden" ) ) { // Skip hidden fields
                    return;
                }
                if ( parent.hasClass( 'redux-field-init' ) ) {
                    parent.removeClass( 'redux-field-init' );
                } else {
                    return;
                }
                var default_params = {
                    width: 'resolve',
                    triggerChange: true,
                    allowClear: true
                };

                var select2_handle = el.find( '.select2_params' );
                if ( select2_handle.size() > 0 ) {
                    var select2_params = select2_handle.val();

                    select2_params = JSON.parse( select2_params );
                    default_params = $.extend( {}, default_params, select2_params );
                }

                el.find( ".redux-them_spacing-units" ).select2( default_params );
                
                var sameAllVal = function (elem){
                    return $(elem).is(':checked') ? 1 : 0;
                }
                
                var updateElements = function ($elems, value){
                    $elems.each(function(){
                        var $elemsIn = $( this ).parents( '.redux-field:first' ).find( '.redux-them_spacing-input' ); 
                        var firstVal = $elemsIn.first().val();
                        var value= this.checked ? 1 : 0;
                        if(value){
                            /*$elemsIn.slice(1).val(firstVal).prop('disabled', true);
                            $elemsIn.slice(1).prev().children().removeClass('arrow-enabled');
                            $elemsIn.slice(1).prev().children().addClass('arrow-disabled');*/
                            $elemsIn.first().prev().children().removeClass('el-arrow-up');
                            $elemsIn.first().prev().children().addClass('el-lock');
                            $elemsIn.slice(1).parent().hide(200);
                        } else {
                            /*$elemsIn.slice(1).prop('disabled', false);
                            $elemsIn.slice(1).prev().children().removeClass('arrow-disabled');
                            $elemsIn.slice(1).prev().children().addClass('arrow-enabled');*/
                            $elemsIn.first().prev().children().removeClass('el-lock');
                            $elemsIn.first().prev().children().addClass('el-arrow-up');
                            $elemsIn.slice(1).parent().show(200);
                        }
                    });  
                }
                
                var $sameAll = $('.redux-them_spacing-checkbox');
                updateElements($sameAll);
                
                el.find( '.redux-them_spacing-checkbox' ).on(
                    'change', function() {
                        var value = this.checked ? 1 : 0;
                        $( '#' + $( this ).attr( 'rel' ) ).val( value );
                        updateElements($(this));
                    }
                );

                el.find( '.redux-them_spacing-input' ).on(
                    'change', function() {
                        var units = $( this ).parents( '.redux-field:first' ).find( '.field-units' ).val();

                        if ( $( this ).parents( '.redux-field:first' ).find( '.redux-them_spacing-units' ).length !== 0 ) {
                            units = $( this ).parents( '.redux-field:first' ).find( '.redux-them_spacing-units option:selected' ).val();
                        }

                        var value = $( this ).val();

                        if ( typeof units !== 'undefined' && value ) {
                            value += units;
                        }

                        if ( $( this ).hasClass( 'redux-them_spacing-all' ) ) {
                            $( this ).parents( '.redux-field:first' ).find( '.redux-them_spacing-value' ).each(
                                function() {
                                    $( this ).val( value );
                                }
                            );
                        } else {
                            $( '#' + $( this ).attr( 'rel' ) ).val( value );
                        }
                    }
                );

                el.find( '.redux-them_spacing-units' ).on(
                    'change', function() {
                        $( this ).parents( '.redux-field:first' ).find( '.redux-them_spacing-input' ).change();
                    }
                );
            }
        );
    };
})( jQuery );