<?php

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setIndent('    ')
    ->setRules([
        '@Symfony' => true,
        '@PhpCsFixer' => true,
        '@Symfony:risky' => true,
        '@PHP80Migration' => true,
        '@PHP80Migration:risky' => true,
    ])
    ->setFinder(PhpCsFixer\Finder::create()
    ->exclude('vendor')
    ->in(__DIR__))
    ;
