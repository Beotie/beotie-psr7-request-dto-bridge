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
 * @category Bridge
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
namespace Beotie\PSR7\DTOBridge\Metadata\Element\Source\SourceTraits;

use Beotie\PSR7\DTOBridge\Metadata\Element\Source\SourceMetadataInterface;

/**
 * Source location trait
 *
 * This trait is used to implement the SourceMetadataInterface
 *
 * @category Bridge
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
trait SourceLocationTrait
{
    /**
     * Location
     *
     * The available locations for an element
     *
     * @var array
     */
    private $locations = [];

    /**
     * Set location
     *
     * Set the list of location for search at building time. Use SourceMetadataInterface::LOCATION_*
     *
     * @param array $locations The location list available at bridging time
     *
     * @return $this
     * @throws \InvalidArgumentException in case of unexisting location
     */
    public function setLocations(array $locations) : SourceMetadataInterface
    {
        $this->locations = [];
        foreach ($locations as $location) {
            $this->addLocation($location);
        }

        return $this;
    }

    /**
     * Get locations
     *
     * Return the set of available locations for the research at bridging time
     *
     * @return array
     */
    public function getLocations() : array
    {
        return $this->locations;
    }

    /**
     * Add location
     *
     * Inject a new available location for the research at bridging time. Use SourceMetadataInterface::LOCATION_*
     *
     * @param string $location The location to inject
     *
     * @return $this
     * @throws \InvalidArgumentException in case of unexisting location
     */
    public function addLocation(string $location) : SourceMetadataInterface
    {
        $this->throwOnInvalidLocation($location);

        if (!in_array($location, $this->locations)) {
            $this->locations[] = $location;
        }

        return $this;
    }

    /**
     * Remove location
     *
     * Remove an available location from the research at bridging time. Use SourceMetadataInterface::LOCATION_*
     *
     * @param string $location The location to inject
     *
     * @return $this
     * @throws \InvalidArgumentException in case of unexisting location
     */
    public function removeLocation(string $location) : SourceMetadataInterface
    {
        $this->throwOnInvalidLocation($location);

        if (in_array($location, $this->locations)) {
            unset($this->locations[array_search($location, $this->locations)]);
        }

        return $this;
    }

    /**
     * Throw on invalid location
     *
     * Throw an InvalidArgumentException in the case of unallowed location
     *
     * @param string $location The location to validate
     *
     * @return void
     * @throws \InvalidArgumentException in case of unexisting location
     */
    private function throwOnInvalidLocation(string $location) : void
    {
        if (!$this->isValidLocation($location)) {
            throw new \InvalidArgumentException(
                sprintf(
                    'The format "%s" is invalid. Refer to SourceMetadataInterface::LOCATION_*',
                    $location
                    )
                );
        }

        return;
    }

    /**
     * Is valid location
     *
     * Validate that a given location is availlable or not for a PSR7 request location
     *
     * @param string $location The location to validate
     *
     * @return bool
     */
    private function isValidLocation(string $location) : bool
    {
        return in_array(
            $location,
            [
                SourceMetadataInterface::LOCATION_ATTRIBUTE,
                SourceMetadataInterface::LOCATION_BODY,
                SourceMetadataInterface::LOCATION_COOKIE,
                SourceMetadataInterface::LOCATION_FILE,
                SourceMetadataInterface::LOCATION_HEADER,
                SourceMetadataInterface::LOCATION_QUERY
            ]
        );
    }
}

