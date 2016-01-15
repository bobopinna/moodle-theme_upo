<?php
include_once($CFG->dirroot . "/blocks/course_overview/renderer.php");

class theme_upo_block_course_overview_renderer extends block_course_overview_renderer {

    public function course_overview ($courses, $overview) {
        global $DB;
        foreach ($courses as $key => $course) {
            $courseformat = $DB->get_field('course', 'format', array('id' => $course->id));
            if ($courseformat == 'courselink') {
                unset($courses[$key]);
            } else if ($courseformat == 'singleactivity') {
                if ($DB->get_field('course_format_options', 'value', array('courseid' => $course->id, 'name' => 'activitytype')) == 'url') {
                    unset($courses[$key]);
                }
            }
        }
        return parent::course_overview($courses, $overview);
    }

}
