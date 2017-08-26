jQuery(document).ready(function ($) {

    var oneSidebar = {

        init: function (settings) {

            oneSidebar.sidebar = {
                ID: settings.sidebarID,
                previewID: settings.sidebarPreviewID
            };

            oneSidebar.content = {
                ID: settings.contentID,
                previewID: settings.contentPreviewID
            };

            oneSidebar.changeSecond(oneSidebar.sidebar.ID, oneSidebar.content.ID);
            oneSidebar.changeSecond(oneSidebar.content.ID, oneSidebar.sidebar.ID);
        },
        
        removeOldClasses: function(sourceID){
            $(sourceID).removeClass (function (index, className) {
                return (className.match (/(^|\s)col-md-\S+/g) || []).join(' ');
            });
        },
        
        updatePreview: function (sourceID, sourcePreviewID) {
            var selItemWidth = $(':selected', $(sourceID)).val();
            oneSidebar.removeOldClasses(sourcePreviewID);
            $(sourcePreviewID).addClass('col-md-' + selItemWidth);
        },

        updatePreviews: function () {
            oneSidebar.updatePreview(oneSidebar.sidebar.ID, oneSidebar.sidebar.previewID);
            oneSidebar.updatePreview(oneSidebar.content.ID, oneSidebar.content.previewID);
        },

        changeSecond: function (sourceID, destID) {
            $(document.body).on('change', sourceID, function () {
                $(destID).val(12 - this.value).triggerHandler('change');
                oneSidebar.updatePreviews();
            });
        }

    };

    oneSidebar.init({
        sidebarID: '#sidebars_layout_count-1-sidebar-1-width-select',
        sidebarPreviewID: '.sidebars_preview .sidebar1',
        contentID: '#sidebars_layout_count-1-content-width-select',
        contentPreviewID: '.sidebars_preview .content'
    });


    var twoSidebars = {

        init: function (settings) {

            twoSidebars.sidebar1 = {
                ID: settings.sidebar1ID,
                previewID: settings.sidebar1PreviewID
            };

            twoSidebars.sidebar2 = {
                ID: settings.sidebar2ID,
                previewID: settings.sidebar2PreviewID
            };

            twoSidebars.content = {
                ID: settings.contentID,
                previewID: settings.contentPreviewID
            };

            twoSidebars.changeSidebar(twoSidebars.sidebar1.ID, twoSidebars.sidebar2.ID);
            twoSidebars.changeSidebar(twoSidebars.sidebar2.ID, twoSidebars.sidebar1.ID);
            twoSidebars.changeContent();

        },
        
        removeOldClasses: function(sourceID){
            $(sourceID).removeClass (function (index, className) {
                return (className.match (/(^|\s)col-md-\S+/g) || []).join(' ');
            });
        },

        updatePreview: function (sourceID, sourcePreviewID) {
            var selItemWidth = $(':selected', $(sourceID)).val();
            twoSidebars.removeOldClasses(sourcePreviewID);
            $(sourcePreviewID).addClass('col-md-' + selItemWidth);
        },

        updatePreviews: function () {
            twoSidebars.updatePreview(twoSidebars.sidebar1.ID, twoSidebars.sidebar1.previewID);
            twoSidebars.updatePreview(twoSidebars.sidebar2.ID, twoSidebars.sidebar2.previewID);
            twoSidebars.updatePreview(twoSidebars.content.ID, twoSidebars.content.previewID);
        },

        changeSidebar: function (sourceID, secondSidebarID) {
            $(document.body).on('change', sourceID, function () {
                this_val = parseInt(this.value);
                side_sum = this_val + parseInt($(secondSidebarID).val());
                if (side_sum >= 6) {
                    $(secondSidebarID).val(6 - this_val).triggerHandler('change');
                    $(twoSidebars.content.ID).val(6).triggerHandler('change');
                } else {
                    $(twoSidebars.content.ID).val(12 - side_sum).triggerHandler('change');
                }
                twoSidebars.updatePreviews();
            });
        },

        changeContent: function () {
            $(document.body).on('change', twoSidebars.content.ID, function () {

                this_val = parseInt(this.value);
                var side1_first = $('#them-sidebars_layout_scheme :input[value="2-right-right"]').is(':checked');
                side1_val = parseInt($(twoSidebars.sidebar1.ID).val());
                side2_val = parseInt($(twoSidebars.sidebar2.ID).val());
                var offset = Math.abs(12 - (side1_val + side2_val) - this_val);

                if (side1_first) {
                    if (this_val < (12 - (side1_val + side2_val))) {
                        side1_val += offset;
                    } else {
                        if (side1_val >= offset + 1) {
                            side1_val -= offset;
                        } else {
                            offset -= (side1_val - 1);
                            side1_val = 1;
                            side2_val -= offset;
                        }
                    }
                } else {
                    if (this_val < (12 - (side1_val + side2_val))) {
                        side2_val += offset;
                    } else {
                        if (side2_val >= offset + 1) {
                            side2_val -= offset;
                        } else {
                            offset -= (side2_val - 1);
                            side2_val = 1;
                            side1_val -= offset;
                        }
                    }
                }

                $(twoSidebars.sidebar1.ID).val(side1_val).triggerHandler('change');
                $(twoSidebars.sidebar2.ID).val(side2_val).triggerHandler('change');

                twoSidebars.updatePreviews();
            });
        }

    };

    twoSidebars.init({
        sidebar1ID: '#sidebars_layout_count-2-sidebar-1-width-select',
        sidebar1PreviewID: '.sidebars_preview .sidebar1',
        sidebar2ID: '#sidebars_layout_count-2-sidebar-2-width-select',
        sidebar2PreviewID: '.sidebars_preview .sidebar2',
        contentID: '#sidebars_layout_count-2-content-width-select',
        contentPreviewID: '.sidebars_preview .content'
    });

    
    function setupValuesSidebars() {
        var one_side = $('#them-sidebars_layout_scheme :input[value*="1-"]').is(':checked');
        if (one_side) {
            oneSidebar.updatePreviews();
        } else {
            twoSidebars.updatePreviews();
        }
    }

    $('#them-sidebars_layout_scheme input[type=radio]').change(function () {
        setupValuesSidebars();
    });

    setupValuesSidebars();
    
    
    
    var footer = {
        
        init: function (settings) {

            footer.rowSelector = {
                ID: settings.rowSelectorID,
                colSelectors: settings.colSelectors,
                previews: settings.previews
            };
            
            $(document.body).on('change', footer.rowSelector.ID, footer.changePreview);
            
            footer.rowSelector.colSelectors.forEach(function(elemArray){
                elemArray.forEach(function(elem){
                    $(document.body).on('change', elem, footer.changePreview);
                });
            });
            
           footer.changePreview();
        },
        
        changePreview: function () {
            var sel = parseInt($(footer.rowSelector.ID).val());
            sel -= 1;
            var i;
            var elemArray = footer.rowSelector.colSelectors[sel];
            var previewID = footer.rowSelector.previews[sel];
            for (i = 0; i < elemArray.length; i++) {
                elemVal = $(elemArray[i]).val();
                colSize = parseInt(elemVal);
                var $target = $(previewID + ' .widgets .row' + (i + 1));
                footer.addColumns(12 / colSize, $target);
            }
        },
      
        makeColumn: function(size){
            var size_percent = 100 / (12 / size);
            var size_text = '<p class="size-text">' + size_percent.toFixed(1) + '%</p>'
            var lorem_ipsum = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br />' + 
                              'Cras consectetur lacus nisl, sed scelerisque est pharetra vel.</p>';
            var elem_content = '<div class="content-wrapper"><div>' + size_text + lorem_ipsum + '</div></div>';          
            var elem = '<div class="col col-md-' + size + '">' + elem_content + '</div>';
            return $(elem);
        },
        
        addColumns: function(size, $elem){
            var i = 0;
            $elem.html('');
            var $column = footer.makeColumn(12 / parseInt(size));
            for(i=0;i<size;i++){
                $column.clone().appendTo($elem);
            }
        }
        
    };
    
    footer.init({
        rowSelectorID: '#footer_layout_rows-select',
        colSelectors: [
            ['#footer_layout_rows-1-columns-select'],
            
            ['#footer_layout_rows-1-columns-select',
             '#footer_layout_rows-2-columns-select'],
         
            ['#footer_layout_rows-1-columns-select',
             '#footer_layout_rows-2-columns-select',
             '#footer_layout_rows-3-columns-select']
        ],
        previews: [
            '.footer-preview.one-row',
            '.footer-preview.two-rows',
            '.footer-preview.three-rows'
        ]
        
    });
    
    /* REDUX NO IMG PREVIEW CHANGE FIX */
    
    var origAppend = $.fn.append;
    $.fn.append = function () {
        return origAppend.apply(this, arguments).trigger("append");
    };
    
    $('.redux-container-media .hide.screenshot').bind('append', function() { 
        $(this).removeClass('hide');
    });
    
    /* REDUX BUTTON SET REMOVE BORDER */
    
    var $btn_set = $('.redux-container-button_set').parent().parent();
    $btn_set.css('border-bottom', 'none');
    
    /* REDUX THEM TILES DISABLE QTIP */
    
    $('.tiles').each(function(){
         $(this).removeData("hasqtip");
    });
    
    /*$('.redux-container-media .hide .redux-option-image').each(function () {
        var id = $( this ).parents( '.redux-container-media:first' ).find( '.upload-id' );
        $(id).change(function(){
           alert(this.val()); 
        });
    });
    
    $('input').change(function(){
           alert(this.val()); 
        });
    */
    /*$('.redux-container-media .redux-option-image').each(function () {
        $(this).on('load', function () {
           alert('kkkk'); 
        });
    });*/

});
