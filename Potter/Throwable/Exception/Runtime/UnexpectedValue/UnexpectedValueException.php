<?php

namespace Potter\Throwable\Exception\Runtime\UnexpectedValue;

use \UnexpectedValueException as NativeUnexpectedValueException;

class UnexpectedValueException extends NativeUnexpectedValueException implements UnexpectedValueExceptionInterface
{

}
