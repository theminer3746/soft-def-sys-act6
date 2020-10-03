Run `docker-compose up -d --build site` to start then run
`docker-compose run --rm composer install`
`docker-compose run --rm artisan migrate`
`docker-compose run --rm npm run dev`
