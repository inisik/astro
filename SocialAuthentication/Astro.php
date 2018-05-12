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

use UnexpectedValueException;

/**
 * @class Astro.
 */
class Astro implements AstroInterface
{

    /**
     * @var string|null $provider The provider that is going to be used.
     */
    private $provider = null;

    /**
     * Open a new authentiction object to preform api requests.
     *
     * @param string|null $provider The provider that is going to be used.
     */
    public function __construct(string $provider = null)
    {
        $this->setProvider($provider);
    }
    
    /**
     * Set the provider for this social authentication object.
     *
     * @param string|null $provider The provider that is going to be used.
     *
     * @return void Return nothing
     */
    public function setProvider(string $provider = null): void
    {
        if (!is_null($provider) && !$this->isValidProvider(strtolower($provider)))
        {
            throw new UnexpectedValueException('The provider is not valid.');
        }
        $this->provider = $provider;
    }

    /**
     * Check to see if the provider is valid.
     *
     * @param string $provider The provider to check.
     *
     * @return bool Return true if the provider is valid and false if othrwise.
     *
     * @codeCoverageIgnore
     */
    private function isValidProvider(string $provider): bool
    {
        return Utils::isValidProvider($provider);
    }    
}
