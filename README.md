# Switchplane Task
This is the jumping off point for participating in the Switchplane Task.
This readme contains details on the package, details on the task will be sent before starting.

## Getting Started
In order to run this project you will need these things installed on your machine:
- [Docker](https://www.docker.com/get-started/)
- [docker-compose](https://docs.docker.com/compose/gettingstarted/)

Once those are installed, run these commands *in this project* to get your server up and running:
- `docker-compose build` to build a local version of the project.
- `docker-compose up -d` to start the server.
- `docker-compose exec task_webserver composer update` to install composer dependencies.

```
💡 To run any arbitrary commands on the server use docker-compose exec task_webserver [your command]

Or you can open a shell using docker-compose exec task_webserver bash
``` 

## Other Info
- This sets up a PHP8 server running with Apache on port 80.
If you want to change ports update the first number in `docker-compose.yml>services>task_webserver>ports`.
- To stop the server run `docker-compose down`. 

## Composer Packages
This project is a barebones PHP Project using composer. It comes with a few packages that we recommend using in the task.
- [Guzzle](https://docs.guzzlephp.org/en/stable/) for a modular way to send HTTP requests.
- [PHPStan](https://phpstan.org/) to run static analysis on the PHP code you write.
  - To run PHPStan your command is `docker-compose exec task_webserver vendor/bin/phpstan`
    
You are welcome to install your own packages using `composer install`.