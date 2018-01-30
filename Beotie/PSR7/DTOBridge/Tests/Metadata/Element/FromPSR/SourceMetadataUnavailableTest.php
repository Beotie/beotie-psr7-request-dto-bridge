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
namespace Beotie\PSR7\DTOBridge\Tests\Metadata\Element\FromPSR;

use PHPUnit\Framework\TestCase;
use Beotie\PSR7\DTOBridge\Metadata\Element\Source\SourceMetadata;

/**
 * From metadata unavailabel test
 *
 * This class is used to validate the SourceMetadata instances in case of unavailable location usage
 *
 * @category Test
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
class SourceMetadataUnavailableTest extends TestCase
{
    /**
     * Unavailable location provider
     *
     * This method return a set of unavailable location to validate the SourceMetadata instance logic
     *
     * @return array
     */
    public function unavailableLocationProvider() : array
    {
        return [
            ['a'],
            ['attri'],
            ['attributes'],
            ['q'],
            ['quer'],
            ['queries']
        ];
    }

    /**
     * Test add unavailable location
     *
     * This method is used to validate the SourceMetadata::addLocation method logic in case of unavailable location
     *
     * @param string $location The unavailable location
     *
     * @return       void
     * @dataProvider unavailableLocationProvider
     */
    public function testAddUnavailableLocation(string $location) : void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage(
            sprintf(
                'The format "%s" is invalid. Refer to SourceMetadataInterface::LOCATION_*',
                $location
            )
        );

        $instance = new SourceMetadata();
        $instance->addLocation($location);

        return;
    }

    /**
     * Test remove unavailable location
     *
     * This method is used to validate the SourceMetadata::removeLocation method logicin case of unavailable location
     *
     * @param string $location The unavailable location
     *
     * @return       void
     * @dataProvider unavailableLocationProvider
     */
    public function testRemoveUnavailableLocation(string $location) : void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage(
            sprintf(
                'The format "%s" is invalid. Refer to SourceMetadataInterface::LOCATION_*',
                $location
            )
        );

        $instance = new SourceMetadata();
        $instance->removeLocation($location);

        return;
    }

    /**
     * Test set unavailable locations
     *
     * This method is used to validate the SourceMetadata::setLocations method logic in case of unavailable location
     *
     * @param string $location The unavailable location
     *
     * @return       void
     * @dataProvider unavailableLocationProvider
     */
    public function testSetUnavailableLocation(string $location)
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage(
            sprintf(
                'The format "%s" is invalid. Refer to SourceMetadataInterface::LOCATION_*',
                $location
            )
        );

        $instance = new SourceMetadata();
        $instance->setLocations([$location]);
    }
}
