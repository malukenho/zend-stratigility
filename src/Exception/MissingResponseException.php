<?php
/**
 * @link      https://github.com/zendframework/zend-stratigility for the canonical source repository
 * @copyright Copyright (c) 2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   https://framework.zend.com/license New BSD License
 */

namespace Zend\Stratigility\Exception;

use OutOfBoundsException;

/**
 * Exception thrown when the internal stack of Zend\Stratigility\Next is
 * exhausted, but no response returned.
 */
class MissingResponseException extends OutOfBoundsException
{
}
