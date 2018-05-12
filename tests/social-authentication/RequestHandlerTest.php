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

use PHPUnit\Framework\TestCase;

class RequestHandlerTest extends TestCase
{

    protected $backupGlobals = true;
    
    public function testMethodValidation()
    {
        $result = RequestHandler::isValidMethod('get');
        $this->assertTrue($result);
        $result = RequestHandler::isValidMethod('delete');
        $this->assertTrue($result);
        $result = RequestHandler::isValidMethod('head');
        $this->assertTrue($result);
        $result = RequestHandler::isValidMethod('options');
        $this->assertTrue($result);
        $result = RequestHandler::isValidMethod('patch');
        $this->assertTrue($result);
        $result = RequestHandler::isValidMethod('post');
        $this->assertTrue($result);
        $result = RequestHandler::isValidMethod('put');
        $this->assertTrue($result);
        $result = RequestHandler::isValidMethod('foo');
        $this->assertTrue(!$result);
        $result = RequestHandler::isValidMethod('bar');
        $this->assertTrue(!$result);
    }
}
