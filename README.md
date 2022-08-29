# Car Rental Website Project

## Introduction

- This is a car rental website project.
- The purpose of this project is to create a car rental website.
- The website will have a login page, a car listing page, a car reservation page, and a car return page.
- The login page will have a username and password input field.
- The car listing page will have a search bar and a car listing table.
- The car reservation page will have a car reservation table.

## Requirements

- XAMPP is required to run the project.
- The project will be hosted on a localhost server.

##  Installation

- Install XAMPP.
- Open XAMPP and click on the Start button.
- Clone the project to the root of the XAMPP server.
- Open the project in XAMPP.
- Import SQL file from database folder to the XAMPP server.
- Open Browser and navigate to [localhost:8080](localhost:8080).
- Hurray! The project is now running.

##  Database

- The database is stored in a folder called database.
- The database is named as carproject.sql.
- The database is stored in the root of the XAMPP server.
- The database is imported to the XAMPP server.
- Database used is MySQL.

## Table

- The table is named as car.
- The table has the following columns:
    - car_id: INTEGER PRIMARY KEY AUTO_INCREMENT
    - car_make: VARCHAR(255)
    - car_model: VARCHAR(255)
    - car_year: INTEGER
    - car_color: VARCHAR(255)
    - car_price: INTEGER
    - car_available: BOOLEAN
    - car_image: VARCHAR(255)
    - car_description: VARCHAR(255)

##  Car Listing Page

- The car listing page will have a search bar and a car listing table.
- The search bar will have a search button.
- The search button will search for the car based on the search bar input.
- The car shown only on the car listing page will be the car that is available.

## Admin Page

- The admin page will have a car listing table.
- It has a button to add a new car.
- The button will open a new page where the admin can add a new car.
- The admin can add a new car by filling in the form.
- The admin can also delete a car by clicking the delete button.
- Admin can view user reservation by clicking the view button.

