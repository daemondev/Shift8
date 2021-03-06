<?php
/**
 * This file is part of Shift8.
 *
 * Shift8 is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Shift8 is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Shift8.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

/**
 * Provides a Syslog debug listener that syslogs the messages
 * retrieved from the Shift8 library
 *
 * @package Shift8
 * @author Paris Stamatopoulos
 * @version 0.1
 */
class Shift8_Debug_Listener_Syslog extends Shift8_Debug_Listener {
	public function debug( $message ) {
		$_time = time();

		syslog(LOG_DEBUG, "[Shift8] [$_time]: Request in url: " . $message['url']);
		syslog(LOG_DEBUG, "[Shift8] [$_time]: Request parameters: " . implode(",", $message['parameters']));
		syslog(LOG_DEBUG, "[Shift8] [$_time]: Response: " . $message['response']);
		syslog(LOG_DEBUG, "[Shift8] [$_time]: Cookie value: " . $message['cookie']);
	}
}
