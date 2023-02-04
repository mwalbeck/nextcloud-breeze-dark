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

namespace OCA\BreezeDark\Controller;

use OCP\AppFramework\Controller;
use OCP\IConfig;
use OCP\IRequest;
use OCP\IUserSession;

class SettingsController extends Controller
{

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
    public function __construct(
        string $appName,
        IConfig $config,
        IUserSession $userSession,
        IRequest $request
    ) {
        parent::__construct($appName, $request);
        $this->config = $config;
        $this->userId = $userSession->getUser()->getUID();
    }

    /**
     * @NoAdminRequired
     *
     * Set user theme option
     */
    public function personal(): void
    {
        $themeEnforced = $this->config->getAppValue($this->appName, 'theme_enforced', "0");

        if (!$themeEnforced) {
            if ($this->request->getParam("theme_enabled")) {
                $this->config->setUserValue($this->userId, $this->appName, "theme_enabled", "1");
                $this->toggleTheme("on");
            } else {
                $this->config->setUserValue($this->userId, $this->appName, "theme_enabled", "0");
                $this->toggleTheme("off");
            }
        }

        if ($this->request->getParam("theme_automatic_activation_enabled")) {
            $this->config->setUserValue($this->userId, $this->appName, "theme_automatic_activation_enabled", "1");
        } else {
            $this->config->setUserValue($this->userId, $this->appName, "theme_automatic_activation_enabled", "0");
        }
    }

    /**
     * Set global theme option
     */
    public function admin(): void
    {
        if ($this->request->getParam("theme_enforced")) {
            $this->config->setAppValue($this->appName, "theme_enforced", "1");
            $this->enforceTheme("on");
        } else {
            $this->config->setAppValue($this->appName, "theme_enforced", "0");
            $this->enforceTheme("off");
        }

        if ($this->request->getParam("theme_login_page")) {
            $this->config->setAppValue($this->appName, "theme_login_page", "1");
        } else {
            $this->config->setAppValue($this->appName, "theme_login_page", "0");
        }

        if ($this->request->getParam("theme_automatic_activation_enabled")) {
            $this->config->setAppValue($this->appName, "theme_automatic_activation_enabled", "1");
        } else {
            $this->config->setAppValue($this->appName, "theme_automatic_activation_enabled", "0");
        }
    }

    /**
     * Set custom styling option
     */
    public function customStyling(): void
    {
        if ($this->request->getParam("theme_custom_styling")) {
            $this->config->setAppValue($this->appName, "theme_custom_styling", $this->request->getParam("theme_custom_styling"));
            $this->config->setAppValue($this->appName, "theme_cachebuster", time());
        } else {
            // If the request is empty set custom_styling to empty string and
            // set cachebuster to 0 to indicate that no custom styling is available
            $this->config->setAppValue($this->appName, "theme_custom_styling", "");
            $this->config->setAppValue($this->appName, "theme_cachebuster", 0);
        }
    }

    public function toggleTheme($state): void
    {
        $enabledThemes = json_decode($this->config->getUserValue($this->userId, "theming", "enabled-themes", "[]"));

        if ($state === "on") {
            $enabledThemes = array_merge(["breezedark"], $enabledThemes);
            $this->config->setUserValue($this->userId, "theming", "enabled-themes", json_encode(array_values(array_unique($enabledThemes))));
        }

        if ($state === "off") {
            $enabledThemes = array_diff($enabledThemes, ["breezedark"]);
            $this->config->setUserValue($this->userId, "theming", "enabled-themes", json_encode(array_values(array_unique($enabledThemes))));
        }
    }

    public function enforceTheme($state): void 
    {
        if ($state === "on") {
            $this->config->setSystemValue("enforce_theme", "breezedark");
        }

        if ($state === "off") {
            $this->config->setSystemValue("enforce_theme", "");
        }
        
    }
}
