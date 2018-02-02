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
namespace Beotie\PSR7\DTOBridge\Selector;

use Psr\Http\Message\RequestInterface;
use Beotie\PSR7\DTOBridge\Metadata\Element\ElementMetadataInterface;

/**
 * Request element selector interface
 *
 * This interface define the main methods provided by the request element selector
 *
 * @category Bridge
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
interface RequestElementSelectorInterface
{
    /**
     * Get element
     *
     * Return a SelectedElementInterface representing the resolved request element
     *
     * @param RequestInterface         $request  The request whence extract the element
     * @param ElementMetadataInterface $metadata The metadata defining how to extract the element
     *
     * @return SelectedElementInterface
     */
    public function getElement(
        RequestInterface $request,
        ElementMetadataInterface $metadata
    ) : SelectedElementInterface;
}
