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
use OCP\DB\QueryBuilder\IQueryBuilder;
use OCP\Migration\IOutput;
use OCP\Migration\IRepairStep;

class MigrateUserThemeSettings implements IRepairStep
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
        return "Migrate user theme settings";
    }

    public function run(IOutput $output): void
    {
        $settingsVersion = $this->config->getAppValue("breezedark", "theme_settings_version", "0");

        if ($settingsVersion >= "2") {
            return;
        }

        $userQb = $this->db->getQueryBuilder();
        $userQb->select('userid')->from('preferences')->where(
            $userQb->expr()->eq('appid', $userQb->createNamedParameter('breezedark'), IQueryBuilder::PARAM_STR),
            $userQb->expr()->eq('configkey', $userQb->createNamedParameter('theme_enabled')),
            $userQb->expr()->eq('configvalue', $userQb->createNamedParameter('1'))
        );
        $result = $userQb->executeQuery();

        $users = $result->fetchAll();

        foreach($users as $user) {
            $enabledThemes = json_decode($this->config->getUserValue($user["userid"], "theming", "enabled-themes", "[]"));
            $enabledThemes = array_merge(["breezedark"], $enabledThemes);
            $this->config->setUserValue($user["userid"], "theming", "enabled-themes", json_encode(array_values(array_unique($enabledThemes))));
        }

        $this->config->setAppValue("breezedark", "theme_settings_version", "2");
    }
}
