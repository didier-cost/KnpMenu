<?php

namespace Knp\Menu\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class SpacelessExtension extends AbstractExtension
{
    public function __construct()
    {
    }

    public function getFilters(): array
    {
        return [
            new TwigFilter('safespaceless', [$this, 'safeSpaceless']),
        ];
    }

    public function safeSpaceless(?string $content): ?string
    {
        return trim(preg_replace('/>\s+</', '><', $content ?? '') ?? '');
    }

}
