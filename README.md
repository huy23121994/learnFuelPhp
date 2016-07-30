<<<<<<< HEAD
#FuelPHP

* Version: 1.8
* [Website](http://fuelphp.com/)
* [Release Documentation](http://docs.fuelphp.com)
* [Release API browser](http://api.fuelphp.com)
* [Development branch Documentation](http://dev-docs.fuelphp.com)
* [Development branch API browser](http://dev-api.fuelphp.com)
* [Support Forum](http://fuelphp.com/forums) for comments, discussion and community support

## 1. Install Oil

### a. On Linux
Open terminal and run:
```
$ curl get.fuelphp.com/oil | sh
```
Now you can use command "oil" or "php oil" to use into app.
### b. On Windows(I'm using Xampp)
You cannot use "oil" or "php oil" command outside your application. When you clone the Fuel app form Git (https://github.com/fuel/fuel.git), you need to run "composer install" ( require Composer installing ) to install packgages which include Auth, Email, Oil, Orm, Parser,... (you can see them in composer.json ). If you download FuelApp form homepage, you cannot run composer.
Open cmd:
```
$ cd your\app\path
```
From now on, you can you "php oil" (cannot use "oil") to generate or do more in your app.

## 2. Note for migration on Windows

On Windows, The first time when I run "php oil refine migrate", this return "Already on the latest migration for app:default.". But my database don't have data, the migrate table has 0 record.
To solve this, run: 
```
$ php oil refine migrate:current
```

It will work. From now, you can use "php oil refine migrate" nomarlly.

## 3. To be continues ...
=======
1.  Install Oil 
    a. On Linux:
        $ curl get.fuelphp.com/oil | sh
    Now you can use command "oil" or "php oil" to use into app.

    b. On Windows(I'm using Xampp): 
        You cannot use "oil" or "php oil" command outside your application. When you clone the Fuel app form Git (https://github.com/fuel/fuel.git),
    you need to run "composer install" ( require Composer installing ) to install packgages which include Auth, Email, Oil, Orm, Parser,... (you 
    can see them in composer.json ).
        Open cmd: 
            cd your\app\path
        From now on, you can you "php oil" (cannot use "oil") to generate or do more in your app.

2.  Note for migration on Windows
    
        On Windows, The first time when I run "php oil refine migrate", this return "Already on the latest migration for app:default.".
    But my database don't have data, the migrate table has 0 record.
    To solve this, you run: 
        "php oil refine migrate:current".
    It will work. From now, you can use "php oil refine migrate" nomarlly.

3.  To be continues ...
    
>>>>>>> 36c856381c9ff413a5f83ac36b2d7e1a00cb5d63
