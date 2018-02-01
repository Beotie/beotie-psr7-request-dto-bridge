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

use Beotie\PSR7\DTOBridge\Parser\ParserInterface;
use Beotie\PSR7\DTOBridge\Metadata\Element\ElementMetadataInterface;

/**
 * Element parser trait
 *
 * This trait is used to implement the ElementMetadataInterface
 *
 * @category Bridge
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
trait ElementParserTrait
{
    /**
     * Pre parser
     *
     * This property store the DTO builder pre-parser instance
     *
     * @var ParserInterface
     */
    private $preParser;

    /**
     * Post parser
     *
     * This property store the DTO builder post-parser instance
     *
     * @var ParserInterface
     */
    private $postParser;

    /**
     * Set pre parser
     *
     * Set the DTO builder pre-parser instance
     *
     * @param ParserInterface $parser The pre-parser instance
     *
     * @return $this
     */
    public function setPreParser(ParserInterface $parser) : ElementMetadataInterface
    {
        $this->preParser = $parser;
        return $this;
    }

    /**
     * Get pre parser
     *
     * Return the DTO builder pre-parser instance
     *
     * @return ParserInterface
     */
    public function getPreParser() : ParserInterface
    {
        return $this->preParser;
    }

    /**
     * Set post parser
     *
     * Set the DTO builder post-parser instance
     *
     * @param ParserInterface $parser The post-parser instance
     *
     * @return ElementMetadataInterface
     */
    public function setPostParser(ParserInterface $parser) : ElementMetadataInterface
    {
        $this->postParser = $parser;
        return $this;
    }

    /**
     * Get post parser
     *
     * Return the DTO builder post-parser instance
     *
     * @return ParserInterface
     */
    public function getPostParser() : ParserInterface
    {
        return $this->postParser;
    }
}
