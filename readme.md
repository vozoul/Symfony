# Symfony 4.3

---

## Install Symfony FrameWork

download it at https://symfony.com/download

the third downloads are explain in docs on page
for each OS.

 * Windows : 
#### with setup installer
- get the [setup.exe](https://get.symfony.com/cli/setup.exe) file
- or at this link : https://get.symfony.com/cli/setup.exe ( direct download )
- then launch it and follow steps, it should be rigth.

 * Linux : 
 #### in your command line editor :

> wget https://get.symfony.com/cli/installer -O - | bash

 * MacOS : 
 #### in your command line editor :
> curl -sS https://get.symfony.com/cli/installer | bash

---

## Create a new project

### Fist methode ( Deprecated )
#### in your command line editor :
##### run this if you are building a traditionnal web application
> symfony new --full my_project
##### run this if you are building a microservice, console application or API
> symfony new my-project


### Second methode ( Best Practice )
##### run this if you are building a traditionnal web application
> composer create-project symfony/website-skeleton <project_name>

##### run this if you are building a microservice, console application or API
> composer create-project symfony/skeleton <project_name>

---

## What's next ?

* configure your DATABASE_URL config in [.env]()  file
* configure the DATABASE driver and server_version in [config/packages/doctrine.yaml]()

---

## verify versions
    versions :
        -$ php -v

            PHP 7.3.5 (cli) (built: May  1 2019 13:17:17) ( ZTS MSVC15 (Visual C++ 2017) x64 )
            Copyright (c) 1997-2018 The PHP Group
            <WEB_SERVER_SYSTEM_ENGINE>

        -$ mysql --version

            mysql  Ver 8.0.13 for <SYSTEM_AND_OS> (MySQL Community Server - GPL)

        -$ composer -V

            Composer version 1.8.3 <TIMESTAMP>


---

## Run Server

* to run your app
    - you can do this:

    > cd <project_folder>
    >
    > symfony server:run

    - or

    >cd <project_folder>
    >
    >php bin/console server:start


---

# THEN LET'S PLAY Symfony FrameWork !!!
