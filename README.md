# Web-Credential-Validation-and-Database
A survey web page was implemented where users can log in with their credentials to a secure web page and take a Game of Thrones survey. The survey determines which Game of Thrones character participants are most similar to.

The script displays a login form that gathers the user's username and password (and validates). After logging in, a PHP session is openned for that specific login. In the session, another form is displayed which includes the survey. The script terminates after the survey is submitted. At the end of the survey, before exiting, the script saves all of the survey answers and the resulting GoT character name in a MySQL database.

Furthermore, if users try to navigate to the URLs for either the survey or the results page(s) without an active session, they will be redirected to the login page.

## What I Learned
* PHP syntax
* HTML forms
* Data structures and data management in PHP
* File IO operations in PHP
* Simple DB connection, querrying, and data management
* MySQL syntax for querries
* How to use MAMP Server

### Valid Credentials
1. admin::1234
2. abdullah::password
3. GoTLover::tyrion4king
