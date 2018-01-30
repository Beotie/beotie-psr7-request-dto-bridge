<?php
declare(strict_types=1);
/**
 * This file is part of beotie/psr7_request_dto_bridge
 *
 * As each files provides by the CSCFA, this file is licensed
 * under the MIT license.
 *
 * PHP version 7.1
 *
 * @category Test
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
namespace Beotie\PSR7\DTOBridge\Tests\Metadata\Element\Options;

use PHPUnit\Framework\TestCase;
use Beotie\PSR7\DTOBridge\Metadata\Element\Options\OptionMetadata;

/**
 * Option metadata test
 *
 * This class is used to validate the OptionMetadata class logic
 *
 * @category Test
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
class OptionMetadataTest extends TestCase
{
    use AllowedTestTrait, DefaultTestTrait, RequiredTestTrait;

    /**
     * Get tested instance
     *
     * Return the tested instance name
     *
     * @return string
     */
    protected function getTestedInstance() : string
    {
        return OptionMetadata::class;
    }

    /**
     * Get TestCase
     *
     * Return the current TestCase
     *
     * @return TestCase
     */
    protected function getTestCase() : TestCase
    {
        return $this;
    }
}
