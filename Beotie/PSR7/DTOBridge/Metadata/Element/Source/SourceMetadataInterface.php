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
namespace Beotie\PSR7\DTOBridge\Metadata\Element\Source;

/**
 * From metadata interface
 *
 * This interface define a from PSR7 request metadata. It store the informations about bridging procedure for each
 * element of a DTO.
 *
 * @category Bridge
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
interface SourceMetadataInterface
{
    /**
     * Location cookie
     *
     * This constant define an available location into the request cookies
     *
     * @var string
     */
    public const LOCATION_COOKIE =    'cookie';

    /**
     * Location attribute
     *
     * This constant define an available location into the whole request attributes
     *
     * @var string
     */
    public const LOCATION_ATTRIBUTE = 'attribute';

    /**
     * Location header
     *
     * This constant define an available location into the request headers
     *
     * @var string
     */
    public const LOCATION_HEADER =    'header';

    /**
     * Location query
     *
     * This constant define an available location into the request query strings
     *
     * @var string
     */
    public const LOCATION_QUERY =     'query';

    /**
     * Location body
     *
     * This constant define an available location into the request body
     *
     * @var string
     */
    public const LOCATION_BODY =      'body';

    /**
     * Location file
     *
     * This constant define an available location into the request files
     *
     * @var string
     */
    public const LOCATION_FILE =      'file';

    /**
     * Set name
     *
     * Set the name of the element into the PSR7 request to search at bridging time
     *
     * @param string $name The element name
     *
     * @return $this
     */
    public function setName(string $name) : SourceMetadataInterface;

    /**
     * Get name
     *
     * Return the name of the element into the PSR7 request to search at bridging time
     *
     * @return string
     */
    public function getName() : string;

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
    public function setLocations(array $locations) : SourceMetadataInterface;

    /**
     * Get locations
     *
     * Return the set of available locations for the research at bridging time
     *
     * @return array
     */
    public function getLocations() : array;

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
    public function addLocation(string $location) : SourceMetadataInterface;

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
    public function removeLocation(string $location) : SourceMetadataInterface;
}
