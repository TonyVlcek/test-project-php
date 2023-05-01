# PHP Test Project
Appivia.com

## Description
This is a very simple one-page application consisting of a single table and a form for creating new rows. To make it a little more complicated, we have written a 'framework' you have to use. Below is a set of simple tasks to perform. Please write a production-ready code.

## Installation
1. Fork this repository
2. Create a new MySQL database
3. Rename .env.template to .env and set environment variables
4. Import `database/schema.sql` into your database


## Tasks to perform
1. ✅ Style the page using [Bootstrap](http://getbootstrap.com/):
  * Every other table row should be highlighted.
  * Use Bootstrap’s form-horizontal to style the form.
  * Any other styling changes should be made based on your preference. Please make the interface look presentable!
2. ✅ Add a validation of new records.
3. ✅ Create a JS functionality to filter rows by city.
4. ✅ Implement submission of the form using AJAX.
5. ✅ Add a phone number column to the table.
6. ✅ Please deploy the project to any freehosting and send us the production link.

## To run locally

```bash
cp .env.template .env
```
Set env variable accordingly. Then export variables start php server:
```bash
export $(grep -v '^#' .env | xargs)
php -S localhost:8080
```

💡 If you don't have PHP on your machine you can build and run the Dockerfile.

## To deploy
Production deployment is done via [fly.io](https://fly.io).

### 1. (optional) Deploy the database
```bash
cd ./database
fly volumes create mysqldata --size 1 #gb
fly secrets set MYSQL_PASSWORD=<your-password> MYSQL_ROOT_PASSWORD=<your-password>
fly deploy
```

### 2. Set secrets & deploy
(from the root of this project)
```bash
fly secrets set \
    DB_ADDR='<host>:<port>' \
    DB_USER='<user>' \
    DB_PASS='<pass>' \
    DB_SCHEMA='<schema>'
fly deploy
```
