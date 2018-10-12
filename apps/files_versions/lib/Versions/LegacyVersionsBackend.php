<?php
declare(strict_types=1);
/**
 * @copyright Copyright (c) 2018 Robin Appelman <robin@icewind.nl>
 *
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

namespace OCA\Files_Versions\Versions;

use OC\Files\SimpleFS\SimpleFile;
use OCA\Files_Versions\Storage;
use OCP\Files\File;
use OCP\Files\FileInfo;
use OCP\Files\Folder;
use OCP\Files\IRootFolder;
use OCP\Files\SimpleFS\ISimpleFile;
use OCP\IPreview;
use OCP\IUser;

class LegacyVersionsBackend implements IVersionBackend {
	/** @var IRootFolder */
	private $rootFolder;

	/** @var IPreview */
	private $previewManager;

	public function __construct(IRootFolder $rootFolder, IPreview $previewManager) {
		$this->rootFolder = $rootFolder;
		$this->previewManager = $previewManager;
	}

	public function getVersionsForFile(IUser $user, FileInfo $file): array {
		$userFolder = $this->rootFolder->getUserFolder($user->getUID());
		$versions = Storage::getVersions($user->getUID(), $userFolder->getRelativePath($file->getPath()));

		return array_map(function (array $data) use ($file, $user) {
			return new Version(
				(int)$data['version'],
				(int)$data['version'],
				$data['name'],
				(int)$data['size'],
				$data['mimetype'],
				$data['path'],
				$file,
				$this,
				$user
			);
		}, $versions);
	}

	public function rollback(IVersion $version) {
		return Storage::rollback($version->getVersionPath(), $version->getRevisionId());
	}

	public function read(IVersion $version) {
		/** @var Version $version */
		/** @var Folder $versions */
		$versions = $this->rootFolder->getUserFolder($version->getUser()->getUID())
			->getParent()
			->get('files_versions');
		/** @var File $file */
		$file = $versions->get($version->getVersionPath() . '.v' . $version->getRevisionId());
		return $file->fopen('r');
	}

	public function getVersionFile(IUser $user, FileInfo $sourcefile, int $revision): File {
		$userFolder = $this->rootFolder->getUserFolder($user->getUID());
		$versionFolder = $userFolder->getParent()->get('files_versions');
		return $versionFolder->get($userFolder->getRelativePath($sourcefile->getPath()) . '.v' . $revision);
	}
}
