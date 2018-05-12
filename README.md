# Requirements

* PHP: 7.1.3
* Composer

# Installation

* Download the repository from https://github.com/Norgul/contacts.git
* Depending on the environment used (Homestead vagrant box within VirtualBox), mapping will need to be done which is not within the scope of this document
* Do a 'composer install'
* Run 'php artisan key:generate'
* Fill out '.env' file with database credentials (MySQL DB is used), and create DB if one is not created already
* Run 'php artisan migrate --seed'

# Assumptions & notes

Since backend and frontend are a part of the same project, it seemed somewhat illogical performance wise to make API per-se. Instead, REST routes were made inside
'web.php'. Even with REST API routes the logic would still stay the same, so the assumption here is that it shouldn't pose any problem, but can be re-done if needed.