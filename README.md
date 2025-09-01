# Travel Website Project

This GitHub repository hosts a travel website project that is built using HTML, CSS, JavaScript, and PHP, with a MySQL database to manage tour bookings. It's important to note that this project is intended for local deployment.

![Website Preview](/preview/travel_home.png)

## Table of Contents

- [Features](#features)
- [Requirements](#requirements)
- [Installation](#installation)

## Features

The travel website offers a user-friendly menu with various options: 
- Home - an informative landing page presenting an overview of the travel organisation
- About Us - brief introduction to the travel services
- Popular Tours - three popular tour options are recommended, along with their descriptions
- Explore - takes users to the "Book Now" form page
- Book Now Form - user-input form that collects essential information, including the user's name, phone number, email, destination, tour choice, number of travellers, and desired travel dates, which on submission would reflect the data of the user in the database connected.

## Requirements

Before you can use this project, you need the following software tools installed on your machine:

- [XAMPP](https://www.apachefriends.org/index.html): A web server solution that includes Apache, MySQL, PHP, and phpMyAdmin.

## Installation

Follow these steps to set up the project locally on your machine:

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/IraMalik/Travel-Website-HTML-CSS-JS-PHPMySQL.git
   ```

2. **Move Files & Start XAMPP:**
   Move the cloned repository to the `travel` folder inside the `htdocs` directory within your XAMPP installation. Start the XAMPP control panel and make sure the Apache and MySQL services are running.

3. **Create Database:**
   - Access `http://localhost/phpmyadmin` in your web browser.
   - Create a new database and name it `travel`, and make a table with the required column names.

5. **Access the Website:**
   Open your web browser and search `http://localhost/travel` to access the locally hosted travel website. 

