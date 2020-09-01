/* jshint ignore:start */
define(['jquery', 'core/log'], function($, log) {
    "use strict"; // ...jshint ;_; !!!

    return {
        init: function() {
            $(document).ready(function($) {
                var columnsChooser = $('#columnschooser');
                if (columnsChooser.length) {
                    var sidePre = $('#block-region-side-pre');
                    var sidePost = $('#block-region-side-post');
                    var columnsChooserIcon = $('#showhidecolumnicon i.fa');
                    var body = $('body');
                    var hidestring = columnsChooser.data('hidetitle');
                    var showstring = columnsChooser.data('showtitle');
                    var showhidecolumnsdesc = $('.showhidecolumnsdesc');

                    if ((typeof sidePre != 'undefined') || (typeof sidePost != 'undefined')) {
                        columnsChooser.click(function() {
                            if (body.hasClass('columnshided') ) { // Columns not shown.
                                body.removeClass('columnshided');
                                columnsChooserIcon.removeClass('fa-window-maximize');
                                columnsChooserIcon.addClass('fa-table');
                                M.util.set_user_preference('theme_upo_columns', 'no');
                                columnsChooser.prop('title', hidestring);
                                if (showhidecolumnsdesc.length) {
                                    showhidecolumnsdesc.text(hidestring);
                                }
                            } else {
                                body.addClass('columnshided');
                                columnsChooserIcon.removeClass('fa-table');
                                columnsChooserIcon.addClass('fa-window-maximize');
                                M.util.set_user_preference('theme_upo_columns', 'yes');
                                columnsChooser.prop('title', showstring);
                                if (showhidecolumnsdesc.length) {
                                    showhidecolumnsdesc.text(showstring);
                                }
                            }
                        });
                    }
                }
            });
        }
    };
});
/* jshint ignore:end */
