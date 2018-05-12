<?php
declare(strict_types=1);
/**
 * Astro.
 *
 * A social authentication library designed to securely send api requests to social networking websites.
 *
 * @author Astro Contributors <https://github.com/inisik/astro/graphs/contributors>
 *
 * @license <https://github.com/inisik/astro/blob/master/LICENSE>.
 * @link    <https://github.com/inisik/astro>.
 */

namespace Astro\SocialAuthentication;

/**
 * @class Astro.
 */
class Astro extends Providers implements AstroInterface
{

    /**
     * Open a new authentiction object to preform api requests.
     */
    public function __construct()
    {
    }

    /**
     * Check to see if the provider is valid.
     *
     * @return bool Return true if the provider is valid and false if othrwise.
     *
     * @codeCoverageIgnore
     */
    private function isValidProvider(string $provider): bool
    {
        Utils::isValidProvider($provider)
    }    
}
