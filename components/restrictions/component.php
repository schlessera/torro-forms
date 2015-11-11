<?php
/**
 * Awesome Forms Restrictions Component
 *
 * @author  awesome.ug, Author <support@awesome.ug>
 * @package AwesomeForms/Restrictions
 * @version 2015-04-16
 * @since   1.0.0
 * @license GPL 2
 *
 *
 * Copyright 2015 awesome.ug (support@awesome.ug)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

if( !defined( 'ABSPATH' ) )
{
	exit;
}

class AF_Restrictions_Component extends AF_Component
{

	/**
	 * Initializes the Component.
	 *
	 * @since 1.0.0
	 */
	public function init()
	{
		$this->name = 'restrictions';
		$this->title = esc_attr__( 'Restrictions', 'af-locale' );
		$this->description = esc_attr__( 'Restrictions if a user can fillout a form or not', 'af-locale' );
	}

	/**
	 * Including files of component
	 */
	public function includes()
	{
		$folder = AF_COMPONENTFOLDER . 'restrictions/';

		// Loading base functionalities
		require_once( $folder . 'settings.php' );
		require_once( $folder . 'form-builder-extension.php' );
		require_once( $folder . 'form-process-extension.php' );

		// Restrictions API
		require_once( $folder . 'abstract/class-restrictions.php' );

		// Base Restrictions
		require_once( $folder . 'base-restrictions/all-visitors.php' );
		require_once( $folder . 'base-restrictions/all-members.php' );
		require_once( $folder . 'base-restrictions/selected-members.php' );
		require_once( $folder . 'base-restrictions/timerange.php' );
	}

	/**
	 * Enqueue Scripts
	 */
	public function admin_scripts()
	{
		wp_enqueue_script( 'af-restrictions', AF_URLPATH . 'components/restrictions/includes/js/restrictions.js' );
	}

}

af_register_component( 'AF_Restrictions_Component' );