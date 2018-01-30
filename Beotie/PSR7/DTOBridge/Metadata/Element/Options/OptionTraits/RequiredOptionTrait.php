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
namespace Beotie\PSR7\DTOBridge\Metadata\Element\Options\OptionTraits;

use Beotie\PSR7\DTOBridge\Metadata\Element\Options\OptionMetadataInterface;

/**
 * Required option trait
 *
 * This trait is used to implement the RequiredOptionInterface
 *
 * @category Bridge
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
trait RequiredOptionTrait
{
    /**
     * Required
     *
     * The required state of the element
     *
     * @var bool
     */
    private $required = false;

    /**
     * Is required
     *
     * Return whether the element is required or not
     *
     * @return bool
     */
    public function isRequired() : bool
    {
        return $this->required;
    }

    /**
     * Set required
     *
     * Set up the element required state
     *
     * @param bool $require The element requirement state
     *
     * @return OptionMetadataInterface
     */
    public function setRequired(bool $require) : OptionMetadataInterface
    {
        $this->required = $require;
        return $this;
    }
}
