<?php
declare(strict_types=1);
/**
 * Astro.
 *
 * An authentication library designed to decrease securely risk and make login systems easy to deploy.
 *
 * @author Astro Contributors <https://github.com/inisik/astro/graphs/contributors>
 *
 * @license <https://github.com/inisik/astro/blob/master/LICENSE>.
 * @link    <https://github.com/inisik/astro>.
 */

namespace Astro;

/**
 * @class   Authentication.
 * @extends AbstractAuthentication.
 */
class Authentication extends AbstractAuthentication
{

    /**
     * @var bool $strict Should we use strict checking.
     */
    private $strict;

    /**
     * @var string $authentication The authentication to use.
     */
    private $authentication;

    /**
     * @function __construct().
     *
     * @param Configuration\Authentication $config The authentication configuration.
     * @param array|[]                     $extras Any extra configuration.
     * @param bool|false                   $strict Should we use strict checking.
     *
     * @throws Exception\InvalidOperationException If the configuration could not be applied.
     */
    public function __construct(Configuration\Authentication $config, array $extras = array(), bool $strict = false)
    {
        $this->authentication = $config->get('authentication');
        if ($this->validate($extras)) {
            $this->extras = $extras;
        } else {
            throw new Exception\InvalidOperationException('The configuration could not be applied.');
        }
        $this->strict = $strict;
    }

    /**
     * @function validate().
     *
     * @param array $extras Any extra configuration.
     * @param bool  $strict Should we strict check it.
     *
     * @return bool Return true if the extra configuration is valid and false if it does not.
     */
    private function validate(array $extras, bool $strict): bool
    {
        if (Utils::depth($extras) < 3) {
            foreach ($extras as $key => $value) {
                if (!in_array($key, $this->directives, true)) {
                    goto fail;
                }
            }
        }
        fail:
        return false;
    }
}
