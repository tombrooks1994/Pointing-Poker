# Pointing-Poker
Agile planning poker project to create a faster alternative for a squad

### Getting Started
Before Starting please ensure you have the following added to your hosts file:

```
127.0.0.1 www.planningpoker.webdev998
127.0.0.1 www.planningpoker.webdev999
```

This is a Symfony Docker project meaning that you are able to spin the project up if
you are running docker very easily. Take a clone of the repository and in the root
of the directory run `docker-compose up -d`. Once you have completed this step go to 
http://www.planningpoker.webdev998/index.php/ in your browser.

This project is also using a MySQL database so if you would like to connect to the database using
your favourite database manager use the following:
- Username: app:
- Password: password
- Hostname: localhost
- Database: laravel_docker