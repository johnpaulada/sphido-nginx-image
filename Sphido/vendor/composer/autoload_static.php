<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0914a62c1003667bdd0a8aed4f569302
{
    public static $files = array (
        '128909dadf86002e8637d1ce59d271b9' => __DIR__ . '/..' . '/sphido/json/src/json.php',
        '7ed34faef0d7f57ce1bd571d49086713' => __DIR__ . '/..' . '/sphido/download/src/download.php',
        '3fdbfec9daaee4091a60dd05e44a51ff' => __DIR__ . '/..' . '/sphido/http/src/http.php',
        'c78f880e126bb666063b16fbd28e0d0d' => __DIR__ . '/..' . '/sphido/config/src/config.php',
        '9f9f0f765789b2c72f5347df6428d495' => __DIR__ . '/..' . '/sphido/routing/src/routing.php',
        'cf8919619d959ef5248a96f51cd1e26f' => __DIR__ . '/..' . '/sphido/events/src/events.php',
        '45fe9c6e364ac68606eb0c5f821301b9' => __DIR__ . '/..' . '/sphido/url/src/url.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'parsers\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'parsers\\' => 
        array (
            0 => __DIR__ . '/..' . '/sphido/parsers/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
    );

    public static $classMap = array (
        'Latte\\CompileException' => __DIR__ . '/..' . '/latte/latte/src/Latte/exceptions.php',
        'Latte\\Compiler' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/Compiler.php',
        'Latte\\Engine' => __DIR__ . '/..' . '/latte/latte/src/Latte/Engine.php',
        'Latte\\Helpers' => __DIR__ . '/..' . '/latte/latte/src/Latte/Helpers.php',
        'Latte\\HtmlNode' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/HtmlNode.php',
        'Latte\\ILoader' => __DIR__ . '/..' . '/latte/latte/src/Latte/ILoader.php',
        'Latte\\IMacro' => __DIR__ . '/..' . '/latte/latte/src/Latte/IMacro.php',
        'Latte\\Loaders\\FileLoader' => __DIR__ . '/..' . '/latte/latte/src/Latte/Loaders/FileLoader.php',
        'Latte\\Loaders\\StringLoader' => __DIR__ . '/..' . '/latte/latte/src/Latte/Loaders/StringLoader.php',
        'Latte\\MacroNode' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/MacroNode.php',
        'Latte\\MacroTokens' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/MacroTokens.php',
        'Latte\\Macros\\BlockMacros' => __DIR__ . '/..' . '/latte/latte/src/Latte/Macros/BlockMacros.php',
        'Latte\\Macros\\CoreMacros' => __DIR__ . '/..' . '/latte/latte/src/Latte/Macros/CoreMacros.php',
        'Latte\\Macros\\MacroSet' => __DIR__ . '/..' . '/latte/latte/src/Latte/Macros/MacroSet.php',
        'Latte\\Parser' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/Parser.php',
        'Latte\\PhpHelpers' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/PhpHelpers.php',
        'Latte\\PhpWriter' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/PhpWriter.php',
        'Latte\\RegexpException' => __DIR__ . '/..' . '/latte/latte/src/Latte/exceptions.php',
        'Latte\\RuntimeException' => __DIR__ . '/..' . '/latte/latte/src/Latte/exceptions.php',
        'Latte\\Runtime\\CachingIterator' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/CachingIterator.php',
        'Latte\\Runtime\\FilterExecutor' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/FilterExecutor.php',
        'Latte\\Runtime\\FilterInfo' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/FilterInfo.php',
        'Latte\\Runtime\\Filters' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/Filters.php',
        'Latte\\Runtime\\Html' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/Html.php',
        'Latte\\Runtime\\IHtmlString' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/IHtmlString.php',
        'Latte\\Runtime\\ISnippetBridge' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/ISnippetBridge.php',
        'Latte\\Runtime\\SnippetDriver' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/SnippetDriver.php',
        'Latte\\Runtime\\Template' => __DIR__ . '/..' . '/latte/latte/src/Latte/Runtime/Template.php',
        'Latte\\Strict' => __DIR__ . '/..' . '/latte/latte/src/Latte/Strict.php',
        'Latte\\Token' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/Token.php',
        'Latte\\TokenIterator' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/TokenIterator.php',
        'Latte\\Tokenizer' => __DIR__ . '/..' . '/latte/latte/src/Latte/Compiler/Tokenizer.php',
        'Parsedown' => __DIR__ . '/..' . '/erusev/parsedown/Parsedown.php',
        'ParsedownTest' => __DIR__ . '/..' . '/erusev/parsedown/test/ParsedownTest.php',
        'parsers\\MetadataParser' => __DIR__ . '/..' . '/sphido/parsers/src/MetadataParser.php',
        'parsers\\PlainText' => __DIR__ . '/..' . '/sphido/parsers/src/PlainText.php',
        'parsers\\TitleParser' => __DIR__ . '/..' . '/sphido/parsers/src/TitleParser.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0914a62c1003667bdd0a8aed4f569302::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0914a62c1003667bdd0a8aed4f569302::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit0914a62c1003667bdd0a8aed4f569302::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit0914a62c1003667bdd0a8aed4f569302::$classMap;

        }, null, ClassLoader::class);
    }
}
