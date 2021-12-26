![CI](https://github.com/solar05/Scavgen/workflows/CI/badge.svg)
[![Maintainability](https://api.codeclimate.com/v1/badges/b4dfb987e53526f51301/maintainability)](https://codeclimate.com/github/solar05/Scavgen/maintainability)
## Install project
- `make install` for install dependencies (required php and other default libraries).
- `make run` for manual run.
- `make compose` for docker-compose run.
- `make stop` for docker-compose down.

## Linters and tests
- `make lint` for linter.
- `make test` for tests execute.
- `make compose-lint` for docker linter.
- `make compose-test` for docker tests execute.

## API
- `get /api/single` for single scav generation.
- `get /api/team` for scav team generation.
- `get /api/stats` for scav generation statistics.

## About Project
Scavenger names generator. (Escape From Tarkov videogame)

## License
[MIT license](https://opensource.org/licenses/MIT).
