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
    Request
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
}
