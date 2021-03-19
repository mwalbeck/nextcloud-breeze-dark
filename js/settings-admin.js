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

function postSuccess(selector, id) {
    $(selector).after(
        " <span id='" + id + "' class='msg success'>" + t("breezedark", "Saved") + "</span>"
    );
    setTimeout(function () {
        $("#" + id).remove();
    }, 3000);
}

function postError(selector, id) {
    $(selector).after(
        " <span id='" + id + "' class='msg error'>" + t("breezedark", "Error") + "</span>"
    );
    setTimeout(function () {
        $("#" + id).remove();
    }, 3000);
}

window.addEventListener("DOMContentLoaded", function () {
    $("#breezedark-theme-enabled").change(function () {
        $.post(OC.generateUrl("apps/breezedark/settings/admin"), {
            theme_enabled: this.checked ? 1 : 0,
            theme_login_page: $("#breezedark-theme-login-page").prop("checked") ? 1 : 0,
        })
            .done(function () {
                postSuccess(
                    "label[for='breezedark-theme-enabled']",
                    "breezedark-theme-enabled-msg"
                );
            })
            .fail(function () {
                postError("label[for='breezedark-theme-enabled']", "breezedark-theme-enabled-msg");
            });

        $("#breezedark-theme-login-page").prop(
            "disabled",
            !$("#breezedark-theme-enabled").prop("checked")
        );
    });

    $("#breezedark-theme-login-page").change(function () {
        $.post(OC.generateUrl("apps/breezedark/settings/admin"), {
            theme_login_page: this.checked ? 1 : 0,
            theme_enabled: $("#breezedark-theme-enabled").prop("checked") ? 1 : 0,
        })
            .done(function () {
                postSuccess(
                    "label[for='breezedark-theme-login-page']",
                    "breezedark-theme-login-page-msg"
                );
            })
            .fail(function () {
                postError(
                    "label[for='breezedark-theme-login-page']",
                    "breezedark-theme-login-page-msg"
                );
            });
    });

    $("#breezedark-theme-custom-styling-button").click(function () {
        $.post(OC.generateUrl("apps/breezedark/settings/custom-styling"), {
            theme_custom_styling: $("#breezedark-theme-custom-styling").val(),
        })
            .done(function () {
                postSuccess(
                    "#breezedark-theme-custom-styling-button",
                    "breezedark-theme-custom-styling-button-msg"
                );
            })
            .fail(function () {
                postError(
                    "#breezedark-theme-custom-styling-button",
                    "breezedark-theme-custom-styling-button-msg"
                );
            });
    });
});
