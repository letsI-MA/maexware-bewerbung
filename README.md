# maexware-application
## My O3-Shop application for maexware solutions GmbH

My task was to set up a local development environment using ddev (https://ddev.com/) where an O3 Shop (https://www.o3-shop.com/) is running. The development environment should be shared via a Git repository. The requirement is that another developer should be able to check out the repo and start the project without much effort (e.g., importing a DB dump). For bonus points, I was asked to write a small module for the O3 Shop (a fork of OXID eShop V6) that displays a new custom database field on the product detail page.

At first, I tried to solve the task on my Windows machine, but I quickly abandoned that approach and switched to WSL2.
In WSL2, I installed DDEV by following the documentation. After that, I took care of the system prerequisites needed for O3-Shop. These are:

## Webserver:

- Apache 2.2 oder 2.4(on Linux)
- mod_rewrite installiert und aktiviert (enabled by default on Apache2)

## Database:

Database:

- MySQL 5.5, 5.7, or 8.0
- MariaDB (I will go into this later)

## PHP: 

- PHP versions 7.4, 8.0, 8.1 or 8.2
- A memory_limit of 60 MB, but at least 32 MB, is recommended.
- The PHP setting session.auto_start in the php.ini file should be disabled (OFF)
- File uploads should be enabled in PHP
- Enabled allow_url_fopen and fsockopen on port 80
- Apache server variables REQUEST_URI or SCRIPT_URI must be present
- ini_set allowed

## PHP extensions:

- GD LIB version 2.x
- PDO_MySQL
- BC Math
- JSON
- iconv
- tokenizer
- mbstring
- cURL
- SOAP
- DOM

## Composer:

- Composer 2.2
`composer selfupdate --2.2`

## OpenSSL:

- openssl >= 1.0.1

## Adjust file and directory permissions:

I noticed that after creating the project and running Composer, the folder structure was not quite correct. Therefore, I set the docroot to MAEXWARE/Source in my case. 

![docroot](https://github.com/user-attachments/assets/31379009-b496-4ed7-a565-91b0ebc5e220)


First, I switched the webserver from nginx-fpm to apache fpm as it was listed in the documentation.

### Then, I set the permissions to `777` as per the documentation:

- `chmod -R 777 /var/www/html/source/export`
- `chmod -R 777 /var/www/html/source/log`
- `chmod -R 777 /var/www/html/source/out/pictures`
- `chmod -R 777 /var/www/html/source/out/media`
- `chmod -R 777 /var/www/html/source/tmp`
- `chmod -R 777 /var/www/html/var`


### Now, set the permissions for the CLI user to `777`aswell:

- `chmod -R 777 /var/www/html/var`
- `chmod -R 777 /var/www/html/source/var`
  
### And for the web-based setup:

- `sudo chown -R www-data:www-data /var/www/html/source/Setup`
- `sudo chown www-data:www-data /var/www/html/source/config.inc.php`
- `sudo chown www-data:www-data /var/www/html/.env`
- `sudo chown www-data:www-data /var/www/html/source/.htaccess`
- `sudo chmod -R 775 /var/www/html/source/Setup`
- `sudo chmod 664 /var/www/html/source/config.inc.php`
- `sudo chmod 664 /var/www/html/.env`
- `sudo chmod 664 /var/www/html/source/.htaccess`

Next, I removed individual bugs and got a bit stuck with MariaDB...

### MariaDB Version Issues:

The documentation states that `MariaDB 10` should work. However, in my case with  `Version 10.11` it didn’t work, and I had to switch to `Version 10.3`. Furthermore, in the setup, the database creation suggests `localhost` as the host, which is incorrect. A forum post from [ProcessWire](https://processwire.com/talk/topic/29557-using-ddev-database-connection-information-did-not-work/) pointed out that the host should be `db`, not `localhost`. This is due to Docker's DNS resolver in combination with DDEV.



### The terminal looks like this and the shop is running.

![terminal](https://github.com/user-attachments/assets/29ec5438-0635-4d03-8051-23f16c9ccb7d)


# Bonus

Currently I'm working on the module that displays a new custom database field on the product detail page.
