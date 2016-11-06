<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd432678dc54ae0501ebc2a7cbd904083
{
    public static $files = array (
        '6bc45d0537e6858fd179bdbc31d62c79' => __DIR__ . '/..' . '/raveren/kint/Kint.class.php',
    );

    public static $classMap = array (
        'App' => __DIR__ . '/../..' . '/App/App.class.php',
        'App\\Controllers\\Controller' => __DIR__ . '/../..' . '/App/Controllers/Controller.class.php',
        'App\\Models\\Model' => __DIR__ . '/../..' . '/App/Models/Models.class.php',
        'Config' => __DIR__ . '/../..' . '/basicpackages/Config.php',
        'Database' => __DIR__ . '/../..' . '/basicpackages/Database.php',
        'Element' => __DIR__ . '/../..' . '/basicpackages/Html/Element.php',
        'Filterus\\Filter' => __DIR__ . '/../..' . '/basicpackages/Filterus/Filter.php',
        'Filterus\\Filters\\Alnum' => __DIR__ . '/../..' . '/basicpackages/Filterus/Filters/Alnum.php',
        'Filterus\\Filters\\Arrays' => __DIR__ . '/../..' . '/basicpackages/Filterus/Filters/Arrays.php',
        'Filterus\\Filters\\Booleans' => __DIR__ . '/../..' . '/basicpackages/Filterus/Filters/Booleans.php',
        'Filterus\\Filters\\Chain' => __DIR__ . '/../..' . '/basicpackages/Filterus/Filters/Chain.php',
        'Filterus\\Filters\\Email' => __DIR__ . '/../..' . '/basicpackages/Filterus/Filters/Email.php',
        'Filterus\\Filters\\Floats' => __DIR__ . '/../..' . '/basicpackages/Filterus/Filters/Floats.php',
        'Filterus\\Filters\\IP' => __DIR__ . '/../..' . '/basicpackages/Filterus/Filters/IP.php',
        'Filterus\\Filters\\Ints' => __DIR__ . '/../..' . '/basicpackages/Filterus/Filters/Ints.php',
        'Filterus\\Filters\\Map' => __DIR__ . '/../..' . '/basicpackages/Filterus/Filters/Map.php',
        'Filterus\\Filters\\Object' => __DIR__ . '/../..' . '/basicpackages/Filterus/Filters/Object.php',
        'Filterus\\Filters\\Pool' => __DIR__ . '/../..' . '/basicpackages/Filterus/Filters/Pool.php',
        'Filterus\\Filters\\Raw' => __DIR__ . '/../..' . '/basicpackages/Filterus/Filters/Raw.php',
        'Filterus\\Filters\\Regex' => __DIR__ . '/../..' . '/basicpackages/Filterus/Filters/Regex.php',
        'Filterus\\Filters\\Strings' => __DIR__ . '/../..' . '/basicpackages/Filterus/Filters/Strings.php',
        'Filterus\\Filters\\URL' => __DIR__ . '/../..' . '/basicpackages/Filterus/Filters/URL.php',
        'Filterus\\Filters\\UUID' => __DIR__ . '/../..' . '/basicpackages/Filterus/Filters/UUID.php',
        'Html' => __DIR__ . '/../..' . '/basicpackages/Html/Html.php',
        'Option' => __DIR__ . '/../..' . '/basicpackages/Html/Option.php',
        'Requests\\AjaxRequest' => __DIR__ . '/../..' . '/basicpackages/Requests/AjaxRequest.php',
        'Requests\\CurrentRequest' => __DIR__ . '/../..' . '/basicpackages/Requests/CurrentRequest.php',
        'Requests\\FormRequest' => __DIR__ . '/../..' . '/basicpackages/Requests/FormRequest.php',
        'Requests\\GetRequest' => __DIR__ . '/../..' . '/basicpackages/Requests/GetRequest.php',
        'Requests\\PostRequest' => __DIR__ . '/../..' . '/basicpackages/Requests/PostRequest.php',
        'Requests\\Request' => __DIR__ . '/../..' . '/basicpackages/Requests/Request.php',
        'Responses\\AjaxResponse' => __DIR__ . '/../..' . '/basicpackages/Responses/AjaxResponse.php',
        'Responses\\Response' => __DIR__ . '/../..' . '/basicpackages/Responses/Response.php',
        'Route' => __DIR__ . '/../..' . '/basicpackages/Route.php',
        'Select' => __DIR__ . '/../..' . '/basicpackages/Html/Select.php',
        'User\\Mycontrol' => __DIR__ . '/../..' . '/App/Controllers/Mycontrol.class.php',
        'View' => __DIR__ . '/../..' . '/basicpackages/View.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitd432678dc54ae0501ebc2a7cbd904083::$classMap;

        }, null, ClassLoader::class);
    }
}
