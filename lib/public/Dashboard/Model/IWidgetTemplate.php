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


use OCP\Dashboard\IDashboardWidget;

/**
 * Interface IWidgetTemplate
 *
 * A widget must create an IWidgetTemplate object and returns it in the
 * IDashboardWidget::getWidgetTemplate method.
 *
 * @see IDashboardWidget::getWidgetTemplate
 *
 * @since 15.0.0
 *
 * @package OCP\Dashboard\Model
 */
interface IWidgetTemplate {


	/**
	 * Get CSS files to be included when displaying a widget
	 *
	 * @since 15.0.0
	 *
	 * @return array
	 */
	public function getCss(): array;

	/**
	 * Add a CSS file to be included when displaying a widget.
	 *
	 * @since 15.0.0
	 *
	 * @param string $css
	 *
	 * @return IWidgetTemplate
	 */
	public function addCss(string $css): IWidgetTemplate;

	/**
	 * Set an array of CSS files to be included when displaying a widget.
	 *
	 * @since 15.0.0
	 *
	 * @param array $css
	 *
	 * @return IWidgetTemplate
	 */
	public function setCss(array $css): IWidgetTemplate;


	/**
	 * Get JS files to be included when loading a widget
	 *
	 * @since 15.0.0
	 *
	 * @return array
	 */
	public function getJs(): array;

	/**
	 * Add a JS file to be included when loading a widget.
	 *
	 * @since 15.0.0
	 *
	 * @param string $js
	 *
	 * @return IWidgetTemplate
	 */
	public function addJs(string $js): IWidgetTemplate;

	/**
	 * Set an array of JS files to be included when loading a widget.
	 *
	 * @since 15.0.0
	 *
	 * @param array $js
	 *
	 * @return IWidgetTemplate
	 */
	public function setJs(array $js): IWidgetTemplate;


	/**
	 * Get the icon class of the widget.
	 *
	 * @since 15.0.0
	 *
	 * @return string
	 */
	public function getIcon(): string;

	/**
	 * Set the icon class of the widget.
	 * This class must be defined in one of the CSS file used by the widget.
	 *
	 * @see addCss
	 *
	 * @since 15.0.0
	 *
	 * @param string $icon
	 *
	 * @return IWidgetTemplate
	 */
	public function setIcon(string $icon): IWidgetTemplate;


	/**
	 * Get the HTML file that contains the content of the widget.
	 *
	 * @since 15.0.0
	 *
	 * @return string
	 */
	public function getContent(): string;

	/**
	 * Set the HTML file that contains the content of the widget.
	 *
	 * @since 15.0.0
	 *
	 * @param string $content
	 *
	 * @return IWidgetTemplate
	 */
	public function setContent(string $content): IWidgetTemplate;


	/**
	 * Get the JS function to be called when loading the widget.
	 *
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
	 * Get all IWidgetSetting defined for the widget.
	 *
	 * @see IWidgetSetting
	 *
	 * @since 15.0.0
	 *
	 * @return IWidgetSetting[]
	 */
	public function getSettings(): array;

	/**
	 * Define all IWidgetSetting for the widget.
	 *
	 * @since 15.0.0
	 *
	 * @see IWidgetSetting
	 *
	 * @param IWidgetSetting[] $settings
	 *
	 * @return IWidgetTemplate
	 */
	public function setSettings(array $settings): IWidgetTemplate;

	/**
	 * Add a IWidgetSetting.
	 *
	 * @see IWidgetSetting
	 *
	 * @since 15.0.0
	 *
	 * @param IWidgetSetting $setting
	 *
	 * @return IWidgetTemplate
	 */
	public function addSetting(IWidgetSetting $setting): IWidgetTemplate;

	/**
	 * Get a IWidgetSetting by its name
	 *
	 * @see IWidgetSetting::setName
	 *
	 * @since 15.0.0
	 *
	 * @param string $key
	 *
	 * @return IWidgetSetting
	 */
	public function getSetting(string $key): IWidgetSetting;

}

