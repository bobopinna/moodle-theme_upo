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
 * Moodle's UPO theme
 *
 * For full information about creating Moodle themes, see:
 * http://docs.moodle.org/dev/Themes_2.0
 *
 * @package   theme_upo
 * @copyright 2014 Roberto Pinna
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
 include('includes/header.php');
?>
    <div id="page-content" class="row-fluid">
        <?php echo $OUTPUT->upoblocks(array('home-left', 'home-middle', 'home-right'), array('home-blocks', 'row-fluid', 'flex-blocks')); ?>
        <section>
            <div id="region-main">
                <?php
                    echo $OUTPUT->course_content_header();
                    echo $OUTPUT->main_content();
                    echo $OUTPUT->course_content_footer();
                ?>
            </div>
            <?php echo $OUTPUT->blocks('side-post', 'span4'); ?>
        </section>
    </div>

    <?php 
        if (is_siteadmin()) { 
            echo $OUTPUT->upoblocks(array('hidden-dock'), array('hidden-blocks', 'row-fluid'), get_string('visibleadminonly', 'theme_upo'));
        }
     ?>
    <?php echo $OUTPUT->upoblocks(array('footer-left', 'footer-middle', 'footer-right'), array('footer-blocks', 'row-fluid', 'flex-blocks')); ?>

<?php
 include('includes/footer.php');
?>
