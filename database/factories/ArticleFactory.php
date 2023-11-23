<?php
declare(strict_types=1);
namespace Database\Factories;

use App\Service\LoremIpsum\DecoratorEnum;
use App\Service\LoremIpsum\TextSizeEnum;
use App\Service\LoremIpsumService;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * Factory zum Erstellen von Testdaten für die Article-Entität
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $loremIpsumService = new LoremIpsumService();

        return [
            'title'    => $loremIpsumService->getText(1, TextSizeEnum::short, DecoratorEnum::plaintext),
            'subTitle' => $loremIpsumService->getText(2, TextSizeEnum::medium),
            'body'     => $loremIpsumService->getText(3, TextSizeEnum::long, DecoratorEnum::ul, DecoratorEnum::code),
            'link'     => Str::random(30)
        ];
    }
}
