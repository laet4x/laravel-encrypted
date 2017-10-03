<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>


## Installation for MacOS using Docker
1. Install docker
2. After docker installation run these command `docker pull geekineers/osx-lamp-laravel-php7` (note: add `sudo` if permission denied)
3.  Clone the repo `git clone https://github.com/laet4x/laravel-encrypted.git`
4. Run these command to use the project via docker
	`docker run -d --name=my-dev-container -v <project directory on host machine>:/var/www/app -P -p <additional ports> -t -i geekineers/osx-lamp-laravel-php7`

	I use these in my own local computer 

	`docker run -d --name=encryption -v /Users/alfrancis/Desktop/Projects/encryption:/var/www/app -P -p 8000:80-t -i geekineers/osx-lamp-laravel-php7`

	change the `<project directory on host machine>` into the directory of your project
5. 	