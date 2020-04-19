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


namespace OCA\BreezeDark\AppInfo;

use OCP\AppFramework\App;
use OCP\IConfig;
use OCP\IUserSession;
use OCP\Util;

class Application extends App {

    /** @var IConfig */
	private $config;

	/** @var IUserSession */
	private $userSession;

    public function __construct() {
        parent::__construct("breezedark");
        $this->config       = \OC::$server->getConfig();
        $this->userSession  = \OC::$server->getUserSession();
    }

    public function doTheming() {
        $userId = $this->userSession->getUser()->getUID();
        if ($this->config->getUserValue($userId, "breezedark", "enabled")) {
            Util::addStyle('breezedark', 'guest');
            Util::addStyle('breezedark', 'server');
        }
    }
}
