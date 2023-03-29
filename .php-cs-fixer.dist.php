<?php

$finder = (new PhpCsFixer\Finder())
    ->in('src')
    ->in('tests');

return (new PhpCsFixer\Config())
    ->setRules([
        'declare_strict_types' => true,
        '@Symfony' => true,
    ])
    ->setRiskyAllowed(true)
    ->setFinder($finder);
