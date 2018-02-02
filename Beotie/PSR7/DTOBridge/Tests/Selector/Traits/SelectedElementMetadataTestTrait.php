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
namespace Beotie\PSR7\DTOBridge\Tests\Selector\Traits;

use Beotie\LibTest\Traits\TestTrait;
use Beotie\PSR7\DTOBridge\Metadata\Element\ElementMetadataInterface;

/**
 * Selected element metadata test trait
 *
 * This class is used to validate the SelectedElementMetadataTrait
 *
 * @category Test
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
trait SelectedElementMetadataTestTrait
{
    use TestTrait;

    /**
     * Test getMetadata
     *
     * This method is used to validate the SelectedElementMetadataTrait::getMetadata method logic
     *
     * @return void
     */
    public function testGetMetadata() : void
    {
        $instance = $this->createEmptyInstance();

        $metadata = $this->getTestCase()->getMockBuilder(ElementMetadataInterface::class)->getMock();

        $this->setValue($instance, 'metadata', $metadata);

        $this->getTestCase()->assertSame($metadata, $instance->getMetadata());

        return;
    }
}

