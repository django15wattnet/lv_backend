<?php
declare(strict_types=1);
namespace App\Service;

use App\Service\LoremIpsum\DecoratorEnum;
use App\Service\LoremIpsum\TextSizeEnum;
use Illuminate\Support\Facades\Http;

class LoremIpsumService
{
    /*
     * Basis-URL der Lipsum-API
     */
    public const BASE_URL = 'https://loripsum.net/api/';


    public function getText(
        int $cntParagraphs,
        TextSizeEnum $textSize,
        DecoratorEnum ...$decorator): string
    {
        $url = self::BASE_URL
            . "{$cntParagraphs}/{$textSize->value}/"
            . implode(
                '/',
                array_map(
                    function($ed): string
                    {
                        return $ed->value;
                    },
                    $decorator
                )
            );

        return Http::get($url)->body();
    }
}
