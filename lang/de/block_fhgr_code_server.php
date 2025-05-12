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
$string['fhgr_code_server:addinstance'] = 'Neuen FHGR Code Server-Block hinzufügen';
$string['key'] = 'Zugangsschlüssel';
$string['key_help'] = 'Dieser Schlüssel ist erforderlich, um eine Verbindung zum Code Server herzustellen. Du erhältst ihn vom Moodle Administratior.';
$string['enterkey'] = 'Block konfigurieren und "Zugangsschlüssel" eingeben.';
$string['duringattempt'] = 'Der Link ist nur während eines aktiven Quizversuchs verfügbar.';
$string['availabilitynotice'] = 'Dieser Block muss auf der Seite "Quizversuch starten" oder auf einer beliebigen Quiz-Seite verfügbar sein.';
$string['mode'] = 'Modus';
$string['mode_exam'] = 'Prüfung';
$string['mode_mockexam_coding'] = 'Probeprüfung / Übung';
$string['mode_help'] = 'Wähle aus, ob dieser Block in einem Prüfungs- oder Übungskontext verwendet wird. Dies beeinflusst, wie der Code Server gestartet wird. Es ist wichtig, den richtigen Modus zu wählen!';
$string['notice_maximum_users'] = 'Dieser Code Server ist für die gleichzeitige Nutzung durch bis zu 50 Studierende ausgelegt. Bei grösseren Gruppen kann die Leistung beeinträchtigt werden.';
$string['open_code_server'] = 'Code Server öffnen';