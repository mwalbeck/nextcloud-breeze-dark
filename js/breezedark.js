/**
 * Breeze Dark theme for Nextcloud
 *
 * @copyright Copyright (C) 2021  Magnus Walbeck <mw@mwalbeck.org>
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

const cssMediaDark = window.matchMedia("(prefers-color-scheme: dark)");
function updateColorSheme() {
    if (
        getComputedStyle(document.body).getPropertyValue(
            "--breezedark-automatic-activation-enabled"
        ) != 1 ||
        cssMediaDark.matches
    ) {
        document.body.classList.add("theme--dark", "theme--breezedark");
        document.body.classList.remove("theme--light");
    } else {
        document.body.classList.remove("theme--dark", "theme--breezedark");
        document.body.classList.add("theme--light");
    }
}

cssMediaDark.addEventListener("change", updateColorSheme);
document.addEventListener("DOMContentLoaded", updateColorSheme);
