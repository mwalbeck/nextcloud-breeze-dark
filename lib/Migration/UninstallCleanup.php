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

namespace OCA\BreezeDark\Migration;

use OCP\IConfig;
use OCP\IDBConnection;
use OCP\Migration\IOutput;
use OCP\Migration\IRepairStep;

class UninstallCleanup implements IRepairStep
{
    /** @var IDBConnection */
	private $db;

    /** @var IConfig */
	private $config;

    public function __construct(IDBConnection $db, IConfig $config)
    {
        $this->db = $db;
        $this->config = $config;   
    }

    public function getName(): string
    {
        return "Cleanup enabled-themes and enforce_theme settings to prevent issues after an uninstall.";
    }

    public function run(IOutput $output): void
    {
        $themeEnforced = $this->config->getAppValue("breezedark", "theme_enforced", "0");
        $currentEnforcedTheme = $this->config->getSystemValue("enforce_theme", "");

        // Disable enforcement of the theme if the current enforced theme
        // is the one set by breezedark
        if ($themeEnforced && $currentEnforcedTheme === "dark") {
            $this->config->setSystemValue("enforce_theme", "");
        } elseif ($themeEnforced && $currentEnforcedTheme !== "dark") {
            // Disable theme enforcement of breezedark if a theme other than
            // the one breezedark set is currently being enforced
            $this->config->setAppValue("breezedark", "theme_enforced", "0");
        }
    }
}
