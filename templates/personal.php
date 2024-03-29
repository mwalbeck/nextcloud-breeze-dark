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


script('breezedark', 'settings-personal');
style('breezedark', 'settings');
?>

<div id="breezedark" class="breezedark-personal section">
    <h2><?php p($l->t("Breeze Dark")); ?></h2>
    <p><?php p($l->t("A Breeze Dark theme for Nextcloud.")); ?></p>
    <div class="preview-list">
        <div class="preview">
            <div class="preview-image" style='background-image: url("<?php p($appWebPath); ?>/img/theme-breeze-dark.png");'></div>
            <div class="preview-description">
                <h3><?php p($l->t("Breeze Dark theme")); ?></h3>
                <p><?php p($l->t("A Dark theme based on Breeze Dark by the KDE project. Please refresh the page for changes to take effect.")); ?></p>
                <?php if ($themeEnforced) : ?>
                    <input type="checkbox" class="checkbox" id="breezedark-enabled" disabled checked>
                <?php else : ?>
                    <input type="checkbox" class="checkbox" id="breezedark-enabled" <?php p($themeEnabled ? "checked" : ""); ?>>
                <?php endif; ?>
                <label for="breezedark-enabled"><?php p($l->t("Enable Breeze Dark theme")); ?></label>
                <input type="checkbox" class="checkbox" id="breezedark-automatic-activation-enabled" <?php p($themeAutomaticActivation ? "checked" : ""); ?>>
                <label for="breezedark-automatic-activation-enabled"><?php p($l->t("Enable Breeze Dark automated activation by clients system settings")); ?></label>
            </div>
        </div>
    </div>
</div>
