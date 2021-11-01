<?php

declare(strict_types=1);

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

use OCP\AppFramework\Http\TemplateResponse;
use OCP\IConfig;
use OCP\Settings\ISettings;

class Admin implements ISettings
{

    /** @var string */
    protected $appName;

    /** @var IConfig */
    private $config;

    /**
     * @param string $appName
     * @param IConfig $config
     */
    public function __construct(
        string $appName,
        IConfig $config
    )
    {
        $this->appName = $appName;
        $this->config = $config;
    }

    /**
     * @return TemplateResponse
     */
    public function getForm(): TemplateResponse
    {
        $themeEnabled = $this->config->getAppValue($this->appName, 'theme_enabled', "0");
        $themeLoginPage = $this->config->getAppValue($this->appName, 'theme_login_page', "1");
        $themeAutomaticActivation = $this->config->getAppValue($this->appName, 'theme_automatic_activation_enabled', "0");
        $themeCustomStyling = $this->config->getAppValue($this->appName, 'theme_custom_styling', "");
        return new TemplateResponse('breezedark', 'admin', [
            "themeEnabled" => $themeEnabled,
            "themeLoginPage" => $themeLoginPage,
            "themeAutomaticActivation" => $themeAutomaticActivation,
            "themeCustomStyling" => $themeCustomStyling
        ]);
    }

    /**
     * @return string
     */
    public function getSection(): string
    {
        return 'theming';
    }

    /**
     * @return int
     */
    public function getPriority(): int
    {
        return 50;
    }
}
