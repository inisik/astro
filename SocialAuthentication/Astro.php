<?php
declare(strict_types=1);
/**
 * Astro.
 *
 * A lightweight social authentication library designed to securely collect information from social networks.
 *
 * @author Astro Contributors <https://github.com/inisik/astro/graphs/contributors>
 *
 * @license <https://github.com/inisik/astro/blob/master/LICENSE>.
 * @link    <https://github.com/inisik/astro>.
 */

namespace Astro\SocialAuthentication;

/**
 * @class RequestHandler.
 */
class Astro implements AstroInterface
{

    /**
     * Open a new authentiction object to preform api request.
     */
    public function __construct(RequestHandler $requestHandler)
    {
    }
}
