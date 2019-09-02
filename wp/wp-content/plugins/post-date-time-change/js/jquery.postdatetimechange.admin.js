/**
 * Post Date Time Change
 *
 * @package    Post Date Time Change
 * @subpackage jquery.postdatetimechange.admin.js
/*
	Copyright (c) 2018- Katsushi Kawamori (email : dodesyoswift312@gmail.com)
	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; version 2 of the License.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 */

jQuery(
	function(){

		/* Responsive Tabs */
		jQuery( '#postdatetimechange-admin-tabs' ).responsiveTabs(
			{
				startCollapsed: 'accordion'
			}
		);

		/* Control of the Enter key */
		jQuery( 'input[type!="submit"][type!="button"]' ).keypress(
			function(e){
				if ((e.which && e.which == 13) || (e.keyCode && e.keyCode == 13)) {
					return false;
				} else {
					return true;
				}
			}
		);

	}
);
