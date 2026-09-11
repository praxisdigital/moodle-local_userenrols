<?php

/**
 *  local_userenrols
 *
 *  This plugin will import user enrollments and group assignments
 *  from a delimited text file. It does not create new user accounts
 *  in Moodle, it will only enroll existing users in a course.
 *
 * @author      Fred Woolard <woolardfa@appstate.edu>
 * @copyright   (c) 2013 Appalachian State Universtiy, Boone, NC
 * @license     GNU General Public License version 3
 * @package     local_userenrols
 */

defined('MOODLE_INTERNAL') || die();

/** @var object $plugin */
$plugin->version    = 2026090900;
$plugin->requires   = 2026042000;
$plugin->release    = "0.0.12_00 (Build 2026090900)";
$plugin->component  = 'local_userenrols';
$plugin->maturity   = MATURITY_STABLE;