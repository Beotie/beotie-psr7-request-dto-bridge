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
namespace Beotie\PSR7\DTOBridge\Selector\Builder;

use Beotie\PSR7\DTOBridge\Metadata\Element\ElementMetadataInterface;
use Beotie\PSR7\DTOBridge\Selector\SelectedElementInterface;

/**
 * SelectedElement builder interface
 *
 * This interface is used to define the base method of the SelectedElementBuilder
 *
 * @category Bridge
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
interface SelectedElementBuilderInterface
{
    /**
     * Get new SelectedElement
     *
     * Return a newly builded SelectedElement
     *
     * @param ElementMetadataInterface $metadata The main metadata at the extraction origin
     * @param mixed                    $value    The extracted value
     *
     * @return SelectedElementInterface
     */
    public function getNewSelectedElement(ElementMetadataInterface $metadata, $value) : SelectedElementInterface;
}
