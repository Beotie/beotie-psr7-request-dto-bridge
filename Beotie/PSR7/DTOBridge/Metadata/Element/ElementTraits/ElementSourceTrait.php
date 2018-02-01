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
namespace Beotie\PSR7\DTOBridge\Metadata\Element\ElementTraits;

use Beotie\PSR7\DTOBridge\Metadata\Element\Source\SourceMetadataInterface;
use Beotie\PSR7\DTOBridge\Metadata\Element\ElementMetadataInterface;

/**
 * Element source trait
 *
 * This trait is used to implement the ElementMetadataInterface
 *
 * @category Bridge
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
trait ElementSourceTrait
{
    /**
     * Source metadata
     *
     * This property store the source metadata of the element.
     *
     * @var SourceMetadataInterface
     */
    private $sourceMetadata;

    /**
     * Set source metadata
     *
     * Set up the from PSR7 request location for the bridge execution.
     *
     * @param SourceMetadataInterface $sourceMetadata The source metadata information
     *
     * @return ElementMetadataInterface
     */
    public function setSourceMeta(SourceMetadataInterface $sourceMetadata) : ElementMetadataInterface
    {
        $this->sourceMetadata = $sourceMetadata;
        return $this;
    }

    /**
     * Get source metadata
     *
     * Return the source PSR7 request location for the bridge execution.
     *
     * @return SourceMetadataInterface
     */
    public function getSourceMeta() : SourceMetadataInterface
    {
        return $this->sourceMetadata;
    }
}
