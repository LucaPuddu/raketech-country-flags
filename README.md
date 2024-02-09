## How to run this project
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
5. *(Optional)* For simplicity, configure a shell alias:
   ```shell
   alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'
   ```
6. Launch the app with `sail up -d`
7. Migrate the db `sail artisan migration`
8. Compile js assets with `sail npm install && sail npm run build`
