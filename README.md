# dynamic-html-tables-with-php
Generating Dynamic HTML Tables with PHP
This project shows you how to generate dynamic HTML tables by retrieving data from tables stored in a PHP MySQL Database irrespective of the table structure. 
Each table generated will be displayed based on the structure of the table in the PHP MySQL Database where it is being retrieved from.

## Getting Started
Download the project zip file.
In order to test it locally, you must have either XAMPP Server or WAMP Server Installed on your machine. 

### Prerequisites
XAMPP Server or WAMP Server Installed on your machine (You can check out a youtube video on how to setup XAMPP or WAMP Server). 

## Running a test
In this demonstration, I would assume you want to run it on a Windows PC and you have installed XAMPP Server.
After succesful setup of the Server,
1. Unzip the demo folder and 
2. Copy the 'dynamic-tables-with-php' folder then navigate to 'C:\xampp\htdocs' on your PC and 
3. Paste it the 'htdocs' folder
4. Launch the XAMPP Application (start the Apache and MySQL Modules)
5. Launch your browser, then type 'http://localhost/phpmyadmin/' into your address bar and press Enter (You should see the phpMyAdmin Dashboard)
6. Click on the 'Databases' Tab and create a new database with the name: dynamic_tables_db
7. After Creating the database, Click on the 'Import' tab then click on the 'Choose File' button on the section that displays below to select a file from your Computer
8. Navigate to the 'dynamic-tables-with-php' folder you previously copied and select the 'dynamic_tables.sql' file, scroll to the bottom of the page and click on the 'Go' button 
   to import the test tables. 

9. After succesfully importing the tables into the created database, 
   Open your browser, then type 'http://localhost/dynamic-tables-with-php/' into your address bar and press Enter
 
10. On the page, copy or type the name of the test database into the database input.
    Then copy any table name under the tables list into the table input
    Then Press "Fetch Information"
    It will retrieve and display the information for the table entered.
