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

use OCP\App\IAppManager;
use OCP\AppFramework\Http\TemplateResponse;
use OCP\IConfig;
use OCP\Settings\ISettings;
use OCP\IUserSession;

class Personal implements ISettings
{

    /** @var string */
    protected $appName;

    /** @var IConfig */
    private $config;

    /** @var string */
    private $userId;

    /** @var string */
    private $appWebPath;

    /**
     * @param string $appName
     * @param IConfig $config
     * @param IUserSession $userSession
     * @param IAppManager $appManager
     */
    public function __construct(
        string $appName,
        IConfig $config,
        IUserSession $userSession,
        IAppManager $appManager
    ) {
        $this->appName = $appName;
        $this->config = $config;
        $this->userId = $userSession->getUser()->getUID();
        $this->appWebPath = $appManager->getAppWebPath($appName);
    }

    /**
     * @return TemplateResponse
     */
    public function getForm(): TemplateResponse
    {
        $themeEnforced = $this->config->getAppValue($this->appName, 'theme_enforced', "0");
        $defaultAutomaticActivation = $this->config->getAppValue($this->appName, 'theme_automatic_activation_enabled', "0");
        $themeEnabled = $this->config->getUserValue($this->userId, $this->appName, 'theme_enabled', "0");
        $themeAutomaticActivation = $this->config->getUserValue($this->userId, $this->appName, 'theme_automatic_activation_enabled', $defaultAutomaticActivation);
        return new TemplateResponse('breezedark', 'personal', [
            "themeEnforced" => $themeEnforced,
            "themeEnabled" => $themeEnabled,
            "themeAutomaticActivation" => $themeAutomaticActivation,
            "appWebPath" => $this->appWebPath
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
