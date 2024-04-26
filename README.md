## About Reverb Playground

This is a dummy Laravel a web application with Reverb as a broadcaster server (WebSocket).

## SetUp

Clone:
```bash
git clone https://github.com/hanadi92/reverb-playground.git
```

Copy env file:
```bash
cp .env.example .env
```

Assuming you have a Redis running, add its connection details to the `.env`.

Run Laravel:
```bash
php artisan serve
```

Run Reverb:
```bash
php artisan reverb:start --debug --host=0.0.0.0 --port=8080
```

Update the `.env` Reverb client->host connection values:
```
REVERB_APP_ID=23456
REVERB_APP_KEY=asdasdasdasd
REVERB_APP_SECRET=asdadasdasdas
REVERB_HOST="localhost"
REVERB_PORT=8080
REVERB_SCHEME=http
```
You can also configure Reverb Laravel->host connection values in this config file: `./config/reverb.php`

You will have to figure out TLS connections from the reverb documentation.

Run Queue to queue up broadcasted events:
```bash
php artisan queue:listen
```

Run an on demand dummy Event that will get on the Queue and get to the connected clients (It is a public channel):
```bash
php artisan app:send-some-event
```

## Contributing

## Code of Conduct

## License
