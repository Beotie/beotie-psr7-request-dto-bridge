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
use Beotie\PSR7\DTOBridge\Metadata\Element\Source\SourceMetadataInterface;

/**
 * From metadata test
 *
 * This class is used to validate the SourceMetadata instances
 *
 * @category Test
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
class SourceMetadataTest extends TestCase
{
    /**
     * Test getName
     *
     * This method is used to validate the SourceMetadata::getName method logic
     *
     * @return void
     */
    public function testGetName() : void
    {
        $instance = new SourceMetadata();

        $reflex = new \ReflectionProperty(SourceMetadata::class, 'name');
        $reflex->setAccessible(true);
        $reflex->setValue($instance, 'hereName');

        $this->assertEquals('hereName', $instance->getName());

        return;
    }

    /**
     * Test setName
     *
     * This method is used to validate the SourceMetadata::setName method logic
     *
     * @return void
     */
    public function testSetName() : void
    {
        $instance = new SourceMetadata();

        $reflex = new \ReflectionProperty(SourceMetadata::class, 'name');
        $reflex->setAccessible(true);

        $this->assertSame($instance, $instance->setName('hereName'));

        $this->assertEquals('hereName', $reflex->getValue($instance));

        return;
    }

    /**
     * Location provider
     *
     * This method return a set of location to validate the SourceMetadata instance logic
     *
     * @return array
     */
    public function locationProvider() : array
    {
        return [
            [SourceMetadataInterface::LOCATION_ATTRIBUTE, SourceMetadataInterface::LOCATION_BODY],
            [SourceMetadataInterface::LOCATION_BODY, SourceMetadataInterface::LOCATION_COOKIE],
            [SourceMetadataInterface::LOCATION_COOKIE, SourceMetadataInterface::LOCATION_FILE],
            [SourceMetadataInterface::LOCATION_FILE, SourceMetadataInterface::LOCATION_HEADER],
            [SourceMetadataInterface::LOCATION_HEADER, SourceMetadataInterface::LOCATION_QUERY],
            [SourceMetadataInterface::LOCATION_QUERY, SourceMetadataInterface::LOCATION_ATTRIBUTE]
        ];
    }

    /**
     * Test add location
     *
     * This method is used to validate the SourceMetadata::addLocation method logic
     *
     * @param string $location The location
     *
     * @return       void
     * @dataProvider locationProvider
     */
    public function testAddLocation(string $location) : void
    {
        $instance = new SourceMetadata();

        $reflex = new \ReflectionProperty(SourceMetadata::class, 'locations');
        $reflex->setAccessible(true);

        $this->assertEmpty($reflex->getValue($instance));
        $instance->addLocation($location);
        $this->assertContains($location, $reflex->getValue($instance));

        return;
    }

    /**
     * Test remove location
     *
     * This method is used to validate the SourceMetadata::removeLocation method logic
     *
     * @param string $location The location
     *
     * @return       void
     * @dataProvider locationProvider
     */
    public function testRemoveLocation(string $location)
    {
        $instance = new SourceMetadata();

        $reflex = new \ReflectionProperty(SourceMetadata::class, 'locations');
        $reflex->setAccessible(true);
        $reflex->setValue($instance, [$location]);
        $instance->removeLocation($location);
        $this->assertEmpty($reflex->getValue($instance));
    }

    /**
     * Test set locations
     *
     * This method is used to validate the SourceMetadata::setLocations method logic
     *
     * @param string $location    The location
     * @param string $newLocation The new location to set up
     *
     * @return       void
     * @dataProvider locationProvider
     */
    public function testSetLocations(string $location, string $newLocation)
    {
        $instance = new SourceMetadata();

        $reflex = new \ReflectionProperty(SourceMetadata::class, 'locations');
        $reflex->setAccessible(true);
        $reflex->setValue($instance, [$location]);

        $instance->setLocations([$location, $newLocation]);
        $this->assertSame([$location, $newLocation], $reflex->getValue($instance));

        $instance->setLocations([$newLocation]);
        $this->assertSame([$newLocation], $reflex->getValue($instance));
    }

    /**
     * Test get locations
     *
     * This method is used to validate the SourceMetadata::getLocations method logic
     *
     * @param string $firstLocation  The first inserted location
     * @param string $secondLocation The second inserted location
     *
     * @return       void
     * @dataProvider locationProvider
     */
    public function testGetLocations(string $firstLocation, string $secondLocation)
    {
        $instance = new SourceMetadata();

        $reflex = new \ReflectionProperty(SourceMetadata::class, 'locations');
        $reflex->setAccessible(true);
        $reflex->setValue($instance, [$firstLocation, $secondLocation]);

        $this->assertSame([$firstLocation, $secondLocation], $instance->getLocations());
    }
}
