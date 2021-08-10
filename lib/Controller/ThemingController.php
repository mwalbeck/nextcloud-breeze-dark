<?php

declare(strict_types=1);

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

namespace OCA\BreezeDark\Controller;

use OCP\AppFramework\Controller;
use OCP\AppFramework\Http;
use OCP\AppFramework\Http\DataDisplayResponse;
use OCP\IConfig;
use OCP\IRequest;

class ThemingController extends Controller
{

    /** @var string */
    protected $appName;

    /** @var IConfig */
    private $config;

    /**
     * @param string $appName
     * @param IConfig $config
     * @param IRequest $request
     */
    public function __construct(
        string $appName,
        IConfig $config,
        IRequest $request
    ) {
        parent::__construct($appName, $request);
        $this->config = $config;
    }

    /**
     * @NoCSRFRequired
     * @PublicPage
     * @NoSameSiteCookieRequired
     *
     * @return DataDisplayResponse|NotFoundResponse
     */
    public function getCustomStyling(): DataDisplayResponse
    {
        $customStyling = $this->config->getAppValue($this->appName, 'theme_custom_styling', '');
        $response = new DataDisplayResponse($customStyling, Http::STATUS_OK, ['Content-Type' => 'text/css']);
        $response->cacheFor(86400);
        return $response;
    }
}
