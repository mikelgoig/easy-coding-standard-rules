<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\ClassNotation\FinalClassFixer;
use PhpCsFixer\Fixer\ClassNotation\NoUnneededFinalMethodFixer;
use PhpCsFixer\Fixer\ClassNotation\ProtectedToPrivateFixer;
use PhpCsFixer\Fixer\ClassNotation\SelfAccessorFixer;
use PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer;
use PhpCsFixer\Fixer\ClassUsage\DateTimeImmutableFixer;
use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use PhpCsFixer\Fixer\Strict\StrictComparisonFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return ECSConfig::configure()
    ->withRules([
        // classes
        FinalClassFixer::class,
        NoUnneededFinalMethodFixer::class,
        ProtectedToPrivateFixer::class,
        SelfAccessorFixer::class,
        VisibilityRequiredFixer::class,
        // immutability
        DateTimeImmutableFixer::class,
        // strict
        DeclareStrictTypesFixer::class,
        StrictComparisonFixer::class,
    ])
;
