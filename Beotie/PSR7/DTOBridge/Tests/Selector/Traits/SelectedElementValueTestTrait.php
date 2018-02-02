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
 * @category Test
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
namespace Beotie\PSR7\DTOBridge\Tests\Selector\Traits;

use Beotie\LibTest\Traits\TestTrait;

/**
 * Selected element value test trait
 *
 * This class is used to validate the SelectedElementValueTrait
 *
 * @category Test
 * @package  Beotie_Psr7_Request_Dto_Bridge
 * @author   matthieu vallance <matthieu.vallance@cscfa.fr>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     http://cscfa.fr
 */
trait SelectedElementValueTestTrait
{
    use TestTrait;

    /**
     * Test getValue
     *
     * This method is used to validate the SelectedElementValueTrait::getValue method logic
     *
     * @return void
     */
    public function testGetValue() : void
    {
        $instance = $this->createEmptyInstance();

        $value = new \stdClass();

        $this->setValue($instance, 'value', $value);

        $this->getTestCase()->assertSame($value, $instance->getValue());
    }
}

