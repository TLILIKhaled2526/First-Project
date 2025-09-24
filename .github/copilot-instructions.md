# Copilot Instructions for AI Agents

## Project Overview
This is a Symfony-based PHP web application. The project structure follows standard Symfony conventions, with controllers in `src/Controller/`, templates in `templates/`, configuration in `config/`, and public entry points in `public/`.

## Key Components
- **Controllers**: Located in `src/Controller/`. Each controller handles a specific domain (e.g., `AuthorController`, `HomeController`, `ServiceController`).
- **Templates**: Twig templates are in `templates/`, organized by feature (e.g., `author/show.html.twig`).
- **Routing**: Defined in `config/routes.yaml` and `config/routes/`. Ensure new routes are registered here.
- **Entities/Repositories**: Domain models and data access are in `src/Entity/` and `src/Repository/`.
- **Assets**: JavaScript and CSS are in `assets/`. Use `assets/app.js` and `assets/styles/app.css` for main entry points.

## Developer Workflows
- **Run the app**: `php -S localhost:8000 -t public` or use Symfony CLI if available.
- **Run tests**: `vendor\bin\phpunit` (Windows) or `bin/phpunit` (Linux/Mac). Test files are in `tests/`.
- **Clear cache**: `php bin/console cache:clear`
- **Database migrations**: Use Doctrine commands via `php bin/console doctrine:migrations:migrate`

## Project-Specific Patterns
- **Routing**: Route parameters should be simple slugs or IDs. Avoid passing raw objects or encoded arrays in URLs (see 404 for `/author/%7BVictor%20Hugo%7D`).
- **Twig**: Use template inheritance from `base.html.twig`.
- **Services**: Register custom services in `config/services.yaml`.
- **Configuration**: Use `config/packages/` for bundle configs and `config/routes/` for modular route definitions.

## Integration Points
- **Doctrine ORM**: Used for database access. Entities and repositories follow Symfony/Doctrine conventions.
- **Twig**: All views rendered via Twig.
- **Asset Mapper**: Configured in `config/packages/asset_mapper.yaml`.

## Examples
- To add a new page:
  1. Create a controller in `src/Controller/`
  2. Add a route in `config/routes.yaml` or as an annotation
  3. Create a Twig template in `templates/`

- To add a new service:
  1. Implement the service class in `src/`
  2. Register it in `config/services.yaml`

## References
- `src/Controller/` — Controllers
- `templates/` — Twig templates
- `config/routes.yaml`, `config/routes/` — Routing
- `assets/` — Frontend assets
- `tests/` — PHPUnit tests

---
For more details, see Symfony documentation: https://symfony.com/doc/current/index.html
