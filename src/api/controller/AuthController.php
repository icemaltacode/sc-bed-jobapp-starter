<?php
namespace com\icemalta\jobapp\api\controller;

use com\icemalta\jobapp\api\model\{User, AccessToken};

class AuthController extends Controller
{
    public static function login(array $params, array $data): void
    {
        // TODO code me
    }

    public static function logout(array $params, array $data): void
    {
        // TODO code me
    }

    public static function verifyToken(array $params, array $data): void {
        // TODO code me
    }

    public static function connectionTest(array $params, array $data): void {
        self::sendResponse(data: 'Welcome to the JobApp API!');
    }
}