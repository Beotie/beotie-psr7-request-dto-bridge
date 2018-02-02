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

use Symfony\Component\EventDispatcher\Event;
use Beotie\PSR7\DTOBridge\Selector\SelectedElementInterface;
use Beotie\PSR7\DTOBridge\Metadata\Element\ElementMetadataInterface;
use Beotie\PSR7\DTOBridge\Selector\RequestElementSelectorInterface;
use Beotie\PSR7\DTOBridge\Selector\Builder\SelectedElementBuilderInterface;
use Psr\Http\Message\ServerRequestInterface;

/**
 * Selection event interface
 *
 * This class is used as main selector event
 *
 * @category Bridge
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
class SelectionEvent extends Event implements SelectionEventInterface
{
    /**
     * Metadata
     *
     * The metadata initiating the process
     *
     * @var ElementMetadataInterface
     */
    private $metadata;

    /**
     * Request
     *
     * The processed request
     *
     * @var ServerRequestInterface
     */
    private $request;

    /**
     * Selector
     *
     * The processing RequestElementSelector instance
     *
     * @var RequestElementSelectorInterface
     */
    private $selector;

    /**
     * SelectedElement builder
     *
     * The SelectedElementBuilder in charge of the SelectedElement building
     *
     * @var SelectedElementBuilderInterface
     */
    private $builder;

    /**
     * SelectedElement
     *
     * The SelectedElement resulting of the parsing. Stop the propagation
     *
     * @var SelectionEventInterface
     */
    private $selectedElement;

    /**
     * Construct
     *
     * The original SelectionEvent constructor
     *
     * @param ElementMetadataInterface        $metadata the metadata initiating the process
     * @param ServerRequestInterface          $request  the processed request
     * @param RequestElementSelectorInterface $selector the processing RequestElementSelector instance
     * @param SelectedElementBuilderInterface $builder  the SelectedElementBuilder in charge of the SelectedElement
     *                                                  building
     *
     * @return void
     */
    public function __construct(
        ElementMetadataInterface $metadata,
        ServerRequestInterface $request,
        RequestElementSelectorInterface $selector,
        SelectedElementBuilderInterface $builder
    ) {
        $this->metadata = $metadata;
        $this->request = $request;
        $this->selector = $selector;
        $this->builder = $builder;
    }

    /**
     * Get metadata
     *
     * Return the stored metadata initiating the process
     *
     * @return ElementMetadataInterface
     */
    public function getMetadata() : ElementMetadataInterface
    {
        return $this->metadata;
    }

    /**
     * Get request
     *
     * Return the request processed
     *
     * @return ServerRequestInterface
     */
    public function getRequest() : ServerRequestInterface
    {
        return $this->request;
    }

    /**
     * Get selector
     *
     * Return the processing RequestElementSelector instance
     *
     * @return RequestElementSelectorInterface
     */
    public function getSelector() : RequestElementSelectorInterface
    {
        return $this->selector;
    }

    /**
     * Get SelectedElementBuilder
     *
     * Return the SelectedElementBuilder in charge of the SelectedElement building
     *
     * @return SelectedElementBuilderInterface
     */
    public function getSelectedElementBuilder() : SelectedElementBuilderInterface
    {
        return $this->builder;
    }

    /**
     * Set SelectedElement
     *
     * Setup the SelectedElement resulting of the parsing. Stop the propagation
     *
     * @param SelectedElementInterface $selectedElement The SelectedElement instance resulting of the parsing
     *
     * @return SelectionEventInterface
     */
    public function setSelectedElement(SelectedElementInterface $selectedElement) : SelectionEventInterface
    {
        $this->selectedElement = $selectedElement;
        $this->stopPropagation();
        return $this;
    }

    /**
     * Get SelectedElement
     *
     * Return the SelectedElement resulting of the parsing
     *
     * @return SelectedElementInterface
     */
    public function getSelectedElement() : SelectedElementInterface
    {
        return $this->selectedElement;
    }
}
