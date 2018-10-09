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
 * Interface IWidgetTemplate
 *
 * @package OCP\Dashboard\Model
 */
interface IWidgetTemplate {


	/**
	 * @since 15.0.0
	 *
	 * @return array
	 */
	public function getCss(): array;

	/**
	 * path and name of CSS file
	 *
	 * @since 15.0.0
	 *
	 * @param string $css
	 *
	 * @return IWidgetTemplate
	 */
	public function addCss(string $css): IWidgetTemplate;

	/**
	 * path and name of CSS files
	 *
	 * @since 15.0.0
	 *
	 * @param array $css
	 *
	 * @return IWidgetTemplate
	 */
	public function setCss(array $css): IWidgetTemplate;


	/**
	 * @since 15.0.0
	 *
	 * @return array
	 */
	public function getJs(): array;

	/**
	 * path and name of JS file
	 *
	 * @since 15.0.0
	 *
	 * @param string $js
	 *
	 * @return IWidgetTemplate
	 */
	public function addJs(string $js): IWidgetTemplate;

	/**
	 * path and name of JS files in an array
	 *
	 * @since 15.0.0
	 *
	 * @param array $js
	 *
	 * @return IWidgetTemplate
	 */
	public function setJs(array $js): IWidgetTemplate;


	/**
	 * @since 15.0.0
	 *
	 * @return string
	 */
	public function getIcon(): string;

	/**
	 * Css class of the icon used by the widget.
	 * This class must be defined in one of the css used by the widget.
	 *
	 * @since 15.0.0
	 *
	 * @param string $icon
	 *
	 * @return IWidgetTemplate
	 */
	public function setIcon(string $icon): IWidgetTemplate;


	/**
	 * @since 15.0.0
	 *
	 * @return string
	 */
	public function getContent(): string;

	/**
	 * path to the HTML Template of the widget,
	 *
	 * @since 15.0.0
	 *
	 * @param string $content
	 *
	 * @return IWidgetTemplate
	 */
	public function setContent(string $content): IWidgetTemplate;


	/**
	 * @since 15.0.0
	 *
	 * @return string
	 */
	public function getInitFunction(): string;

	/**
	 * JavaScript function to be called when loading the widget on the
	 * dashboard
	 *
	 * @since 15.0.0
	 *
	 * @param string $function
	 *
	 * @return IWidgetTemplate
	 */
	public function setInitFunction(string $function): IWidgetTemplate;


	/**
	 * @since 15.0.0
	 *
	 * @return array
	 */
	public function getSettings(): array;

	/**
	 * @since 15.0.0
	 *
	 * @param array $settings
	 *
	 * @return IWidgetTemplate
	 */
	public function setSettings(array $settings): IWidgetTemplate;

	/**
	 * @since 15.0.0
	 *
	 * @param IWidgetSetting $setting
	 *
	 * @return IWidgetTemplate
	 */
	public function addSetting(IWidgetSetting $setting): IWidgetTemplate;

	/**
	 * @since 15.0.0
	 *
	 * @param string $key
	 *
	 * @return IWidgetSetting
	 */
	public function getSetting(string $key): IWidgetSetting;

}

