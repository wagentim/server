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
 * @since 15.0.0
 *
 * Interface IWidgetSetup
 *
 * @package OCP\Dashboard\Model
 */
interface IWidgetSetup {


	const SIZE_TYPE_MIN = 'min';
	const SIZE_TYPE_MAX = 'max';
	const SIZE_TYPE_DEFAULT = 'default';


	/**
	 * @since 15.0.0
	 *
	 * @param string $type
	 *
	 * @return array
	 */
	public function getSize(string $type): array;

	/**
	 * @since 15.0.0
	 *
	 * @return array
	 */
	public function getSizes(): array;

	/**
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
	 * @since 15.0.0
	 *
	 * @return array
	 */
	public function getMenuEntries(): array;

	/**
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
	 * @since 15.0.0
	 *
	 * @param string $function
	 * @param int $delay
	 *
	 * @return IWidgetSetup
	 */
	public function addDelayedJob(string $function, int $delay): IWidgetsetup;

	/**
	 * @since 15.0.0
	 *
	 * @return array
	 */
	public function getDelayedJobs(): array;


	/**
	 * @since 15.0.0
	 *
	 * @return string
	 */
	public function getPush(): string;

	/**
	 * @since 15.0.0
	 *
	 * @param string $function
	 *
	 * @return IWidgetSetup
	 */
	public function setPush(string $function): IWidgetSetup;


	/**
	 * @since 15.0.0
	 *
	 * @return string
	 */
	public function getDefaultSettings(): array;

	/**
	 * @since 15.0.0
	 *
	 * @param string $function
	 *
	 * @return IWidgetSetup
	 */
	public function setDefaultSettings(array $settings): IWidgetSetup;


}

