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

use Beotie\PSR7\DTOBridge\Metadata\Element\Options\OptionMetadataInterface;
use Beotie\PSR7\DTOBridge\Metadata\Element\ElementMetadataInterface;

/**
 * Element option trait
 *
 * This trait is used to implement the ElementMetadataInterface
 *
 * @category Bridge
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
trait ElementOptionTrait
{
    /**
     * Option metadata
     *
     * This property store the element's option metadata
     *
     * @var OptionMetadataInterface
     */
    private $optionMetadata;

    /**
     * Set option metadata
     *
     * Set up the element options for the bridge execution.
     *
     * @param OptionMetadataInterface $optionMetadata The option metadata information
     *
     * @return ElementMetadataInterface
     */
    public function setOptionMeta(OptionMetadataInterface $optionMetadata) : ElementMetadataInterface
    {
        $this->optionMetadata = $optionMetadata;
        return $this;
    }

    /**
     * Get option metadata
     *
     * Return the element options for the bridge execution.
     *
     * @return OptionMetadataInterface
     */
    public function getOptionMeta() : OptionMetadataInterface
    {
        return $this->optionMetadata;
    }
}
