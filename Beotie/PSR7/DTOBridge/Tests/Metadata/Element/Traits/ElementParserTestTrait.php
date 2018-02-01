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
namespace Beotie\PSR7\DTOBridge\Tests\Metadata\Element\Traits;

use Beotie\LibTest\Traits\TestTrait;
use Beotie\PSR7\DTOBridge\Parser\ParserInterface;

/**
 * Element parser test trait
 *
 * This trait is used to validate the ElementParserTrait
 *
 * @category Test
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
trait ElementParserTestTrait
{
    use TestTrait;

    /**
     * Test setPreParser
     *
     * This method is used to validate the ElementParserTrait::setPreParser method logic
     *
     * @return void
     */
    public function testSetPreParser() : void
    {
        $instance = $this->createEmptyInstance();

        $preParser = $this->getMockBuilder(ParserInterface::class)->getMock();

        $this->assertSame($instance, $instance->setPreParser($preParser));
        $this->assertEquals($preParser, $this->getValue($instance, 'preParser'));
    }

    /**
     * Test getPreParser
     *
     * This method is used to validate the ElementParserTrait::getPreParser method logic
     *
     * @return void
     */
    public function testGetPreParser() : void
    {
        $instance = $this->createEmptyInstance();

        $preParser = $this->getMockBuilder(ParserInterface::class)->getMock();

        $this->setValue($instance, 'preParser', $preParser);

        $this->assertEquals($preParser, $instance->getPreParser());
    }

    /**
     * Test setPostParser
     *
     * This method is used to validate the ElementParserTrait::setPostParser method logic
     *
     * @return void
     */
    public function testSetPostParser() : void
    {
        $instance = $this->createEmptyInstance();

        $postParser = $this->getMockBuilder(ParserInterface::class)->getMock();

        $this->assertSame($instance, $instance->setPostParser($postParser));
        $this->assertEquals($postParser, $this->getValue($instance, 'postParser'));
    }

    /**
     * Test getPostParser
     *
     * This method is used to validate the ElementParserTrait::getPostParser method logic
     *
     * @return void
     */
    public function testGetPostParser() : void
    {
        $instance = $this->createEmptyInstance();

        $postParser = $this->getMockBuilder(ParserInterface::class)->getMock();

        $this->setValue($instance, 'postParser', $postParser);

        $this->assertEquals($postParser, $instance->getPostParser());
    }
}
