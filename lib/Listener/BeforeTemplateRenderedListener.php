<?php

declare(strict_types=1);

/**
 * Breeze Dark theme for Nextcloud
 *
 * @copyright Copyright (C) 2023  Magnus Walbeck <mw@mwalbeck.org>
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

namespace OCA\BreezeDark\Listener;

use OCP\AppFramework\Http\TemplateResponse;
use OCP\EventDispatcher\Event;
use OCP\EventDispatcher\IEventListener;
use OCP\IConfig;
use OCP\IUserSession;

class BeforeTemplateRenderedListener implements IEventListener {

    protected $appName;
    private IUserSession $userSession;
	private IConfig $config;

	public function __construct(
		IUserSession $userSession,
		IConfig $config
	) {
        $this->appName = "breezedark";
		$this->userSession = $userSession;
		$this->config = $config;
	}

	public function handle(Event $event): void {
        $response = $event->getResponse();
        $themeEnforced = $this->config->getAppValue($this->appName, 'theme_enforced', "0");
        $params = $response->getParams();

        if ($themeEnforced) {
            $params = array_merge(["enabledThemes" => ["breezedark", "dark"]], $params);
            $response->setParams($params);
            return;
        }

        if ($response->getRenderAs() === TemplateResponse::RENDER_AS_USER) {
            $userId = $this->userSession->getUser()->getUID();
            $themeEnabled = $this->config->getUserValue($userId, $this->appName, "theme_enabled", "0");

            if ($themeEnabled) {
                $enabledThemes = json_decode($this->config->getUserValue($userId, "theming", "enabled-themes", "[]"));
                $enabledThemes = array_merge(["breezedark"], $enabledThemes);
                $params = array_merge(["enabledThemes" => $enabledThemes], $params);
                $response->setParams($params);
            }
        }
	}
}
