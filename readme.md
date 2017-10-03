<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>


## Installation for MacOS using Docker
1. Install docker
2. After docker installation run these command `docker pull geekineers/osx-lamp-laravel-php7` (note: add `sudo` if permission denied)
3.  Clone the repo `git clone https://github.com/laet4x/laravel-encrypted.git`
4. Run these command to use the project via docker
	`docker run -d --name=my-dev-container -v <project directory on host machine>:/var/www/app -P -p <additional ports> -t -i geekineers/osx-lamp-laravel-php7`

	I use these in my own local computer 

	`docker run -d --name=encryption -v /Users/alfrancis/Desktop/Projects/encryption:/var/www/app -P -p 8000:80 -t -i geekineers/osx-lamp-laravel-php7`

	change the `<project directory on host machine>` into the directory of your project
5. 	Now visit to `http://localhost:8000/` the default apache2 index will shown.
6.  Visit to http://localhost:8000/phpmyadmin
	usename: root
	password: root
7.  Create database name `encryption`
8.  In project directory rename .env.example into .env and change these line
 	
 	`DB_DATABASE=encryption
	DB_USERNAME=root
	DB_PASSWORD=root`

9. Run `docker exec -ti encryption /bin/bash`
10. goto `/etc/apache2/sites-available`
11. Modify `000-default.conf`
12. Update using these config
	                       
	`<VirtualHost *:80>
		ServerAdmin webmaster@localhost
	 	DocumentRoot "/var/www/app/public"
		ServerName localhost
	 <Directory "/var/www/app/public" >
	 	Options Indexes FollowSymLinks MultiViews
		AllowOverride All
	 	Order allow,deny
		Allow from all
	 	</Directory> ErrorLog "/var/log/apache2/encryption-error_log"
	 	CustomLog "/var/log/apache2/encryption--access_log" common
	 </VirtualHost>`

13. restart apache `services apache2 restart`
14. inside docker containter goto to `/var/www/app` and run the following
	a. `chmod -R 7777 bootstrap storage public`	
	b. `php artisan generate:key`
	c. `php artisan migrate`
	d. `php artisan db:seed`
15. Gotcha!	