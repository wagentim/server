<?php
declare(strict_types=1);


/**
 * Nextcloud - Dashboard App
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Maxence Lange <maxence@artificial-owl.com>
 * @copyright 2018, Maxence Lange <maxence@artificial-owl.com>
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OCP\Dashboard\Model;


/**
 * Interface IWidgetSetup
 *
 * A widget must create an IWidgetSetup object and returns it in the
 * IDashboardWidget::getWidgetSetup method.
 *
 * @see IDashboardWidget::getWidgetSetup
 *
 * @since 15.0.0
 *
 * @package OCP\Dashboard\Model
 */
interface IWidgetSetup {


	const SIZE_TYPE_MIN = 'min';
	const SIZE_TYPE_MAX = 'max';
	const SIZE_TYPE_DEFAULT = 'default';


	/**
	 * Get the defined size for a specific type (min, max, default)
	 * Returns an array:
	 * [
	 *   'width' => width,
	 *   'height' => height
	 * ]
	 *
	 *
	 * @since 15.0.0
	 *
	 * @param string $type
	 *
	 * @return array
	 */
	public function getSize(string $type): array;

	/**
	 * Returns all sizes defined for the widget.
	 *
	 * @since 15.0.0
	 *
	 * @return array
	 */
	public function getSizes(): array;

	/**
	 * Add a new size to the setup.
	 *
	 * @since 15.0.0
	 *
	 * @param string $type
	 * @param int $width
	 * @param int $height
	 *
	 * @return IWidgetSetup
	 */
	public function addSize(string $type, int $width, int $height): IWidgetsetup;


	/**
	 * Returns menu entries.
	 *
	 * @since 15.0.0
	 *
	 * @return array
	 */
	public function getMenuEntries(): array;

	/**
	 * Add a menu entry to the widget.
	 * $function is the Javascript function to be called when clicking the
	 *           menu entry.
	 * $icon is the css class of the icon.
	 * $text is the display name of the menu entry.
	 *
	 * @since 15.0.0
	 *
	 * @param string $function
	 * @param string $icon
	 * @param string $text
	 *
	 * @return IWidgetSetup
	 */
	public function addMenuEntry(string $function, string $icon, string $text): IWidgetSetup;


	/**
	 * Add a delayed job to the widget.
	 *
	 * $function is the Javascript function to be called.
	 * $delay is the time in seconds between each call.
	 *
	 * @since 15.0.0
	 *
	 * @param string $function
	 * @param int $delay
	 *
	 * @return IWidgetSetup
	 */
	public function addDelayedJob(string $function, int $delay): IWidgetsetup;

	/**
	 * Get delayed jobs.
	 *
	 * @since 15.0.0
	 *
	 * @return array
	 */
	public function getDelayedJobs(): array;


	/**
	 * Get the push function, called when an event is send to the front-end
	 *
	 * @since 15.0.0
	 *
	 * @return string
	 */
	public function getPush(): string;

	/**
	 * Set the Javascript function to be called when an event is pushed to the
	 * frontend.
	 *
	 * @since 15.0.0
	 *
	 * @param string $function
	 *
	 * @return IWidgetSetup
	 */
	public function setPush(string $function): IWidgetSetup;


	/**
	 * Returns the default settings for a widget.
	 *
	 * @since 15.0.0
	 *
	 * @return string
	 */
	public function getDefaultSettings(): array;

	/**
	 * Set the default settings for a widget.
	 * This method is used by the Dashboard app, using the settings created
	 * using IWidgetSetting
	 *
	 * @see IWidgetSetting
	 *
	 * @since 15.0.0
	 *
	 * @param string $function
	 *
	 * @return IWidgetSetup
	 */
	public function setDefaultSettings(array $settings): IWidgetSetup;


}

