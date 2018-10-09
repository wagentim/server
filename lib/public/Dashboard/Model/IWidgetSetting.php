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
 * Interface IWidgetSetting
 *
 * @package OCP\Dashboard\Model
 */
interface IWidgetSetting {


	const TYPE_INPUT = 'input';
	const TYPE_CHECKBOX = 'checkbox';


	/**
	 * @since 15.0.0
	 *
	 * @param string $name
	 *
	 * @return IWidgetSetting
	 */
	public function setName(string $name): IWidgetSetting;

	/**
	 * @since 15.0.0
	 *
	 * @return string
	 */
	public function getName(): string;


	/**
	 * @since 15.0.0
	 *
	 * @param string $title
	 *
	 * @return IWidgetSetting
	 */
	public function setTitle(string $title): IWidgetSetting;

	/**
	 * @since 15.0.0
	 *
	 * @return string
	 */
	public function getTitle(): string;


	/**
	 * @since 15.0.0
	 *
	 * @param string $type
	 *
	 * @return IWidgetSetting
	 */
	public function setType(string $type): IWidgetSetting;

	/**
	 * @since 15.0.0
	 *
	 * @return string
	 */
	public function getType(): string;


	/**
	 * @since 15.0.0
	 *
	 * @param string $text
	 *
	 * @return IWidgetSetting
	 */
	public function setPlaceholder(string $text): IWidgetSetting;

	/**
	 * @since 15.0.0
	 *
	 * @return string
	 */
	public function getPlaceholder(): string;


	/**
	 * @since 15.0.0
	 *
	 * @param string $value
	 *
	 * @return IWidgetSetting
	 */
	public function setDefault(string $value): IWidgetSetting;

	/**
	 * @since 15.0.0
	 *
	 * @return string
	 */
	public function getDefault(): string;

}

