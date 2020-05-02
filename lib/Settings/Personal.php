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
    protected $appName;

    /** @var IConfig */
    private $config;

    /** @var IUserSession */
    private $userId;

    /**
     * @param string $appName
     * @param IConfig $config
     * @param IUserSession $userSession
     */
    public function __construct(string $appName,
                                IConfig $config,
                                IUserSession $userSession) {
        $this->appName = $appName;
        $this->config = $config;
        $this->userId = $userSession->getUser()->getUID();
    }

    /**
     * @return TemplateResponse
     */
    public function getForm() {
        $default = $this->config->getAppValue($this->appName, 'theme_enabled', "0");
        $themeEnabled = $this->config->getUserValue($this->userId, $this->appName, 'theme_enabled', $default);
        return new TemplateResponse('breezedark', 'personal', [ 
            "themeEnabled" => $themeEnabled
        ]);
    }

    /**
     * @return string
     */
    public function getSection() {
        return 'accessibility';
    }

    /**
     * @return int
     */
    public function getPriority() {
        return 50;
    }

}
