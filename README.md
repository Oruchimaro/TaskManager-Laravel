# How to run?

Clone this repository.

Go to project directory.

Install composer dependencies
```bash
$ ./install_composer_dependencies.sh
```

Create .env file
```bash
$ cp .env.example .env
```

Run application
```bash
$ ./vendor/bin/sail up -d
```

## Create alias for sail
You can create alias for sail, then you can call it with `sail` instead of `./vendor/bin/sail`.
```bash
$ alias sail='bash vendor/bin/sail'
```
OR 
Add this to .bashrc or .zshrc
```bash
$ alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'
```

## Run migrations
```bash
$ sail artisan migrate
```

## Attention 
If you have mysql (db) localy installed, the port (3306mysql or 5432pg) may be taken, so you have to disable the host installation to free the port 
or you can simple add this to **.env** file and specify a new port.
```
FORWARD_DB_PORT=<PORT-NUMBER> #3316, 3326, or any other non-blocked port
```

Similarly if the port for web server (80, 8080) is getting blocked by host, you can add this to **.env** file 
```
APP_PORT=<PORT-NUMBER> #8000, 8001, or any other non-blocked port
```