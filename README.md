# Random Password Generator

A simple and secure random password generator built with PHP, HTML, CSS, and  JavaScript.

## Features

- Generates random passwords of specified length
- Supports uppercase, lowercase, digits, and special characters
- Simple and responsive web interface
- The generated password, along with its configuration, is sent to a server for storage in a MySQL database.


## Usage
Open the website
- Click the "Generate Password" button.
- The generated password will be displayed in the empty space

## Project Structure 
- oddHome.html: The main HTML file for the password generator web interface.
- oddStyle.css: CSS file for web design.
- save_password.php: PHP script to handle passwords being stored in phpmyadmin database.
- oddPg.js: The main JavaScript file for handling user interactions on the main page.
- oaboutus.html - bio page
- oinfo.html - site description page
- js/generate_password.js: JavaScript file responsible for password generation.
- js/fetch_password.js: JavaScript file for handling API requests and responses.


## Installation and Running

### Prerequisites

- **Web Server**: A web server with PHP support (e.g., Apache, Nginx).
- **PHP**: PHP version 7.0 or higher.
- **MySQL**: MySQL database server.

### Setup

1. **Clone the Repository**
   ```bash
   git clone https://github.com/p0maTypez/Software-Engineering-/tree/main
   cd Software-Engineering-
   
2. Configure Database connection

- Open save_password.php.
- Update the database connection settings with your credentials
   
3. Deploy files

- Place the project files (`index.html, oddhome.html, oddPg.js, script.js, oddStyle.css, style.css, save_password.php`) into the root directory of your web server.
- Open a web browser and navigate to http://localhost/Software-Engineering-/index.html

## Running the Application

1. Open index.html or oddhome.html

2. Use a web browser to open either index.html or oddhome.html to start using the password generator.
Generate Password

3. Select the desired settings and click the "Generate Password" button to create a new password.
Copy Password

4. copy the generated password.

## Example
Here is an example of how to generate a password using the application:

1. Open index.html in your web browser.
2. Enter a length (e.g., 12) in the input field.
3. Check if you want to include uppercase letters, lowercase letters, numbers, and special characters.
4. Click the "Generate Password" button.
5. The generated password (e.g., A1b2C3d4E5f6) will be displayed on the screen.

## Contributors

1. Serusaru (Amara)
2. sophianoh (Sophia)
3. p0maTypez (Tony)
4. eli2k16 (Elijah)
5. Philanthropenos (Bolaji)
