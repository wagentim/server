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


/**
 * @since 15.0.0
 *
 * Interface WidgetSetting
 *
 * @package OC\Dashboard\Model
 */
class WidgetSetting implements IWidgetSetting, JsonSerializable {


	/** @var string */
	private $name = '';

	/** @var string */
	private $title = '';

	/** @var string */
	private $type = '';

	/** @var string */
	private $placeholder = '';

	/** @var string */
	private $default = '';


	/**
	 * WidgetSetting constructor.
	 *
	 * @param string $type
	 */
	public function __construct(string $type = '') {
		$this->type = $type;
	}


	/**
	 * @since 15.0.0
	 *
	 * @param string $name
	 *
	 * @return IWidgetSetting
	 */
	public function setName(string $name): IWidgetSetting {
		$this->name = $name;

		return $this;
	}

	/**
	 * @since 15.0.0
	 *
	 * @return string
	 */
	public function getName(): string {
		return $this->name;
	}


	/**
	 * @since 15.0.0
	 *
	 * @param string $title
	 *
	 * @return IWidgetSetting
	 */
	public function setTitle(string $title): IWidgetSetting {
		$this->title = $title;

		return $this;
	}

	/**
	 * @since 15.0.0
	 *
	 * @return string
	 */
	public function getTitle(): string {
		return $this->title;
	}


	/**
	 * @since 15.0.0
	 *
	 * @param string $type
	 *
	 * @return IWidgetSetting
	 */
	public function setType(string $type): IWidgetSetting {
		$this->type = $type;

		return $this;
	}

	/**
	 * @since 15.0.0
	 *
	 * @return string
	 */
	public function getType(): string {
		return $this->type;
	}


	/**
	 * @since 15.0.0
	 *
	 * @param string $text
	 *
	 * @return IWidgetSetting
	 */
	public function setPlaceholder(string $text): IWidgetSetting {
		$this->placeholder = $text;

		return $this;
	}

	/**
	 * @since 15.0.0
	 *
	 * @return string
	 */
	public function getPlaceholder(): string {
		return $this->placeholder;
	}


	/**
	 * @since 15.0.0
	 *
	 * @param string $value
	 *
	 * @return IWidgetSetting
	 */
	public function setDefault(string $value): IWidgetSetting {
		$this->default = $value;

		return $this;
	}

	/**
	 * @since 15.0.0
	 *
	 * @return string
	 */
	public function getDefault(): string {
		return $this->default;
	}


	/**
	 * @return array
	 */
	public function jsonSerialize() {
		return [
			'name'        => $this->getName(),
			'title'       => $this->getTitle(),
			'type'        => $this->getTitle(),
			'default'     => $this->getDefault(),
			'placeholder' => $this->getPlaceholder()
		];
	}


}

