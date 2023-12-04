<?php
namespace com\icemalta\jobapp\client\controller;

use com\icemalta\jobapp\client\controller\{
    Controller, 
    ListingController,
    UserController
};
use \Twig\Environment;

class RouteController extends Controller
{
    private static ?Environment $twig = null;
    private static string $colour = 'light';
    private static string $currentView = 'Listings';

    public static function showView(string $view, ?array $params = []): void {
        // TODO code me
    }

    private static function authorise(?callable $fn = null, ?string $view = null, ?array $params = [], ?array $data = []): void
    {   
        // TODO code me
    }

    public static function setEnvironment(Environment $twig): void
    {
        // TODO code me
    }

    public static function viewLogin(array $params, array $data): void
    {
        // TODO code me
    }

    public static function viewRegister(array $params, array $data): void
    {
        // TODO code me
    }

    public static function viewListings(array $params, array $data): void
    {
        // TODO code me
    }

    public static function viewListing(array $params, array $data): void
    {
        // TODO code me
    }

    public static function viewAccount(array $params, array $data): void
    {
        // TODO code me
    }

    public static function viewApplications(array $params, array $data): void
    {
        // TODO code me
    }

    public static function actionLogin(array $params, array $data): void
    {
        // TODO code me
    }

    public static function actionRegister(array $params, array $data): void
    {
        // TODO code me
    }

    public static function actionLogout(array $params, array $data): void 
    {
        // TODO code me
    }

    public static function actionApply(array $params, array $data): void 
    {
        // TODO code me
    }

    public static function setColourMode(array $params, array $data): void
    {
        // TODO code me
    }
}