# Secure Password Generator

## Overview

This project is a web based password generator which allows a user to generate secure, random passwords based on customizable criteria. Users may select the length of the password and specify whether to include upper and lowercase letters, numbers, and symbols.

## Project Structure

- **index.html**: The main page for the secure password generator. It contains the HTML structure for the form and result display.
- **oddhome.html**: An alternative page with a different design for generating passwords.
- **oddPg.js**: JavaScript file for the `oddhome.html` page, handling password generation and clipboard functionality.
- **script.js**: JavaScript file for the `index.html` page, handling password generation and clipboard functionality.
- **oddStyle.css**: CSS file for styling `oddhome.html`.
- **style.css**: CSS file for styling `index.html`.
- **save_password.php**: PHP script for saving generated passwords to a MySQL database.

## Features

- **Password Length**: Users can set the length of the generated password (between 8 and 128 characters).
- **Character Types**: Users can choose to include uppercase letters, lowercase letters, numbers, and symbols.
- **Copy to Clipboard**: Users can copy the generated password to the clipboard with a single click.
- **Password Storage**: The generated password, along with its configuration, is sent to a server for storage in a MySQL database.

## Usage

### For `index.html`

1. Open `index.html` in a web browser.
2. Select the desired password length and character types.
3. Click the "Generate Password" button to create a new password.
4. Copy the password to the clipboard by clicking the "Copy to Clipboard" button.

### For `oddhome.html`

1. Open `oddhome.html` in a web browser.
2. Adjust the settings for password length and character types.
3. Click the "Generate Password" button to create a new password.
4. Use the "content_copy" button to copy the password to the clipboard.

## File Descriptions

- **index.html**: Main interface for password generation.
- **oddhome.html**: Alternative interface with different design and functionality.
- **oddPg.js**: Handles password generation and clipboard actions for `oddhome.html`.
- **script.js**: Handles password generation and clipboard actions for `index.html`.
- **oddStyle.css**: Styles for `oddhome.html`.
- **style.css**: Styles for `index.html`.
- **save_password.php**: PHP script that receives POST requests to save generated passwords into a MySQL database.

## Installation

1. Clone the repository or download the project files.
2. Set up a MySQL database and import the required schema.
3. Update the database connection settings in `save_password.php` with your database credentials.
4. Host the files on a web server with PHP support.

## Dependencies

- Web browser (for accessing the HTML pages)
- PHP (for server-side operations)
- MySQL (for storing passwords)
