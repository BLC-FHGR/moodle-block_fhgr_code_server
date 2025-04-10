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
 * Block FHGR Code Server - Version file
 *
 * @package    block_fhgr_code_server
 * @copyright  2025 FHGR Ramon Heeb
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once($CFG->dirroot . '/blocks/edit_form.php');

class block_fhgr_code_server_edit_form extends block_edit_form {
    protected function specific_definition($mform) {
        $mform->addElement('text', 'config_key', get_string('key', 'block_fhgr_code_server'));
        $mform->setType('config_key', PARAM_TEXT);
        //setting to choose between exam and coding instance
        $mform->addElement('select', 'config_mode', get_string('mode', 'block_fhgr_code_server'), [
            'exam' => get_string('mode_exam', 'block_fhgr_code_server'),
            'mockexam_coding' => get_string('mode_mockexam_coding', 'block_fhgr_code_server')
        ]);
        $mform->setDefault('config_mode', 'exam');
    }
}
