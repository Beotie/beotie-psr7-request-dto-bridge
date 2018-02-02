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
namespace Beotie\PSR7\DTOBridge\Selector\Event;

use Beotie\PSR7\DTOBridge\Metadata\Element\ElementMetadataInterface;
use Psr\Http\Message\RequestInterface;
use Beotie\PSR7\DTOBridge\Selector\RequestElementSelectorInterface;
use Beotie\PSR7\DTOBridge\Selector\Builder\SelectedElementBuilderInterface;
use Beotie\PSR7\DTOBridge\Selector\SelectedElementInterface;

/**
 * Selection event interface
 *
 * This interface define the main methods provided by the selector event
 *
 * @category Bridge
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
interface SelectionEventInterface
{
    /**
     * Is propagation stopped
     *
     * Returns whether further event listeners should be triggered.
     *
     * @return bool Whether propagation was already stopped for this event
     */
    public function isPropagationStopped();

    /**
     * Stops the propagation of the event to further event listeners.
     *
     * If multiple event listeners are connected to the same event, no
     * further event listener will be triggered once any trigger calls
     * stopPropagation().
     *
     * @return mixed|void
     */
    public function stopPropagation();

    /**
     * Get metadata
     *
     * Return the stored metadata initiating the process
     *
     * @return ElementMetadataInterface
     */
    public function getMetadata() : ElementMetadataInterface;

    /**
     * Get request
     *
     * Return the request processed
     *
     * @return RequestInterface
     */
    public function getRequest() : RequestInterface;

    /**
     * Get selector
     *
     * Return the processing RequestElementSelector instance
     *
     * @return RequestElementSelectorInterface
     */
    public function getSelector() : RequestElementSelectorInterface;

    /**
     * Get SelectedElementBuilder
     *
     * Return the SelectedElementBuilder in charge of the SelectedElement building
     *
     * @return SelectedElementBuilderInterface
     */
    public function getSelectedElementBuilder() : SelectedElementBuilderInterface;

    /**
     * Set SelectedElement
     *
     * Setup the SelectedElement resulting of the parsing. Stop the propagation
     *
     * @param SelectedElementInterface $selectedElement The SelectedElement instance resulting of the parsing
     *
     * @return SelectionEventInterface
     */
    public function setSelectedElement(SelectedElementInterface $selectedElement) : SelectionEventInterface;

    /**
     * Get SelectedElement
     *
     * Return the SelectedElement resulting of the parsing
     *
     * @return SelectedElementInterface
     */
    public function getSelectedElement() : SelectedElementInterface;
}
