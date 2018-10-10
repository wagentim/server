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
 * Interface IWidgetEvent
 *
 * WidgetEvent are created by the Dashboard App and mostly managed by the app.
 * Those objects are used to communicate from the backend to the frontend and
 * App that create Widgets should not need to directly interact with it.
 *
 * @since 15.0.0
 *
 * @package OCP\Dashboard\Model
 */
interface IWidgetEvent {

	const BROADCAST_USER = 'user';
	const BROADCAST_GROUP = 'group';
	const BROADCAST_GLOBAL = 'global';

	/**
	 * Return the id of the event.
	 *
	 * @since 15.0.0
	 *
	 * @return int
	 */
	public function getId(): int;

	/**
	 * Set the id of the event
	 *
	 * @since 15.0.0
	 *
	 * @param int $id
	 *
	 * @return $this
	 */
	public function setId(int $id): IWidgetEvent;


	/**
	 * Returns the widgetId
	 *
	 * @since 15.0.0
	 *
	 * @return string
	 */
	public function getWidgetId(): string;

	/**
	 * Set the widgetId
	 *
	 * @since 15.0.0
	 *
	 * @param string $widgetId
	 *
	 * @return $this
	 */
	public function setWidgetId(string $widgetId): IWidgetEvent;


	/**
	 * Returns the type of broadcast for this event: user, group, global
	 *
	 * @since 15.0.0
	 *
	 * @return string
	 */
	public function getBroadcast(): string;


	/**
	 * Get the recipient for the event (userId, groupId).
	 *
	 * @since 15.0.0
	 *
	 * @return string
	 */
	public function getRecipient(): string;

	/**
	 * Set the type of broadcast of the recipient of the event.
	 *
	 * @since 15.0.0
	 *
	 * @param string $broadcast
	 * @param string $recipient
	 *
	 * @return $this
	 */
	public function setRecipient(string $broadcast, string $recipient): IWidgetEvent;


	/**
	 * Get the content/payload of the event.
	 *
	 * @since 15.0.0
	 *
	 * @return array
	 */
	public function getPayload(): array;

	/**
	 * Set the content/payload of the event.
	 *
	 * @since 15.0.0
	 *
	 * @param array $payload
	 *
	 * @return $this
	 */
	public function setPayload(array $payload): IWidgetEvent;


	/**
	 * Get the uniqueId of the event. Used when the same event is sent to
	 * multiple users, or multiple groups
	 *
	 * @since 15.0.0
	 *
	 * @return string
	 */
	public function getUniqueId(): string;

	/**
	 * Set the uniqueId of the event.
	 *
	 * @since 15.0.0
	 *
	 * @param string $uniqueId
	 *
	 * @return $this
	 */
	public function setUniqueId(string $uniqueId): IWidgetEvent;


	/**
	 * Get the creation timestamp.
	 *
	 * @since 15.0.0
	 *
	 * @return int
	 */
	public function getCreation(): int;

	/**
	 * Set the creation timestamp.
	 *
	 * @since 15.0.0
	 *
	 * @param int $creation
	 *
	 * @return $this
	 */
	public function setCreation(int $creation): IWidgetEvent;

}

