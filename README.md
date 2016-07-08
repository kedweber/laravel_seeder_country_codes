# Country Codes, Names and Regex for Postal Codes in 4 Languages for Laravel

## Description

Working in Laravel and need a quick fix for a complete listing of the standard country codes? All 
three unique codes;
    [ISO_3166-1_alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2),
    [ISO_3166-1_alpha-3](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3) and 
    [3-digit numeric codes](https://en.wikipedia.org/wiki/ISO_3166-1_numeric),
plus the translated country names and a regular expression field used 
for validating postal codes are included in this repository.

Feedback is most welcome, so please feel free to 
[inform me of any issues](https://github.com/kedweber/laravel_seeder_country_codes/issues).

## Installation

### Importing Files and Setup

The full paths for placement of these classes are replicated within this repository. 
Simply merge the following files into your Laravel environment:

    1. Country.php - Model (the Eloquent ORM representation of a `countries` record)
    2. 1999_01_01_000000_create_countries_table.php - Migration (creates the database table)
    3. CountriesSeeder.php - Database seeder (seeds the `countries` table with data)
    
into their respective directories of your current Laravel installation. You will likely want to
add a few lines of code into your *DatabaseSeeder.php* file. The following code needs to go after 
your `public function run()` procedure.

```
    $this->call('CountriesSeeder');
    // the following line is optional
    $this->command->info('Countries table of codes, postcode validation, languages seeded! https://github.com/kedweber/laravel_seeder_country_codes');
```

### Adding the Model

Normally, Laravel defaults its Model creation to the App directory. `Country.php` uses the App namespace. 
If you have modified the location of your models, you will want to edit the namespace. 

*NOTE:* If you want the standard two timestamp fields; `created_at` and `updated_at` you will want to remove
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

*NOTE:*  If you are using the Homestead or Vagrant virtual machine, you should run this command from within your Virtual Machine.

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
| label_nl | string | Dutch country localized name |
| label_en | string | English country localized name |
| label_de | string | German country localized name |
| label_es | string | Spanish country localized name |
| label_fr | string | French country localized name |
| postCode | string | Regex for postal code |
| domain | string | internet domain name | 

Only a handful of European entries are active by default in this distribution.

## Official Laravel 5.2 Documentation

[Migrations](https://laravel.com/docs/5.2/migrations)

[Seeding](https://laravel.com/docs/5.2/seeding)

## Permissions and Disclaimer
   
This License has been voluntarily deprecated by its author, henceforth referred to as "creator" and/or any "contributors".
Copyright (c) 2016, KedWeber under a Creative Commons licence.
   
Permission to use, copy, modify and distribute this software and its documentation for any purpose and without 
fee is hereby granted, provided that the above copyright notice appear in all  copies, 
and hitherto both the copyright notice and this permission notice appear in supporting 
documentation, and that the named creator or related contributors are not be used in advertising 
or publicity pertaining to distribution of the software without specific, written prior permission. 
Said creator and any of the contributors make no representation about the suitability of this software for any purpose. 
It is provided "as is" without express or implied warranty.
   
SAID "creator" AND CONTRIBUTORS DISCLAIM ALL WARRANTIES WITH REGARD TO THIS SOFTWARE, INCLUDING ALL IMPLIED WARRANTIES 
OF MERCHANTABILITY AND FITNESS. IN NO EVENT SHALL said "creator" AND THE CONTRIBUTORS BE LIABLE FOR ANY SPECIAL, 
INDIRECT OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES WHATSOEVER RESULTING FROM LOSS OF USE, DATA OR PROFITS, 
WHETHER IN AN ACTION OF CONTRACT, NEGLIGENCE OR OTHER TORTIOUS ACTION, ARISING OUT OF OR IN CONNECTION 
WITH THE USE OR PERFORMANCE OF THIS SOFTWARE.






