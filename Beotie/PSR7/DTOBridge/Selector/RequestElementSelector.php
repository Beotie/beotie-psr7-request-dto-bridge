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
use Symfony\Component\EventDispatcher\EventDispatcher;
use Beotie\PSR7\DTOBridge\Selector\Builder\SelectedElementBuilderInterface;
use Beotie\PSR7\DTOBridge\Selector\Event\SelectionEvent;
use Beotie\PSR7\DTOBridge\Metadata\Element\Source\SourceMetadataInterface;
use Beotie\PSR7\DTOBridge\Selector\Event\SelectionEventInterface;

/**
 * Request element selector
 *
 * This class is used to process the request element retreiving
 *
 * @category Bridge
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
class RequestElementSelector extends EventDispatcher implements RequestElementSelectorInterface
{
    public const EVENT_PRE_SELECTION = 'pre_selection_event';
    public const EVENT_LOCATION_LOOP = 'location_loop_event';

    /**
     * SelectedElement builder
     *
     * This property store the SelectedElement builder instance used to return a valid SelectedElement instance
     *
     * @var SelectedElementBuilderInterface;
     */
    private $resultBuilder;

    /**
     * Construct
     *
     * The original RequestElementSelector constructor
     *
     * @param SelectedElementBuilderInterface $resultBuilder The SelectedElement builder instance used to return a
     *                                                       valid SelectedElement instance
     *
     * @return void
     */
    public function __construct(SelectedElementBuilderInterface $resultBuilder)
    {
        $this->resultBuilder = $resultBuilder;
    }

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
    ) : SelectedElementInterface {
        $event = new SelectionEvent($metadata, $request, $this, $this->resultBuilder);
        $this->dispatch(self::EVENT_PRE_SELECTION, $event);
        $this->dispatch(self::EVENT_LOCATION_LOOP, $event);
    }

    protected function search($event, $dataSet) : void
    {

    }

    protected function searchQuery(SelectionEventInterface $event) : void
    {
        if ($this->isLocationAllowed(SourceMetadataInterface::LOCATION_QUERY, $event)) {
            $this->search($event, $this->preParse($event, $event->getRequest()->getQueryParams()));
        }
        return;
    }

    protected function searchHeader(SelectionEventInterface $event) : void
    {
        if ($this->isLocationAllowed(SourceMetadataInterface::LOCATION_HEADER, $event)) {
            $this->search($event, $this->preParse($event, $event->getRequest()->getHeaders()));
        }
        return;
    }

    protected function searchFile(SelectionEventInterface $event) : void
    {
        if ($this->isLocationAllowed(SourceMetadataInterface::LOCATION_FILE, $event)) {
            $this->search($event, $this->preParse($event, $event->getRequest()->getUploadedFiles()));
        }
        return;
    }

    protected function searchCookie(SelectionEventInterface $event) : void
    {
        if ($this->isLocationAllowed(SourceMetadataInterface::LOCATION_COOKIE, $event)) {
            $this->search($event, $this->preParse($event, $event->getRequest()->getCookieParams()));
        }
        return;
    }

    protected function searchBody(SelectionEventInterface $event) : void
    {
        if ($this->isLocationAllowed(SourceMetadataInterface::LOCATION_BODY, $event)) {
            $this->search($event, $this->preParse($event, $event->getRequest()->getParsedBody()));
        }
        return;
    }

    protected function searchAttributes(SelectionEventInterface $event) : void
    {
        if ($this->isLocationAllowed(SourceMetadataInterface::LOCATION_ATTRIBUTE, $event)) {
            $this->search($event, $this->preParse($event, $event->getRequest()->getAttributes()));
        }
        return;
    }

    protected function preParse(SelectionEventInterface $event, $dataSet)
    {
        if ($event->getMetadata()->getPreParser()->support($dataSet)) {
            return $event->getMetadata()->getPreParser()->parse($dataSet);
        }

        $message = [
            'Misleading configuration.',
            'Parser type "%s" does not support dataset for element\'s location "%s".',
            'Maybe you are using multiple location encoding with pre-parsing'
        ];

        throw new \RuntimeException(
            sprintf(
                implode(' ', $message),
                get_class($event->getMetadata()->getPreParser()),
                $event->getMetadata()->getSourceMeta()->getName()
            )
        );
    }

    protected final function isLocationAllowed(string $location, SelectionEventInterface $event)
    {
        return in_array($location, $event->getMetadata()->getSourceMeta()->getLocations());
    }
}
