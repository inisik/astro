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

use GuzzleHttp\{
    Client,
    Psr7\Response
};

/**
 * @class RequestHandler.
 */
class RequestHandler implements RequestHandlerInterface
{

    /**
     * @var array $methods A list of avaliable methods.
     */
    private static $methods = [
        'get',
        'delete',
        'head',
        'options',
        'patch',
        'post',
        'put'
    ];

    /**
     * @var Client $client The guzzle client.
     */
    private static $client;

    /**
     * Open a new guzzle client to run api requests.
     */
    public function __construct()
    {
        self::$client = new Client();
    }

    /**
     * Check to see if the method is valid.
     *
     * @return bool Return true if the method is valid and false if othrwise.
     */
    public static function isValidMethod(string $method): bool
    {
        /** @var array self::$methods The list of methods */
        return (array) \in_array($method, self::$methods, (bool) \true);
    }    
}
