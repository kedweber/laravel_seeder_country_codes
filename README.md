# Country Codes, Names and Regex for Postal Codes in 4 Languages for Laravel

## Installation

### Importing Files and Setup

The full paths are provided within this repository. Simply merge the two files:

    1. 1999_01_01_000000_create_countries_table.php
    2. CountriesSeeder.php
    
into their respective directories of your current Laravel installation. You will likely want to
add a few lines of code into your *DatabaseSeeder.php* file. The following code needs to go after 
your `run` procedure.

```
    $this->call('CountriesSeeder');
    // the following line is optional
    $this->command->info('Countries table of codes, postcode validation, languages seeded!');
```

### Table Creation

*WARNING:* If your present database has the table named `countries` the following will effective destroy the existing
table and 

Within a standard Laravel table, all your previous migrations are recorded after the name of the file migration file.
In our case the entry `1999_01_01_000000_create_countries_table` does not yet exist, so we simply need to run
the following command:

```
php artisan migrate
```

Note:  If you are using the Homestead or Vagrant virtual machine, you should run this command from within your Virtual Machine.

### Importing the Data

Now that the `countries` table exists in your database, we can run the following command to import the data.

```
php artisan db:seed --class=CountriesSeeder
```

### Table Description


## Official Laravel Documentation
(Migration)[https://laravel.com/docs/5.2/migrations]
(Seeding)[https://laravel.com/docs/5.2/seeding]






