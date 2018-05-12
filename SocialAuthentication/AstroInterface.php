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
 * @interface AstroInterface.
 */
interface AstroInterface
{

    /**
     * Open a new authentiction object to preform api request.
     */
    public function __construct();
}
