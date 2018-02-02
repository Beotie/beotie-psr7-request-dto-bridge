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
namespace Beotie\PSR7\DTOBridge\Tests\Selector\Builder;

use PHPUnit\Framework\TestCase;
use Beotie\LibTest\Traits\TestCaseTrait;
use Beotie\PSR7\DTOBridge\Selector\Builder\SelectedElementBuider;

/**
 * SelectedElement builder test
 *
 * This class is used to validate the SelectedElementBuilder class logic
 *
 * @category Test
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
class SelectedElementBuilderTest extends TestCase
{
    use TestCaseTrait, SelectedElementBuilderTestTrait;

    /**
     * Get tested instance
     *
     * Return the tested instance name
     *
     * @return string
     */
    protected function getTestedInstance() : string
    {
        return SelectedElementBuider::class;
    }
}
