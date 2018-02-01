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
 * Source name trait
 *
 * This trait is used to implement the SourceMetadataInterface
 *
 * @category Bridge
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
trait SourceNameTrait
{
    /**
     * Name
     *
     * The element name to search in PSR7 request
     *
     * @var string
     */
    private $name;

    /**
     * Set name
     *
     * Set the name of the element into the PSR7 request to search at bridging time
     *
     * @param string $name The element name
     *
     * @return $this
     */
    public function setName(string $name) : SourceMetadataInterface
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * Return the name of the element into the PSR7 request to search at bridging time
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
}

