# Lancaster Web Development Projects

This repository contains web development projects created as part of the Web Development module at Lancaster. The coursework is divided into two parts:

## 📌 Coursework 1 (CW1) - Frontend Design

**Description:**
- CW1 focuses solely on frontend design and development.
- Built using modern web technologies to create an engaging and responsive user interface.

**Tech Stack:**
- HTML
- CSS (
- JavaScript (Vanilla)

## 🍽️ Coursework 2 (CW2) - Full-Stack Restaurant Application

**Description:**
- CW2 is a complete full-stack application designed for a restaurant.
- Implements backend functionality alongside frontend design.

**Tech Stack:**
- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP Twig Template
- **Database:** MySQL

## 🚀 How to Run

### CW1 (Frontend Only)
1. Clone the repository:

2. Navigate to the CW1 directory:

3. Open `index.html` in a browser.#

### CW2 (Full stack)

1. Move the 'website' Folder
Place the website folder inside the /var/www/html/ directory. so inside of html folder you will have the website folder

2.  Open the Folder in VS Code
Open the website folder in Visual Studio Code (VS Code).

3. Open Terminal in VS Code
Open the integrated terminal in VS Code by going to Terminal > New Terminal in the menu.

4. Install Dependencies
In the terminal, assuming Composer is set up, run the following command:
composer install
This will install all the required dependencies for the project.


5. Secure the 'private' Folder
For security reasons, move the 'private' folder into a more secure location(currently its just in website for ease of access):
Move it to /var/www -> so inside of 'www' you will have two folders now 'html' and 'private' (if problems read step 6)

6. Update the Configuration (Optional)
If you encounter issues with the folder placement, you can leave the private folder in its current location(for demo purpose).
In the 'includes/dbconnect.php' file and 'includes/dbscript.php', update the $config variable by setting the path to 'path1' (as needed) its set to path2 as default. This is just for demo purpose so if any problems the connection still works 

7. Set Up the Database
To automatically set up the database, run the following command in the terminal: php includes/dbscript.php
This will set up the database with the necessary tables and configurations.

8. Run the Program
To run the program, start a PHP built-in server by running the following command:
php -S localhost:8000
You can change the port number (e.g., localhost:8001) if port 8000 is already in use.



### CW2 Access Application
Home Page
Open your web browser and navigate to the localhost port you have configured. This will take you to the home page.

Staff Portal
To access the Staff Portal, enter the following URL in your browser:
http://localhost:8000/staffportal
(Ensure to use your configured localhost address if different).
The Staff Portal will handle all necessary redirects(this is excluded from main website so diners dont randomly access it).

First-Time Setup for Staff Account
For the initial setup of a staff account, you will be required to provide a secret key. The secret key is simply the value:
"secret"
This key is used for security purposes during the first-time configuration(also as a template to simulate real life environ and safe section for staff)
please fill the reset of the details for staff section, the password needs to be 8 length, atleast 1 symbol mixer of letters digits

e.g. @Password1 (this is valid)

StaffHub
Initial Setup
Currently, no services are set up, so the dashboard, services, and booking sections will appear empty. 
To get started, navigate to the "services" section and add services for specific dates.

Setting Up Default Services
Use the "Assign Default" button to set up default services. Afterward, go to the "Unassigned Services" table, where you can quickly assign the default services to your schedule.

Proceed to the Diner
Once services are added, proceed to the diner by visiting the following URL:
http://localhost:8000/

Navigating the Hub
From here, the process should be straightforward. Use the navigation header to:
