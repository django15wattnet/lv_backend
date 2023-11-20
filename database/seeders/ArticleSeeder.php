<?php
declare(strict_types=1);
namespace Database\Seeders;

use App\Service\LoremIpsum\DecoratorEnum;
use App\Service\LoremIpsum\TextSizeEnum;
use App\Service\LoremIpsumService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * Füllt die Tabelle "article" mit Testdaten.
 */
class ArticleSeeder extends Seeder
{
    public function __construct(protected readonly LoremIpsumService $loremIpsumService) {}


    /**
     * Run the database seeds.
     */
    public function run(): void
    {
	    foreach (range(0, 200, 1) as $tmp) {
		    DB::table('article')->insert(
                [
                    'title'    => $this->loremIpsumService->getText(1, TextSizeEnum::short),
                    'subTitle' => $this->loremIpsumService->getText(2, TextSizeEnum::medium),
                    'body'     => $this->loremIpsumService->getText(3, TextSizeEnum::long, DecoratorEnum::ul, DecoratorEnum::code),
                    'link'     => Str::random(30)
                ]
		    );
	    }
    }
}
