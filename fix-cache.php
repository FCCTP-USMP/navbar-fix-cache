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
 * This script fetches legacy course files in dataroot directory, it is enabled
 * only if course->legacyfiles == 2. DO not link to this file in new code.
 *
 * Syntax:      file.php/courseid/dir/dir/dir/filename.ext
 *              file.php/courseid/dir/dir/dir/filename.ext?forcedownload=1 (download instead of inline)
 *              file.php/courseid/dir (returns index.html from dir)
 * Workaround:  file.php?file=/courseid/dir/dir/dir/filename.ext
 *
 * @package    core
 * @subpackage file
 * @copyright  1999 onwards Martin Dougiamas (http://dougiamas.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// disable moodle specific debug messages and any errors in output
define('NO_DEBUG_DISPLAY', true);

require_once('config.php');

purge_caches([
  'muc' => true,
]);

$RETURN_URL = new moodle_url('/');
redirect($RETURN_URL, "Operación Exitosa. Si el problema persiste pongase en contacto con el administrador.", null, \core\output\notification::NOTIFY_SUCCESS);
