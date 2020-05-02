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


namespace OCA\BreezeDark\Migration;

use OCP\Migration\IOutput;
use OCP\Migration\IRepairStep;
use OCP\IConfig;

class Install implements IRepairStep {

    /** @var IConfig */
    private $config;

    public function __construct(IConfig $config) {
        $this->config = $config;
    }

    /**
     * Returns the step's name
     */
    public function getName() {
        return 'Set theme_enabled for breezedark';
    }

    /**
     * Set global theme option to enabled
     */
    public function run(IOutput $output) {
        $this->config->setAppValue("breezedark", "theme_enabled", "1");
    }
}
