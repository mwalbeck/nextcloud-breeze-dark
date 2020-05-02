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


namespace OCA\BreezeDark\Controller;

use OCP\AppFramework\Controller;
use OCP\IConfig;
use OCP\IUserSession;
use OCP\IRequest;

class SettingsController extends Controller {

    /** @var string */
    protected $appName;

    /** @var IConfig */
    private $config;

    /** @var string */
    private $userId;

    /**
     * @param string $appName
     * @param IConfig $config
     * @param IUserSession $userSession
     * @param IRequest $request
     */
    public function __construct(string $appName,
                                IConfig $config,
                                IUserSession $userSession,
                                IRequest $request) {
        parent::__construct($appName, $request);
        $this->config = $config;
        $this->userId = $userSession->getUser()->getUID();
    }

    /**
     * @NoAdminRequired
     * 
     * Set user theme option
     */
    public function personal() {
        if ($this->request->getParam("theme_enabled")) {
            $this->config->setUserValue($this->userId, $this->appName, "theme_enabled", "1");
        } else {
            $this->config->setUserValue($this->userId, $this->appName, "theme_enabled", "0");
        }
    }

    /**
     * Set global theme option
     */
    public function admin() {
        if ($this->request->getParam("theme_enabled")) {
            $this->config->setAppValue($this->appName, "theme_enabled", "1");
        } else {
            $this->config->setAppValue($this->appName, "theme_enabled", "0");
        }
    }
}
