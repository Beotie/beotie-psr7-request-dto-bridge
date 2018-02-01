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

/**
 * Element destination trait
 *
 * This class is used to validate the ElementDestinationTrait
 *
 * @category Test
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
trait ElementDestinationTestTrait
{
    use TestTrait;

    /**
     * Test getDestination
     *
     * This method is used to validate the ElementMetadataInterface::getDestination method logic
     *
     * @return void
     */
    public function testGetDestination() : void
    {
        $instance = $this->createEmptyInstance();

        $destination = 'myDestinationLocation';
        $this->setValue($instance, 'destination', $destination);

        $this->assertEquals($destination, $instance->getDestination());
    }

    /**
     * Test setDestination
     *
     * This method is used to validate the ElementMetadataInterface::setDestination method logic
     *
     * @return void
     */
    public function testSetDestination() : void
    {
        $instance = $this->createEmptyInstance();

        $destination = 'myDestinationLocation';

        $this->assertSame($instance, $instance->setDestination($destination));
        $this->assertEquals($destination, $this->getValue($instance, 'destination'));
    }
}
