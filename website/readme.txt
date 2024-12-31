 
Installation and Setup Instructions
Follow the steps below to set up and run the project

Step 1: Move the 'website' Folder
Place the website folder inside the /var/www/html/ directory. so inside of html folder you will have the website folder

Step 2: Open the Folder in VS Code
Open the website folder in Visual Studio Code (VS Code).

Step 3: Open Terminal in VS Code
Open the integrated terminal in VS Code by going to Terminal > New Terminal in the menu.

Step 4: Install Dependencies
In the terminal, assuming Composer is set up, run the following command:
composer install
This will install all the required dependencies for the project.


Step 5: Secure the 'private' Folder
For security reasons, move the 'private' folder into a more secure location:
Move it to /var/www -> so inside of 'www' you will have two folders now 'html' and 'private' (if problems read step 6)

Step 6: Update the Configuration (Optional)
If you encounter issues with the folder placement, you can leave the website folder in its current location.
In the 'includes/dbconnect.php' file, update the $config variable by setting the path to 'path1' (as needed). This is just for demo purpose so if any problems the connection still works 

Step 7: Set Up the Database
To automatically set up the database, run the following command in the terminal: php includes/dbscript.php
This will set up the database with the necessary tables and configurations.

Step 8: Run the Program
To run the program, start a PHP built-in server by running the following command:
php -S localhost:8000
You can change the port number (e.g., localhost:8001) if port 8000 is already in use.