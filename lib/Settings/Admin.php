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

class Admin implements ISettings {

    /** @var string */
    protected $appName;

    /** @var IConfig */
    private $config;

    /**
     * @param string $appName
     * @param IConfig $config
     */
    public function __construct(string $appName,
                                IConfig $config) {
        $this->appName = $appName;
        $this->config = $config;
    }

    /**
     * @return TemplateResponse
     */
    public function getForm() {
        $themeEnabled = $this->config->getAppValue($this->appName, 'theme_enabled', "0");
        return new TemplateResponse('breezedark', 'admin', [ 
            "themeEnabled" => $themeEnabled
        ]);
    }

    /**
     * @return string
     */
    public function getSection() {
        return 'theming';
    }

    /**
     * @return int
     */
    public function getPriority() {
        return 50;
    }
}
