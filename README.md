<h1>MTG Backend</h1>

<h2>WIP</h2>

## About

This is a backend for the Magic: The Gathering, search engine and a deck builder.
Currently, it is in development. It is laravel based currently with a sqlite database, inertia and react. 

&nbsp;

## Features

- Search engine for Magic: The Gathering cards
- Deck builder with customizable card lists
- User authentication and profile management

&nbsp;

## Installation

Recommendation:
- use laravel Herd too run this project

&nbsp;

Download or clone the repository from GitHub:

```
git clone https://github.com/Hetiskris/mtg-backend.git
```

Go into the directory and run the following commands:

```
cd mtg-backend
composer install
npm install
npm run build
```

Setup The Database:

```
php artisan migrate
```

Copy the two json test files (test.json and test2.json) from devData to the `storage/app/private/data/` directory so that they can be imported.

Command to import the data:

```
php artisan cards:import-buld-scryfall-data
```

## TDLR;

Currently this project doesn't have a frontend yet. The backend is still in deveploment, the import for a JSON file is being worked on.

- [laravel](https://laravel.com/)
- [react](https://reactjs.org/)
- [scryfall](https://scryfall.com/docs/syntax) (API for the bulk data)
