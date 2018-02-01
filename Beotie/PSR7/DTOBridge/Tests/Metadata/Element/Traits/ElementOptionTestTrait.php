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
use Beotie\PSR7\DTOBridge\Metadata\Element\Options\OptionMetadataInterface;

/**
 * Element option test trait
 *
 * This trait is used to validate the ElementOptionTrait
 *
 * @category Test
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
trait ElementOptionTestTrait
{
    use TestTrait;


    /**
     * Test getOptionMeta
     *
     * This method is used to validate the ElementOptionTrait::getOptionMeta method logic
     *
     * @return void
     */
    public function testGetOptionMeta() : void
    {
        $instance = $this->createEmptyInstance();

        $metadata = $this->getMockBuilder(OptionMetadataInterface::class)
            ->getMock();

        $this->setValue($instance, 'optionMetadata', $metadata);
        $this->assertSame($metadata, $instance->getOptionMeta());

        return;
    }

    /**
     * Test setOptionMeta
     *
     * This method is used to validate the ElementOptionTrait::setOptionMeta method logic
     *
     * @return void
     */
    public function testSetOptionMeta() : void
    {
        $instance = $this->createEmptyInstance();

        $metadata = $this->getMockBuilder(OptionMetadataInterface::class)
            ->getMock();

        $this->assertSame($instance, $instance->setOptionMeta($metadata));
        $this->assertSame($metadata, $this->getValue($instance, 'optionMetadata'));
    }
}
