## Coding-Challenge Thomas Siemion, API-Backend

## Was fehlt
- Authentifizierung
- Tests
- Unterschiedliche Environments

## Setup
- `composer install`
- `sqlite3 storage/app/LV_API.sqlite` (CTRL-D zum Beenden)
- `php artisan migrate:fresh --seed`
- `php artisan serve --port=8080 --host=127.0.0.1`

## Endpunkte
- `GET /api/articles` - Liste aller Artikel
- `GET /api/articlesPaginated/{pageSize}` - Liste aller Artikel mit Paginierung
- `GET /api/article/{id}` - Artikel mit ID

## Anmerkungen
- Der ArticleSeeder wird nicht benötigt, da die Artikel über die `ArticleFactory`, im DatabaseSeeder, erstellt werden.
