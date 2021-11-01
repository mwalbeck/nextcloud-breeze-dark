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

window.addEventListener("DOMContentLoaded", function () {
    $("#breezedark-enabled").change(function () {
        $.post(OC.generateUrl("apps/breezedark/settings"), {
            theme_enabled: this.checked ? 1 : 0,
            theme_automatic_activation_enabled: $("#breezedark-automatic-activation-enabled").prop(
                "checked"
            )
                ? 1
                : 0,
        })
            .done(function () {
                $("label[for='breezedark-enabled']").append(
                    " <span id='breezedark-enabled-msg' class='msg success'>" +
                        t("breezedark", "Saved") +
                        "</span>"
                );
                setTimeout(function () {
                    $("#breezedark-enabled-msg").remove();
                }, 3000);
            })
            .fail(function () {
                $("label[for='breezedark-enabled']").append(
                    " <span id='breezedark-enabled-msg' class='msg error'>" +
                        t("breezedark", "Error") +
                        "</span>"
                );
                setTimeout(function () {
                    $("#breezedark-enabled-msg").remove();
                }, 3000);
            });
        $("#breezedark-automatic-activation-enabled").prop(
            "disabled",
            !$("#breezedark-enabled").prop("checked")
        );
    });

    $("#breezedark-automatic-activation-enabled").change(function () {
        $.post(OC.generateUrl("apps/breezedark/settings"), {
            theme_enabled: $("#breezedark-enabled").prop("checked") ? 1 : 0,
            theme_automatic_activation_enabled: this.checked ? 1 : 0,
        })
            .done(function () {
                $("label[for='breezedark-automatic-activation-enabled']").append(
                    " <span id='breezedark-automatic-activation-enabled-msg' class='msg success'>" +
                        t("breezedark", "Saved") +
                        "</span>"
                );
                setTimeout(function () {
                    $("#breezedark-automatic-activation-enabled-msg").remove();
                }, 3000);
            })
            .fail(function () {
                $("label[for='breezedark-automatic-activation-enabled']").append(
                    " <span id='breezedark-automatic-activation-enabled-msg' class='msg error'>" +
                        t("breezedark", "Error") +
                        "</span>"
                );
                setTimeout(function () {
                    $("#breezedark-automatic-activation-enabled-msg").remove();
                }, 3000);
            });
    });
});
