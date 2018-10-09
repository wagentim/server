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

namespace OC\Dashboard\Model;


use JsonSerializable;
use OCP\Dashboard\Model\IWidgetSetting;
use OCP\Dashboard\Model\IWidgetTemplate;


/**
 * @since 15.0.0
 *
 * Interface WidgetSetup
 *
 * @package OC\Dashboard\Model
 */
class WidgetTemplate implements IWidgetTemplate, JsonSerializable {


	/** @var string */
	private $icon = '';

	/** @var array */
	private $css = [];

	/** @var array */
	private $js = [];

	/** @var string */
	private $content = '';

	/** @var string */
	private $function = '';

	/** @var IWidgetSetting[] */
	private $settings = [];


	/**
	 * @since 15.0.0
	 *
	 * @return string
	 */
	public function getIcon(): string {
		return $this->icon;
	}

	/**
	 * @since 15.0.0
	 *
	 * @param string $icon
	 *
	 * @return IWidgetTemplate
	 */
	public function setIcon(string $icon): IWidgetTemplate {
		$this->icon = $icon;

		return $this;
	}

	/**
	 * @since 15.0.0
	 *
	 * @return array
	 */
	public function getCss(): array {
		return $this->css;
	}

	/**
	 * path and name of CSS files
	 *
	 * @since 15.0.0
	 *
	 * @param array $css
	 *
	 * @return IWidgetTemplate
	 */
	public function setCss(array $css): IWidgetTemplate {
		$this->css = $css;

		return $this;
	}

	/**
	 * @since 15.0.0
	 *
	 * @param string $css
	 *
	 * @return IWidgetTemplate
	 */
	public function addCss(string $css): IWidgetTemplate {
		$this->css[] = $css;

		return $this;
	}

	/**
	 * @since 15.0.0
	 *
	 * @return array
	 */
	public function getJs(): array {
		return $this->js;
	}

	/**
	 * path and name of JS files in an array
	 *
	 * @since 15.0.0
	 *
	 * @param array $js
	 *
	 * @return IWidgetTemplate
	 */
	public function setJs(array $js): IWidgetTemplate {
		$this->js = $js;

		return $this;
	}

	/**
	 * @since 15.0.0
	 *
	 * @param string $js
	 *
	 * @return IWidgetTemplate
	 */
	public function addJs(string $js): IWidgetTemplate {
		$this->js[] = $js;

		return $this;
	}

	/**
	 * @since 15.0.0
	 *
	 * @return string
	 */
	public function getContent(): string {
		return $this->content;
	}

	/**
	 * @since 15.0.0
	 *
	 * @param string $content
	 *
	 * @return IWidgetTemplate
	 */
	public function setContent(string $content): IWidgetTemplate {
		$this->content = $content;

		return $this;
	}

	/**
	 * @since 15.0.0
	 *
	 * @return string
	 */
	public function getInitFunction(): string {
		return $this->function;
	}

	/**
	 * @since 15.0.0
	 *
	 * @param string $function
	 *
	 * @return IWidgetTemplate
	 */
	public function setInitFunction(string $function): IWidgetTemplate {
		$this->function = $function;

		return $this;
	}

	/**
	 * @return IWidgetSetting[]
	 */
	public function getSettings(): array {
		return $this->settings;
	}

	/**
	 * @param IWidgetSetting[] $settings
	 *
	 * @return IWidgetTemplate
	 */
	public function setSettings(array $settings): IWidgetTemplate {
		$this->settings = $settings;

		return $this;
	}

	/**
	 * @param IWidgetSetting $setting
	 *
	 * @return $this
	 */
	public function addSetting(IWidgetSetting $setting): IWidgetTemplate {
		$this->settings[] = $setting;

		return $this;
	}

	/**
	 * @param string $key
	 *
	 * @return IWidgetSetting
	 */
	public function getSetting(string $key): IWidgetSetting {
		if (!array_key_exists($key, $this->settings)) {
			return null;
		}

		return $this->settings[$key];
	}


	/**
	 * @return array
	 */
	public function jsonSerialize() {
		return [
			'icon' => $this->getIcon(),
			'css' => $this->getCss(),
			'js' => $this->getJs(),
			'content' => $this->getContent(),
			'function' => $this->getInitFunction(),
			'settings' => $this->getSettings()
		];
	}


}

