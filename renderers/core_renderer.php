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
 * UPO theme with the underlying Bootstrap theme.
 *
 * @package    theme
 * @subpackage UPO
 * @copyright  Roberto Pinna
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
 
 class theme_upo_core_renderer extends theme_bootstrapbase_core_renderer {

    protected function render_custom_menu(custom_menu $menu) {
        global $CFG,$USER,$OUTPUT;
        /*
        * This code replaces adds the current enrolled
        * courses to the custommenu.
        */
    
        $hasdisplaymycourses = (empty($this->page->theme->settings->displaymycourses)) ? false : $this->page->theme->settings->displaymycourses;
        if (isloggedin() && !isguestuser() && $hasdisplaymycourses) {
            if ($courses = enrol_get_my_courses(NULL, 'fullname ASC')) {
                $branchtitle = get_string('mycourses');
//                $branchlabel = $OUTPUT->pix_icon('i/course', '', 'moodle', array('class' => 'smallicon pluginicon noicon')).' '.$branchtitle;
                $branchurl   = new moodle_url('');
                $branchsort  = 10001;
 
                $branch = $menu->add($branchtitle, $branchurl, $branchtitle, $branchsort);
                foreach ($courses as $course) {
                    if ($course->visible){
                        $branch->add(format_string($course->fullname), new moodle_url('/course/view.php?id='.$course->id), format_string($course->shortname));
                    }
                }
            }
        }
    
        /*
        * This code replaces adds the My Dashboard
        * functionality to the custommenu.
        */
        $hasdisplaymydashboard = (empty($this->page->theme->settings->displaymydashboard)) ? false : $this->page->theme->settings->displaymydashboard;
        if (isloggedin() && !isguestuser() && $hasdisplaymydashboard) {
            $branchtitle = fullname($USER);
            //$branchlabel = $OUTPUT->pix_icon('i/user', '', 'moodle', array('class' => 'smallicon pluginicon noicon')).' '.$branchtitle;
            $branchurl   = new moodle_url('/my/index.php');
            $branchsort  = 10002;
 
            $branch = $menu->add($branchtitle, $branchurl, $branchtitle, $branchsort);
            $itemtitle = get_string('profile');
            //$itemlabel = $OUTPUT->pix_icon('i/user', '', 'moodle', array('class' => 'smallicon pluginicon noicon'));
            $branch->add($itemtitle, new moodle_url('/user/profile.php'), get_string('profile'));

            $itemtitle = get_string('pluginname', 'block_calendar_month');
            //$itemlabel = $OUTPUT->pix_icon('i/calendar', '', 'moodle', array('class' => 'smallicon pluginicon noicon'));
            $branch->add($itemtitle, new moodle_url('/calendar/view.php'), get_string('pluginname', 'block_calendar_month'));

            // Check if messaging is enabled.
            if (!empty($CFG->messaging)) {
                $itemtitle = get_string('pluginname', 'block_messages');
                //$itemlabel = $OUTPUT->pix_icon('t/email', '', 'moodle', array('class' => 'smallicon pluginicon noicon'));
                $branch->add($itemtitle, new moodle_url('/message/index.php'), get_string('pluginname', 'block_messages'));
            }

            // Check if badges are enabled.
            if (!empty($CFG->enablebadges)) {
                $itemtitle = get_string('badges');
                //$itemlabel = $OUTPUT->pix_icon('i/badge', '', 'moodle', array('class' => 'smallicon pluginicon noicon'));
                $branch->add($itemtitle, new moodle_url('/badges/mybadges.php'), get_string('badges'));
            }

            $itemtitle = get_string('privatefiles', 'block_private_files'); 
            //$itemlabel = $OUTPUT->pix_icon('i/folder', '', 'moodle', array('class' => 'smallicon pluginicon noicon'));
            $branch->add($itemtitle, new moodle_url('/user/files.php'), get_string('privatefiles', 'block_private_files'));

            $itemtitle = get_string('forumposts', 'mod_forum'); 
            //$itemlabel = $OUTPUT->pix_icon('t/message', '', 'moodle', array('class' => 'smallicon pluginicon noicon'));
            $branch->add($itemtitle, new moodle_url('/mod/forum/user.php?id='.$USER->id));

            $itemtitle = get_string('discussion', 'mod_forum'); 
            //$itemlabel = $OUTPUT->pix_icon('t/messages', '', 'moodle', array('class' => 'smallicon pluginicon noicon'));
            $branch->add($itemtitle, new moodle_url('/mod/forum/user.php?id='.$USER->id.'&mode=discussions'));

            $itemtitle = get_string('logout'); 
            //$itemlabel = $OUTPUT->pix_icon('i/export', '', 'moodle', array('class' => 'smallicon pluginicon noicon rotate-90'));
            $branch->add($itemtitle, new moodle_url('/login/logout.php'), get_string('logout'));    
        } else {
            $branchtitle = get_string('login');
            //$branchlabel = $OUTPUT->pix_icon('i/user', '', 'moodle', array('class' => 'smallicon pluginicon noicon')).' '.$branchtitle;
            $branchurl   = new moodle_url('/login/index.php');
            $branchsort  = 10002;
            $branch = $menu->add($branchtitle, $branchurl, $branchtitle, $branchsort);

        }

        return parent::render_custom_menu($menu);
    }
    
   /*
    * This code replaces the icons with
    * FontAwesome variants where available.
    */
    
    protected function render_pix_icon(pix_icon $icon) {
        global $CFG;

        if (get_config('awesomefont', 'theme_upo') != '0') {
            require_once($CFG->dirroot.'/theme/upo/icons.php');
            if (isset($awesomeicons[$icon->pix])) {
                 return '<span class="fa '.$awesomeicons[$icon->pix].'"></span>';
            }
        }
        //return '<span class="fa fa-html5 '.$icon->pix.'"></span>';
        return parent::render_pix_icon($icon);
    }

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
           }
        }
        if (($activeregions > 0) || $this->page->user_is_editing()) {

           if ($this->page->user_is_editing()) {
               $activeregions = 1;
           }

           $result .=  html_writer::start_tag('div', array('class' => $classestext));
           if (!empty($headertext)) {
               $result .=  html_writer::tag('h4', $headertext, array());
           }
           $result .=  html_writer::start_tag('div', array('class' => 'row-fluid'));
           $odd = $activeregions % 2;
           foreach ($regions as $region) {
               $span = floor(12/$activeregions);
               $displayclass = '';
               if ($this->page->user_is_editing()) {
                   $span = floor(12/$availableregions);
                   $displayclass = ' blockdragtarget';
               }
               $regionclass = $span!=12?'span'.$span.$displayclass:$displayclass;
               if ($PAGE->blocks->region_has_content($region, $OUTPUT) || $this->page->user_is_editing()) {
                   $result .= $OUTPUT->blocks($region, $regionclass);
               }
           }
           $result .=  html_writer::end_tag('div');
           $result .=  html_writer::end_tag('div');
        }
   
        return $result;
    }
    
    /**
    * Returns HTML to display a "Turn editing on/off" button in a form.
    *
    * @param moodle_url $url The URL + params to send through when clicking the button
    * @return string HTML the button
    * Written by G J Barnard
    */
    
    public function edit_button(moodle_url $url) {
        $url->param('sesskey', sesskey());    
        if ($this->page->user_is_editing()) {
            $url->param('edit', 'off');
            $btn = 'btn-danger';
            $title = get_string('turneditingoff');
        } else {
            $url->param('edit', 'on');
            $btn = 'btn-success';
            $title = get_string('turneditingon');
        }
        $content = html_writer::tag('span', $title, array());
        return html_writer::tag('a', $content, array('href' => $url, 'class' => 'btn '.$btn, 'title' => $title));
    }
}

