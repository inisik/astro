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
 * @class Providers.
 */
class Providers
{
    
    /**
     * @var array $providers The list of providers with api location.
     */
    private static $providersList = array(
        'twitter' => '',
        'google' => '',
        'facebook' => '',
        'github' => ''
    );
    
    /**
     * Return a list of providers
     *
     * @return array Return the list of providers.
     */
    public static function list(): array
    {
        return array_keys(self::$providersList)
    }
}
