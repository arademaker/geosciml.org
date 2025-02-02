<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit46be5376fef0d2ee35c8f0459e7cec18
{
    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Requests' => 
            array (
                0 => __DIR__ . '/..' . '/rmccue/requests/library',
            ),
        ),
        'P' => 
        array (
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
        'M' => 
        array (
            'ML\\JsonLD' => 
            array (
                0 => __DIR__ . '/..' . '/ml/json-ld',
            ),
            'ML\\IRI' => 
            array (
                0 => __DIR__ . '/..' . '/ml/iri',
            ),
        ),
        'E' => 
        array (
            'EasyRdf_' => 
            array (
                0 => __DIR__ . '/..' . '/easyrdf/easyrdf/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit46be5376fef0d2ee35c8f0459e7cec18::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
