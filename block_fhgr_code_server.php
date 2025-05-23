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

        $additionaltext;
        if (has_capability('moodle/course:update', $this->context)) {
            // Only lecturers (editing teachers, managers, etc.) will see this
            $mode = $this->config->mode ?? 'exam';
            if ($mode === 'exam') {
                $additionaltext = "<p><br>" . get_string('mode_exam', 'block_fhgr_code_server') . " " . get_string('mode', 'block_fhgr_code_server');
            }
            else if ($mode === 'mockexam_coding')
            {
                $additionaltext = "<p><br>" . get_string('mode_mockexam_coding', 'block_fhgr_code_server') . " " . get_string('mode', 'block_fhgr_code_server');
            }
            $additionaltext = "<p><br>" . get_string('notice_maximum_users', 'block_fhgr_code_server');
        }

        if (!$key) {
            $this->content->text = get_string('enterkey', 'block_fhgr_code_server') . "\n" . get_string('availabilitynotice', 'block_fhgr_code_server') . $additionaltext;
            return $this->content;
        }

        if ($this->page->pagetype !== 'mod-quiz-attempt') {
            $this->content->text = get_string('duringattempt', 'block_fhgr_code_server') . $additionaltext;
            return $this->content;
        }

        $userid = $USER->id;
        $fullname = fullname($USER);

        $courseid = optional_param('courseid', 0, PARAM_INT);
        if (!$courseid && isset($COURSE->id)) {
            $courseid = $COURSE->id;
        }

        $username = $USER->username;
        $mode = $this->config->mode ?? 'exam';
        if ($mode === 'exam') {
            $url = "https://python.fhgr.ch/dispatch/create?t=e&k={$key}&m={$courseid}&u={$userid}&e={$fullname}";
        } else if ($mode === 'mockexam_coding') {
            $url = "https://python.fhgr.ch/dispatch/create?t=c&k={$key}&m={$courseid}&u={$userid}&e={$fullname}";
        }

        $this->content->text = html_writer::link($url, get_string('open_code_server', 'block_fhgr_code_server'), ['target' => '_blank']) . $additionaltext;
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
