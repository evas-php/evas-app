# evas-app
Evas PHP starter pack

## Install
1. Clone repository
```
git clone https://github.com/evas-php/evas-app myapp
```
2. Install dependencies (using composer https://getcomposer.org/download/)
```
composer install
```

## Testing evas modules
1. Setup codeception
```
php vendor/bin/codecept bootstrap
```
2. Create database for tests with name `evas-tests`

3. Setup database connection in `vendor\evas-php\evas-db\tests\_config\db_tests_config.php`

4. Run tests
```
php vendor/bin/codecept run unit vendor/evas-php/
```

## Directories
- `public` directory for public files. index.php, css, js, images here
- `config` directory for config files
- `vendor` directory for dependency libraries
- The rest is at your discretion 
