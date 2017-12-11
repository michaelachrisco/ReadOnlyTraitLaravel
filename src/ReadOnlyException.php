<?php
namespace MichaelAChrisco\ReadOnly;

class ReadOnlyException extends \RuntimeException
{
    /**
     * @param string $functionName
     * @param string $modelClassName
     * {@inheritDoc}
     */
    public function __construct(string $functionName, string $modelClassName, int $code = 0, \Throwable $previous = null)
    {
        $message = sprintf('Calling [%s] method on read-only model [%s] is not allowed.', $functionName, $modelClassName);
        parent::__construct($message, $code, $previous);
    }
}