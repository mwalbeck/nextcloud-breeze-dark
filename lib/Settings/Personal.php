<?php
/**
 * Breeze Dark theme for Nextcloud
 * 
 * @copyright Copyright (C) 2020  Magnus Walbeck <mw@mwalbeck.org>
 * 
 * @author Magnus Walbeck <mw@mwalbeck.org>
 * 
 * @license GNU AGPL version 3 or any later version
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
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


namespace OCA\BreezeDark\Settings;

use OCP\Settings\ISettings;
use OCP\AppFramework\Http\TemplateResponse;
use OCP\IConfig;
use OCP\IUserSession;

class Personal implements ISettings {

	/** @var string */
	protected $appName = "breezedark";

	/** @var IConfig */
	private $config;

	/** @var IUserSession */
	private $userId;

	/**
	 * @param IConfig $config
	 */
	public function __construct(IConfig $config,
								IUserSession $userSession) {
		$this->config = $config;
		$this->userId = $userSession->getUser()->getUID();
	}

	/**
	 * @return TemplateResponse
	 */
	public function getForm() {
		$themeEnabled = $this->config->getUserValue($this->userId, $this->appName, 'enabled', "0");
		return new TemplateResponse('breezedark', 'personal', [ 
			"themeEnabled" => $themeEnabled
		]);
	}

	/**
	 * @return string the section ID, e.g. 'sharing'
	 */
	public function getSection() {
		return 'accessibility';
	}

	/**
	 * @return int whether the form should be rather on the top or bottom of
	 * the admin section. The forms are arranged in ascending order of the
	 * priority values. It is required to return a value between 0 and 100.
	 *
	 * E.g.: 70
	 */
	public function getPriority() {
		return 50;
	}

}
