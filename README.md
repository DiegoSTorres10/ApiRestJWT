# ApiRestJWT

## Overview

ApiRestJWT is a RESTful API built with Laravel 10 and utilizes the JWT (JSON Web Tokens) technology. The primary purpose of this API is to provide secure access to customer data.

## Usage

-   git clone https://github.com/DiegoSTorres10/ApiRestJWT.git
-   cd ApiRestJWT

#### Configure the Environment:

Copy the .env.example file to .env and configure the necessary settings, including the database connection and application key.

-   cp .env.example .env

#### Install Dependencies:

```
composer install
php artisan key:generate
php artisan jwt:secret
```

## API Endpoints

| ** Method ** | ** Description**     | ** Path **                   | ** Authentication ** |
| ------------ | -------------------- | ---------------------------- | -------------------- |
| POST         | Enter the API        | api/v1/login                 | No                   |
| POST         | Resgiter to API      | api/v1/register              | No                   |
| POST         | Logout               | api/v1/logout                | Yes                  |
| POST         | Information the user | api/v1/get-user              | Yes                  |
| GET          | All Customers        | api/v1/customers             | No                   |
| GET          | Show Customer        | api/v1/customers/{id}/show   | No                   |
| POST         | Create Customer      | api/v1/customers/register    | Yes                  |
| PUT          | Update Customer      | api/v1/customers/{id}        | Yes                  |
| Delete       | Delete Customer      | api/v1/customers/{id}/delete | Yes                  |

## Registration process

To register you must put in postman (or some other program of your choice) in the body in json: name, email and password. If everything goes well, the token of the created user will be returned to you.

[![Register](https://raw.githubusercontent.com/DiegoSTorres10/ApiRestJWT/main/public/images/Register.png "Register")](https://raw.githubusercontent.com/DiegoSTorres10/ApiRestJWT/main/public/images/Register.png "Register")

## Login Process

To log in you must provide the email and password, and if everything goes well, the token is returned

[![Login](https://raw.githubusercontent.com/DiegoSTorres10/ApiRestJWT/main/public/images/Login.png "Login")](https://raw.githubusercontent.com/DiegoSTorres10/ApiRestJWT/main/public/images/Login.png "Login")

## Logout Process

To log out you must send the token

[![Logout](https://raw.githubusercontent.com/DiegoSTorres10/ApiRestJWT/main/public/images/Logout.png "Logout")](https://raw.githubusercontent.com/DiegoSTorres10/ApiRestJWT/main/public/images/Logout.png "Logout")

## Get-user

To obtain the user's data, the token must be sent and the user's information returned.

[![get-user](https://raw.githubusercontent.com/DiegoSTorres10/ApiRestJWT/main/public/images/Get-user.png "get-user")](https://raw.githubusercontent.com/DiegoSTorres10/ApiRestJWT/main/public/images/Get-user.png "get-user")

## Show all customers

In this case we only have to put the API address and in the get method, so that it shows us all the registered customers

[![Show all customers](https://raw.githubusercontent.com/DiegoSTorres10/ApiRestJWT/main/public/images/Customers.png "Show all customers")](https://raw.githubusercontent.com/DiegoSTorres10/ApiRestJWT/main/public/images/Customers.png "Show all customers")

## Show a specific Customer

To see only one client, you must make the appropriate get request without a body in the request.

[![ShowCusotmer](https://raw.githubusercontent.com/DiegoSTorres10/ApiRestJWT/main/public/images/ShowCustomer.png "ShowCusotmer")](https://raw.githubusercontent.com/DiegoSTorres10/ApiRestJWT/main/public/images/ShowCustomer.png "ShowCusotmer")

## New Customer

First we must enter the token that is given to us when logging in to make this request

[![Parte1Register](https://raw.githubusercontent.com/DiegoSTorres10/ApiRestJWT/main/public/images/Part1RegisterCustomer.png "Parte1Register")](https://raw.githubusercontent.com/DiegoSTorres10/ApiRestJWT/main/public/images/Part1RegisterCustomer.png "Parte1Register")

Subsequently, we must send the data in the body: FullName, Phone, Email, Address (Optional)

[![Parte2Register](https://raw.githubusercontent.com/DiegoSTorres10/ApiRestJWT/main/public/images/Part2RegisterCustomer.png "Parte2Register")](https://raw.githubusercontent.com/DiegoSTorres10/ApiRestJWT/main/public/images/Part2RegisterCustomer.png "Parte2Register")

## Update Customer

To update, the first step must be carried out, which is to place the token, then in the api address, place the client ID, and send the new data (FullName, Phone, Email, Address (Optional)

[![UpdateCustomer](https://raw.githubusercontent.com/DiegoSTorres10/ApiRestJWT/main/public/images/UpdateCustomer.png "UpdateCustomer")](https://raw.githubusercontent.com/DiegoSTorres10/ApiRestJWT/main/public/images/UpdateCustomer.png "UpdateCustomer")

## Delete Customer

To delete, you must perform the first step, which is to place the token, then in the api address, enter the client ID, and if everything goes well, it will send you an elimination message.

[![DeleteCustomer](https://raw.githubusercontent.com/DiegoSTorres10/ApiRestJWT/main/public/images/DeletedCustomer.png "DeleteCustomer")](https://raw.githubusercontent.com/DiegoSTorres10/ApiRestJWT/main/public/images/DeletedCustomer.png "DeleteCustomer")

## Local Development:

-   php artisan serve
-   http://localhost:8000

## Production:

URL apijswt.torreswebdev.com/api/v1 

## User

-   email: diegostorres10@gmail.com
-   password: 12345678
