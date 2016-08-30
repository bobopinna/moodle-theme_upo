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
 * @copyright 2013 Roberto Pinna
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
?>

    <div id="course-footer"><?php echo $OUTPUT->course_footer(); ?></div>
</div> <!-- page -->

    <footer id="page-footer">
        <div class="footer-row">
            <div id="logoupo"><a href="http://www.uniupo.it"><img src="<?php echo $OUTPUT->pix_url('upo-red', 'theme'); ?>" alt="Universit&agrave; del Piemonte Orientale" /></a></div>
            <?php echo $OUTPUT->login_info(); ?>
            <div class="">
                <?php echo $OUTPUT->home_link(); ?>
                <?php echo $OUTPUT->page_doc_link(); ?>
                <?php echo $OUTPUT->standard_footer_html(); ?>
            </div>
        </div>
        <?php echo $html->footnote; ?>
        <?php echo $OUTPUT->standard_end_of_body_html(); ?>
    </footer>
</body>
</html>
