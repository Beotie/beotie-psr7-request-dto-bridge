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
namespace Beotie\PSR7\DTOBridge\Metadata\Element;

use Beotie\PSR7\DTOBridge\Metadata\Element\Options\OptionMetadataInterface;
use Beotie\PSR7\DTOBridge\Metadata\Element\Source\SourceMetadataInterface;
use Beotie\PSR7\DTOBridge\Parser\ParserInterface;

/**
 * Element metadata interface
 *
 * This interface define an element metadata. It store the informations about bridging procedure for each element of
 * a DTO.
 *
 * @category Bridge
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
interface ElementMetadataInterface
{
    /**
     * Set source metadata
     *
     * Set up the from PSR7 request location for the bridge execution.
     *
     * @param SourceMetadataInterface $sourceMetadata The source metadata information
     *
     * @return ElementMetadataInterface
     */
    public function setSourceMeta(SourceMetadataInterface $sourceMetadata) : ElementMetadataInterface;

    /**
     * Get source metadata
     *
     * Return the source PSR7 request location for the bridge execution.
     *
     * @return SourceMetadataInterface
     */
    public function getSourceMeta() : SourceMetadataInterface;

    /**
     * Set option metadata
     *
     * Set up the element options for the bridge execution.
     *
     * @param OptionMetadataInterface $optionMetadata The option metadata information
     *
     * @return ElementMetadataInterface
     */
    public function setOptionMeta(OptionMetadataInterface $optionMetadata) : ElementMetadataInterface;

    /**
     * Get option metadata
     *
     * Return the element options for the bridge execution.
     *
     * @return OptionMetadataInterface
     */
    public function getOptionMeta() : OptionMetadataInterface;

    /**
     * Set destination
     *
     * Set the destination of the extracted data into the DTO during bridge process
     *
     * @return ElementMetadataInterface
     */
    public function setDestination(string $destination) : ElementMetadataInterface;

    /**
     * Get destination
     *
     * return the destination of the extracted data into the DTO during bridge process
     *
     * @return string
     */
    public function getDestination() : string;

    /**
     * Set pre parser
     *
     * Set the DTO builder pre-parser instance
     *
     * @param ParserInterface $parser The pre-parser instance
     *
     * @return $this
     */
    public function setPreParser(ParserInterface $parser) : ElementMetadataInterface;

    /**
     * Get pre parser
     *
     * Return the DTO builder pre-parser instance
     *
     * @return ParserInterface
     */
    public function getPreParser() : ParserInterface;

    /**
     * Set post parser
     *
     * Set the DTO builder post-parser instance
     *
     * @param ParserInterface $parser The post-parser instance
     *
     * @return ElementMetadataInterface
     */
    public function setPostParser(ParserInterface $parser) : ElementMetadataInterface;

    /**
     * Get post parser
     *
     * Return the DTO builder post-parser instance
     *
     * @return ParserInterface
     */
    public function getPostParser() : ParserInterface;
}
