<?php
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
 * Renderers to align Moodle's HTML with that expected by Bootstrap
 *
 * @package    theme_upo
 * @copyright  2019 Roberto Pinna
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace theme_upo\output;

defined('MOODLE_INTERNAL') || die;

/**
 * Renderers to align Moodle's HTML with that expected by Bootstrap
 *
 * Note: This class is required to avoid inheriting Boost's core_renderer,
 *       which removes the edit button required by Classic.
 *
 * @package    theme_upo
 * @copyright  2019 Roberto Pinna
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class core_renderer extends \core_renderer {
    /**
    * Get the HTML for blocks in the given region.
    *
    * @param array $regions The regions to get HTML for.
    * @param array $classes The regions classes.
    * @param string $headertext The regions group header text.
    * @return string HTML.
    */

    public function upoblocks($regions, $classes = array(), $headertext='') {
        global $OUTPUT, $PAGE;

        $classes = (array)$classes;
        $classestext = implode(' ', $classes);
        $activeregions = 0;
        $availableregions = count($regions);
        $result = '';
        foreach ($regions as $region) {
           if (empty($PAGE->layout_options['noblocks']) && $PAGE->blocks->region_has_content($region, $OUTPUT)) {
               $activeregions++;
           } else if ($this->page->user_is_editing()) {
               $activeregions++;
           }

        }
        if ($activeregions > 0) {

           $result .= \html_writer::start_tag('div', array('class' => $classestext));
           if (!empty($headertext)) {
               $result .= \html_writer::tag('h4', $headertext, array());
           }
           $result .= \html_writer::start_tag('div', array('class' => 'row'));

           $span = floor(12/$activeregions);
           $i = 0;
           foreach ($regions as $region) {
               $i++;
               $displayclass = '';

               if ($activeregions > 1) {
                   if ($i == 1) {
                       $displayclass = ' pr-1';
                   } else if ($i == $activeregions) {
                       $displayclass = ' pl-1';
                   } else {
                       $displayclass = ' px-1';
                   }
               }

               $regionclass = 'col-lg-'.$span.$displayclass;
               if ($PAGE->blocks->region_has_content($region, $OUTPUT) || $this->page->user_is_editing()) {
                   $result .= $OUTPUT->blocks($region, $regionclass);
               }
               $first = false;
           }
           $result .= \html_writer::end_tag('div');
           $result .= \html_writer::end_tag('div');
        }

        return $result;
    }

    /**
     * Whether we should display the main logo.
     *
     * @param int $headinglevel The heading level we want to check against.
     * @return bool
     */
    public function should_display_main_logo($headinglevel = 1) {

        // Only render the logo if we're on the login page and the we have a logo.
        $logo = $this->get_logo_url();
        if ($headinglevel == 1 && !empty($logo)) {
            if ($this->page->pagelayout == 'login') {
                return true;
            }
        }

        return false;
    }

    /**
     * Return  hide/show columns button
     *
     * @return string HTML.
     */
    public function hideshowcolumns() {
        global $PAGE;

        theme_upo_initialize_columns_visibility();
        $columnsvisibility = theme_upo_get_columns_visibility();

        $result = '';
        if (isloggedin()) {
            $hidetitle = get_string('hidecolumns', 'theme_upo');
            $showtitle = get_string('showcolumns', 'theme_upo');
            if ($columnsvisibility == 'no') { // Columns not shown.
                $columnsicontitle = $showtitle;
                $faicon = 'table';
            } else {
                $columnsicontitle = $hidetitle;
                $faicon = 'window-maximize';
            }
            $result .= \html_writer::start_tag('div',
                array('id' => 'columnschooser', 'class' => 'columnschooser btn btn-secondary', 'title' => $columnsicontitle,
                    'data-hidetitle' => $hidetitle, 'data-showtitle' => $showtitle));
            $result .= \html_writer::tag('i', '', array('class' => 'fa fa-lg fa-'.$faicon, 'aria-hidden' => 'true'));
            $result .= \html_writer::tag('span', ' '.$columnsicontitle, array('class' => 'showhideblocksdesc'));
            $result .= \html_writer::end_tag('div');
            $PAGE->requires->js_call_amd('theme_upo/columnschooser', 'init');
        }
        return $result;
    }

    /**
     * Gets the HTML for the page heading button.
     *
     * @since Moodle 2.5.1 2.6
     * @return string HTML.
     */
    public function page_heading_button() {
        $result = '';
        $result .= $this->hideshowcolumns();
        $result .= $this->page->button;
        return $result;
    }
}
