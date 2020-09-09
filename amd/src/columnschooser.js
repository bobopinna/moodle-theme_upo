// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Side columns hide and show.
 *
 * @package    theme_upo
 * @copyright  2020 Roberto Pinna
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
define(['jquery'],
function($) {
    return {
        init: function() {
            $(document).ready(function($) {
                var columnsChooser = $('#columnschooser');
                if (columnsChooser.length) {
                    var sidePre = $('#block-region-side-pre');
                    var sidePost = $('#block-region-side-post');
                    var columnsChooserIcon = $('#columnschooser i.fa');
                    var body = $('body');
                    var hidestring = columnsChooser.data('hidetitle');
                    var showstring = columnsChooser.data('showtitle');

                    if ((typeof sidePre != 'undefined') || (typeof sidePost != 'undefined')) {
                        columnsChooser.click(function() {
                            if (body.hasClass('columnshided') ) { // Columns not shown.
                                body.removeClass('columnshided');
                                columnsChooserIcon.removeClass('fa-compress');
                                columnsChooserIcon.addClass('fa-expand');
                                M.util.set_user_preference('theme_upo_columns', 'yes');
                                columnsChooser.prop('title', hidestring);
                            } else {
                                body.addClass('columnshided');
                                columnsChooserIcon.removeClass('fa-expand');
                                columnsChooserIcon.addClass('fa-compress');
                                M.util.set_user_preference('theme_upo_columns', 'no');
                                columnsChooser.prop('title', showstring);
                            }
                        });
                    }
                }
            });
        }
    };
});
