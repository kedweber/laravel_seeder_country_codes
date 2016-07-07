# Country Codes, Names and Regex for Postal Codes in 4 Languages for Laravel

## Description

Working in Laravel and need a quick fix for a complete listing of the standard country codes? All 
three unique codes, plus the translated country names and a regular expression field if you 
need to validate postal codes are included in this repository.

## Installation

### Importing Files and Setup

The full paths are provided within this repository. Simply merge the two files:

    1. Country.php - Model
    2. 1999_01_01_000000_create_countries_table.php - Migration
    3. CountriesSeeder.php - Database seeder
    
into their respective directories of your current Laravel installation. You will likely want to
add a few lines of code into your *DatabaseSeeder.php* file. The following code needs to go after 
your `run` procedure.

```
    $this->call('CountriesSeeder');
    // the following line is optional
    $this->command->info('Countries table of codes, postcode validation, languages seeded!');
```

### Adding the Model

Normally, Laravel defaults its Model creation to the App directory. `Country.php` uses the App namespace. 
If you have modified the location of your models, you will want to edit the namespace. 

NOTE: If you want the standard two timestamp fields; `created_at` and `updated_at` you will want to remove
the following lines from the Country model.

```
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
```


### Table Creation

*WARNING:* If your present database has the table named `countries` the following will effectively destroy the existing
table and all related data

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

| Field Name | Type | Description | 
| --- | --- | --- |
| id | numeric | unique |
| code | string | ISO 3166-1 alpha-2 |
| code3 | string | ISO 3166-1 alpha-3 |
| codeNumeric | string | Due to 0 prefixes |
| active | boolean | option for activating the use of a particular entry |
| label_nl | string | Dutch country name |
| label_en | string | English country name |
| label_de | string | German country name |
| label_es | string | Spanish country name |
| label_fr | string | French country name |
| postCode | string | Regex for postal code |
| domain | string | internet domain name | 

Only a handful of European entries are active by default in this distribution.

## Official Laravel 5.2 Documentation

[Migrations](https://laravel.com/docs/5.2/migrations)

[Seeding](https://laravel.com/docs/5.2/seeding)






