<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftRouter;

use DateTimeImmutable;
use Symfony\Component\HttpFoundation\Response;

/**
* @template T1 as array<string, scalar|DateTimeImmutable|null>
* @template T1_STRINGS as array<string, string|null>
* @template T2 as TypedArgs
* @template R_TYPED as Response
* @template HTTP_METHOD as 'GET'|'POST'|'CONNECT'|'DELETE'|'HEAD'|'OPTIONS'|'PATCH'|'PURGE'|'PUT'|'TRACE'
* @template HTTP_METHOD_DEFAULT as 'GET'|'POST'|'CONNECT'|'DELETE'|'HEAD'|'OPTIONS'|'PATCH'|'PURGE'|'PUT'|'TRACE'
*
* @template-implements DaftRouteAcceptsTypedArgs<T1, T1_STRINGS, T2, Response, R_TYPED, HTTP_METHOD, HTTP_METHOD_DEFAULT>
*/
abstract class DaftRouteAcceptsOnlyTypedArgs implements DaftRouteAcceptsTypedArgs
{
    /**
    * @template-use DaftRouterAutoMethodCheckingTrait<HTTP_METHOD>
    */
    use DaftRouterAutoMethodCheckingTrait;
}
