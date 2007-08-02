<?php
// IF YOU HAVE NOT DONE SO, PLEASE READ THE README FILE FOR DIRECTIONS!!!

/**
 * phpMyID - A standalone, single user, OpenID Identity Provider
 *
 * @package phpMyID
 * @author CJ Niemira <siege (at) siege (dot) org>
 * @copyright 2006-2007
 * @license http://www.gnu.org/licenses/gpl.html GNU Public License
 * @url http://siege.org/projects/phpMyID
 * @version 2
 */


/**
 * User profile
 * @name $profile
 * @global array $GLOBALS['profile']
 */
$GLOBALS['profile'] = array(
	'auth_username'	=> 	'test',
	'auth_password' =>	'37fa04faebe5249023ed1f6cc867329b',
	'auth_realm'	=>	'phpMyID',

#	'allow_test'	=> 	true,
#	'debug'		=>	false,
#	'logfile'	=>	'/tmp/phpMyID.debug.log'
);

/**
 * Simple Registration Extension
 * @name $sreg
 * @global array $GLOBALS['sreg']
 */
$GLOBALS['sreg'] = array (
#	'nickname'		=> 'Joe',
#	'email'			=> 'joe@example.com',
#	'fullname'		=> 'Joe Example',
#	'dob'			=> '1970-10-31',
#	'gender'		=> 'M',
#	'postcode'		=> '22000',
#	'country'		=> 'US',
#	'language'		=> 'en',
#	'timezone'		=> 'America/New_York'
);

include('MyID.php');
?>
