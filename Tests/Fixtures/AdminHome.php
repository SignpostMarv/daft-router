<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftRouter\Tests\Fixtures;

use InvalidArgumentException;
use SignpostMarv\DaftRouter\DaftRoute;
use SignpostMarv\DaftRouter\DaftRouteEmptyArgs;
use SignpostMarv\DaftRouter\DaftRouterAutoMethodCheckingTrait;
use SignpostMarv\DaftRouter\EmptyArgs;
use SignpostMarv\DaftRouter\TypedArgs;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminHome extends DaftRouteEmptyArgs
{
    use DaftRouterAutoMethodCheckingTrait;

    public static function DaftRouterHandleRequestWithEmptyArgs(Request $request) : Response
    {
        return new Response('');
    }

    public static function DaftRouterRoutes() : array
    {
        return [
            '/admin' => ['GET'],
        ];
    }

    public static function DaftRouterHttpRouteWithEmptyArgs(string $method = 'GET') : string
    {
        static::DaftRouterAutoMethodChecking($method);

        return '/admin';
    }
}