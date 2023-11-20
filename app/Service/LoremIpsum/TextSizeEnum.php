<?php
declare(strict_types=1);
namespace App\Service\LoremIpsum;

/**
 * Länge des zu generierenden Textes.
 */
enum TextSizeEnum: string
{
    case short = 'short';
    case medium = 'medium';
    case long = 'long';
    case verylong = 'verylong';
}
