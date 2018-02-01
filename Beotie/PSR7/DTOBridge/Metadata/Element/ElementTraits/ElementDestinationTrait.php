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
namespace Beotie\PSR7\DTOBridge\Metadata\Element\ElementTraits;

use Beotie\PSR7\DTOBridge\Metadata\Element\ElementMetadataInterface;

/**
 * Element destination trait
 *
 * This trait is used to implement the ElementMetadataInterface
 *
 * @category Test
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
trait ElementDestinationTrait
{
    /**
     * Destination
     *
     * This property store the element destination
     *
     * @var string
     */
    private $destination;

    /**
     * Get destination
     *
     * return the destination of the extracted data into the DTO during bridge process
     *
     * @return string
     */
    public function getDestination() : string
    {
        return $this->destination;
    }

    /**
     * Set destination
     *
     * Set the destination of the extracted data into the DTO during bridge process
     *
     * @return ElementMetadataInterface
     */
    public function setDestination(string $destination) : ElementMetadataInterface
    {
        $this->destination = $destination;
        return $this;
    }
}
