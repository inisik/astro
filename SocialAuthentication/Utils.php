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
 * @class Utils.
 */
class Utils
{

    /**
     * Check to see if the provider is valid.
     *
     * @param string $provider The provider to check.
     *
     * @return bool Return true if the provider is valid and false if othrwise.
     */
    public static function isValidProvider(string $provider): bool
    {
        return in_array($provider, Providers::list());
    }
}
