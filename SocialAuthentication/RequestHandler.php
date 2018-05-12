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
    private $methods = [
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
    private $client;

    /**
     * Open a new guzzle client to run api requests.
     */
    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * Return guzzles response in json format.
     *
     * @param Response $response The response to return in json format.
     *
     * @return void Return nothing.
     */
    public function generateResponse(Response $response): void
    {
    }

    /**
     * Check to see if the method is valid.
     *
     * @return bool Return true if the method is valid and false if othrwise.
     */
    public static function isValidMethod(string $method): bool
    {
        return \in_array($method, $this->methods, \true);
    }    
}
