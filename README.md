# List of Country Flags

## Installation
1. Clone the repository
2. Make sure you can use docker and docker compose
3. `cp .env.example .env`
4. Run:
   ```shell
   docker run --rm \
   -u "$(id -u):$(id -g)" \
   -v "$(pwd):/var/www/html" \
   -w /var/www/html \
   laravelsail/php83-composer:latest \
   composer install --ignore-platform-reqs
   ```
5. Run `sail artisan key:generate`
6. *(Optional)* For simplicity, configure a shell alias:
   ```shell
   alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'
   ```
7. Launch the app: `sail up -d`
8. Migrate the db: `sail artisan migrate`
9. Compile js assets: `sail npm install && sail npm run build`
10. Create a free account on auth0.com
11. Install the Auth0 Cli:
   ```shell
   curl -sSfL https://raw.githubusercontent.com/auth0/auth0-cli/main/install.sh | sh -s -- -b .
   sudo mv ./auth0 /usr/local/bin
   ```
12. Login to Auth0 via the CLI: `auth0 login`
13. Create a new Auth0 regular application:
   ```shell
   auth0 apps create \
     --name "My Laravel Application" \
     --type "regular" \
     --auth-method "post" \
     --callbacks "http://localhost/callback" \
     --logout-urls "http://localhost" \
     --reveal-secrets \
     --no-input \
     --json > .auth0.app.json 
   ```
14. Create a new Auth0 API (if you already have an API with the same identifier, skip this step):
    ```shell
    auth0 apis create \
      --name "My Laravel Application API" \
      --identifier "https://github.com/auth0/laravel-auth0" \
      --offline-access \
      --no-input \
      --json > .auth0.api.json
    ```
15. Visit `http://localhost`, login/signup with Auth0, and you should be redirected to the homepage.

## Country APIs

You can add any provider for the list of countries and flag by following these steps:

1. Add a new enum to the `App\Enums\CountryProvider` enum;
2. Assign an implementation to it (must implement `App\Services\Country\CountryProvider`);
3. Set the `COUNTRY_PROVIDER` .env variable to the new enum's name.

## Pre-fetch & cache countries from API

If the CountryProvider implementation has the `PREFETCH` constant set to `true`, the app will run a scheduled job to
load the countries from the chosen API at regular intervals and cache them for faster retrieval.

You can customize the interval of pre-fetching by setting the value of `PREFETCH_CRON` .env variable to a [valid cron string](https://crontab.guru/).

## Test
You can run `sail artisan test` to run the backend test suite
