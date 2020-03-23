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
 * Local plugin "Boost navigation fumbling" - Event handlers
 *
 * @package    local_boostnavigation
 * @copyright  2019 Alexander Bias, Ulm University <alexander.bias@uni-ulm.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$observers = [
        [
                'eventname' => '\core\event\user_loggedin',
                'callback' => '\local_boostnavigation\eventobservers::user_loggedin'
        ],
        [
                'eventname' => '\core\event\user_loggedout',
                'callback' => '\local_boostnavigation\eventobservers::user_loggedout'
        ],
        [
                'eventname' => '\core\event\cohort_member_added',
                'callback' => '\local_boostnavigation\eventobservers::cohort_member_added',
        ],
        [
                'eventname' => '\core\event\cohort_member_removed',
                'callback' => '\local_boostnavigation\eventobservers::cohort_member_removed',
        ],
        [
                'eventname' => '\core\event\cohort_updated',
                'callback' => '\local_boostnavigation\eventobservers::cohort_updated',
        ],
        [
                'eventname' => '\core\event\cohort_deleted',
                'callback' => '\local_boostnavigation\eventobservers::cohort_deleted',
        ],
];
