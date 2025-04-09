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

class block_fhgr_code_server extends block_base {

    public function init() {
        $this->title = get_string('fhgr_code_server', 'block_fhgr_code_server');
    }

    public function get_content() {
        global $USER, $COURSE;

        if ($this->content !== null) {
            return $this->content;
        }

        $this->content = new stdClass();
        $key = isset($this->config->key) ? $this->config->key : null;

        if (!$key) {
            $this->content->text = get_string('enterkey', 'block_fhgr_code_server');
            return $this->content;
        }

        $userid = $USER->id;
        $fullname = fullname($USER);

        $courseid = optional_param('courseid', 0, PARAM_INT);
        if (!$courseid && isset($COURSE->id)) {
            $courseid = $COURSE->id;
        }

        $username = $USER->username;
        $url = "https://python.fhgr.ch/dispatch/create?t=e&k={$key}&m={$courseid}&u={$userid}&e={$fullname}";

        $this->content->text = html_writer::link($url, "Open Code Server", ['target' => '_blank']);
        return $this->content;
    }

    public function has_config() {
        return false;
    }

    public function applicable_formats() {
        return [
            'mod-quiz' => true, // only allow to add this block in Quiz
            'all' => false       // not available in other context
        ];
    }    
}
