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

$string['pluginname'] = 'FHGR Code Server';
$string['fhgr_code_server'] = 'FHGR Code Server';
$string['fhgr_code_server:addinstance'] = 'Add a new FHGR Code Server block';
$string['key'] = 'Access key';
$string['key_help'] = 'This key is required to connect to the Code Server. It is provided to you by the moodle administrator.';
$string['enterkey'] = 'Configure Block and enter \'Access key\'.';
$string['duringattempt'] = 'The link is only available during an active quiz attempt.';
$string['availabilitynotice'] = 'This Block needs to be available during "Attempt Quiz page" or "Any quiz module page". In addition, "Show blocks during quiz attempts" must be activated in the quiz settings.';
$string['mode'] = 'Mode';
$string['mode_exam'] = 'Exam';
$string['mode_mockexam_coding'] = 'Mock Exam / Coding practice';
$string['mode_help'] = 'Choose whether this block is used in an exam or mock exam / practice context. This changes how the Code Server is launched. It is important to choose the correct mode!';
$string['notice_maximum_users'] = 'This code server is designed for use by up to 50 students simultaneously. For larger groups, performance may be affected.';
$string['open_code_server'] = 'Open Code Server';