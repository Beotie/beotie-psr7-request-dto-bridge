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
namespace Beotie\PSR7\DTOBridge\Parser;

/**
 * Parser interface
 *
 * This interface define the main methods provided by the parsers
 *
 * @category Bridge
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
interface ParserInterface
{
    /**
     * Support
     *
     * Ask the parser to know if it support the given data or not
     *
     * @param mixed $data The data to validate
     *
     * @return bool
     */
    public function support($data) : bool;

    /**
     * Parse
     *
     * Parse the data
     *
     * @param mixed $data The data to parse
     *
     * @return mixed
     * @throws \UnexpectedValueException in case of unsupported data
     */
    public function parse($data);
}

