<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0895d9047825e872e642b620e1696a3e
{
    public static $prefixLengthsPsr4 = array (
        'h' => 
        array (
            'hightman\\xunsearch\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'hightman\\xunsearch\\' => 
        array (
            0 => __DIR__ . '/../..' . '/wrapper/yii2-ext',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'EXunSearch' => __DIR__ . '/../..' . '/wrapper/yii-ext/EXunSearch.php',
        'XS' => __DIR__ . '/../..' . '/lib/XS.class.php',
        'XSCommand' => __DIR__ . '/../..' . '/lib/XSServer.class.php',
        'XSComponent' => __DIR__ . '/../..' . '/lib/XS.class.php',
        'XSDocument' => __DIR__ . '/../..' . '/lib/XSDocument.class.php',
        'XSErrorException' => __DIR__ . '/../..' . '/lib/XS.class.php',
        'XSException' => __DIR__ . '/../..' . '/lib/XS.class.php',
        'XSFieldMeta' => __DIR__ . '/../..' . '/lib/XSFieldScheme.class.php',
        'XSFieldScheme' => __DIR__ . '/../..' . '/lib/XSFieldScheme.class.php',
        'XSIndex' => __DIR__ . '/../..' . '/lib/XSIndex.class.php',
        'XSSearch' => __DIR__ . '/../..' . '/lib/XSSearch.class.php',
        'XSServer' => __DIR__ . '/../..' . '/lib/XSServer.class.php',
        'XSTokenizer' => __DIR__ . '/../..' . '/lib/XSTokenizer.class.php',
        'XSTokenizerFull' => __DIR__ . '/../..' . '/lib/XSTokenizer.class.php',
        'XSTokenizerNone' => __DIR__ . '/../..' . '/lib/XSTokenizer.class.php',
        'XSTokenizerScws' => __DIR__ . '/../..' . '/lib/XSTokenizer.class.php',
        'XSTokenizerSplit' => __DIR__ . '/../..' . '/lib/XSTokenizer.class.php',
        'XSTokenizerXlen' => __DIR__ . '/../..' . '/lib/XSTokenizer.class.php',
        'XSTokenizerXstep' => __DIR__ . '/../..' . '/lib/XSTokenizer.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0895d9047825e872e642b620e1696a3e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0895d9047825e872e642b620e1696a3e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0895d9047825e872e642b620e1696a3e::$classMap;

        }, null, ClassLoader::class);
    }
}
