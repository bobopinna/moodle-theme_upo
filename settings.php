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
 * Theme UPO settings.
 *
 * Each setting that is defined in the parent theme Clean should be
 * defined here too, and use the exact same config name. The reason
 * is that theme_upo does not define any layout files to re-use the
 * ones from theme_clean. But as those layout files use the function
 * {@link theme_clean_get_html_for_settings} that belong to Clean,
 * we have to make sure it works as expected by having the same settings
 * in our theme.
 *
 * @see        theme_clean_get_html_for_settings
 * @package    theme_upo
 * @copyright  2014 Roberto Pinna
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    // @textColor setting.
    $name = 'theme_upo/textcolor';
    $title = get_string('textcolor', 'theme_upo');
    $description = get_string('textcolor_desc', 'theme_upo');
    $default = '#000000';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // @linkColor setting.
    $name = 'theme_upo/linkcolor';
    $title = get_string('linkcolor', 'theme_upo');
    $description = get_string('linkcolor_desc', 'theme_upo');
    //$default = '#A91E23'; // Rosso scuro sito
    //$default = '#CE181E'; // Pantone 484
    $default = '#0070A8'; // Blue Moodle Site
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // @bodyBackground setting.
    $name = 'theme_upo/bodybackground';
    $title = get_string('bodybackground', 'theme_upo');
    $description = get_string('bodybackground_desc', 'theme_upo');
    //$default = '#CCCCCC';
    $default = '#FFFFFF';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Background image setting.
    $name = 'theme_upo/backgroundimage';
    $title = get_string('backgroundimage', 'theme_upo');
    $description = get_string('backgroundimage_desc', 'theme_upo');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'backgroundimage');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Background repeat setting.
    $name = 'theme_upo/backgroundrepeat';
    $title = get_string('backgroundrepeat', 'theme_upo');
    $description = get_string('backgroundrepeat_desc', 'theme_upo');;
    $default = 'repeat';
    $choices = array(
        '0' => get_string('default'),
        'repeat' => get_string('backgroundrepeatrepeat', 'theme_upo'),
        'repeat-x' => get_string('backgroundrepeatrepeatx', 'theme_upo'),
        'repeat-y' => get_string('backgroundrepeatrepeaty', 'theme_upo'),
        'no-repeat' => get_string('backgroundrepeatnorepeat', 'theme_upo'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Background position setting.
    $name = 'theme_upo/backgroundposition';
    $title = get_string('backgroundposition', 'theme_upo');
    $description = get_string('backgroundposition_desc', 'theme_upo');
    $default = '0';
    $choices = array(
        '0' => get_string('default'),
        'left_top' => get_string('backgroundpositionlefttop', 'theme_upo'),
        'left_center' => get_string('backgroundpositionleftcenter', 'theme_upo'),
        'left_bottom' => get_string('backgroundpositionleftbottom', 'theme_upo'),
        'right_top' => get_string('backgroundpositionrighttop', 'theme_upo'),
        'right_center' => get_string('backgroundpositionrightcenter', 'theme_upo'),
        'right_bottom' => get_string('backgroundpositionrightbottom', 'theme_upo'),
        'center_top' => get_string('backgroundpositioncentertop', 'theme_upo'),
        'center_center' => get_string('backgroundpositioncentercenter', 'theme_upo'),
        'center_bottom' => get_string('backgroundpositioncenterbottom', 'theme_upo'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Background fixed setting.
    $name = 'theme_upo/backgroundfixed';
    $title = get_string('backgroundfixed', 'theme_upo');
    $description = get_string('backgroundfixed_desc', 'theme_upo');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Main content background color.
    $name = 'theme_upo/contentbackground';
    $title = get_string('contentbackground', 'theme_upo');
    $description = get_string('contentbackground_desc', 'theme_upo');
    $default = '#FFFFFF';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Main color.
    $name = 'theme_upo/maincolor';
    $title = get_string('maincolor', 'theme_upo');
    $description = get_string('maincolor_desc', 'theme_upo');
    //$default = '#D1232A'; // Pantone 484 Grabbed
    //$default = '#CE181E'; // Pantone 484 Ufficio Comunicazione
    //$default = '#9B301C'; // Pantone 484 Ufficio Comunicazione
    //$default = '#D4341D'; // Definitivo utilizzato sul www.dir.uniupo.it
    $default = '#000000'; // Nero
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Main inverse color.
    $name = 'theme_upo/maininversecolor';
    $title = get_string('maininversecolor', 'theme_upo');
    $description = get_string('maininversecolor_desc', 'theme_upo');
    $default = '#FFFFFF';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Secondary color.
    $name = 'theme_upo/secondarycolor';
    $title = get_string('secondarycolor', 'theme_upo');
    $description = get_string('secondarycolor_desc', 'theme_upo');
    //$default = '#8A8A8D'; // Pantone Cool Gray 8
    $default = '#CCCCCC'; // Light Gray
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Secondary inverse color.
    $name = 'theme_upo/secondaryinversecolor';
    $title = get_string('secondaryinversecolor', 'theme_upo');
    $description = get_string('secondaryinversecolor_desc', 'theme_upo');
    //$default = '#FFFFFF';
    $default = '#000000';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Logo file setting.
    $name = 'theme_upo/logo';
    $title = get_string('logo','theme_upo');
    $description = get_string('logodesc', 'theme_upo');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Footer Logo file setting.
    $name = 'theme_upo/footerlogo';
    $title = get_string('footerlogo','theme_upo');
    $description = get_string('footerlogodesc', 'theme_upo');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'footerlogo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Footer Logo alt.
    $name = 'theme_upo/footerlogoalt';
    $title = get_string('footerlogoalt', 'theme_upo');
    $description = get_string('footerlogoaltdesc', 'theme_upo');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Footer Logo link.
    $name = 'theme_upo/footerlogolink';
    $title = get_string('footerlogolink', 'theme_upo');
    $description = get_string('footerlogolinkdesc', 'theme_upo');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);


    // Include Awesome Font from Bootstrapcdn
    $name = 'theme_upo/awesomefont';
    $title = get_string('awesomefont', 'theme_upo');
    $description = get_string('awesomefontdesc', 'theme_upo');
    $default = '0';
    $choices = array(
        '0' => get_string('noawesomefont', 'theme_upo'),
        'local' => get_string('localawesomefont', 'theme_upo'),
        'bootstrapcdn' => get_string('bootstrapcdnawesomefont', 'theme_upo')
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    
    // Custom CSS file.
    $name = 'theme_upo/customcss';
    $title = get_string('customcss', 'theme_upo');
    $description = get_string('customcssdesc', 'theme_upo');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Footnote setting.
    $name = 'theme_upo/footnote';
    $title = get_string('footnote', 'theme_upo');
    $description = get_string('footnotedesc', 'theme_upo');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
}
