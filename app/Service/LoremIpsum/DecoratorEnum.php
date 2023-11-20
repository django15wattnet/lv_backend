<?php
declare(strict_types=1);
namespace App\Service\LoremIpsum;

/**
 * Was soll dem Text hinzugefügt werden
 */
enum DecoratorEnum: string
{
    case ul = 'ul';
    case dl = 'dl';
    case code = 'code';
    case plaintext = 'plaintext';
}
