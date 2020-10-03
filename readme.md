Run `docker-compose up -d --build site` to start then run
`cp src/.env.example src/.env`
`docker-compose run --rm composer install`
`docker-compose run --rm artisan migrate`
`docker-compose run --rm npm install`
`docker-compose run --rm npm run dev`

To stop, run `docker-compose down`
