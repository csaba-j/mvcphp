# MVC PHP application - Advertisements

An MVC-based application written in native PHP, listing existing users and their advertisements from the local database.
 
## Contents
- [Technologies](#technologies)
- [Setup](#setup)
- [User and Advertisement creation](#user-and-advertisement-creation)
## Technologies
- PHP 7.3.0
- MySQL
- HTML5
- CSS
- XAMPP (For local hosting)

## Setup
### Using XAMPP
#### Files
The project should be extracted inside XAMPP's 'htdocs' folder, the 'mvcphp' folder being the root inside htdocs.
<br>
XAMPP's local server should be run; PHP's built-in CLI server <b>doesn't support</b> .htaccess files.
#### Database
I created an [SQL dump](https://github.com/csaba-j/mvcphp/files/10825757/mvcphp_dump.zip), run this query on your local MySQL server to import all tables and the test values I put into it.
<br>
The database's login values can be accessed from the file <i>database.php</i> inside <i>app/models</i>.
<br>
Edit these to match your own local database's credentials.
<br>
<i>This project is for demonstration purposes only, so no sensitive information is leaked through sharing there informations now.</i>

After this, the application runs from <i><b>localhost/mvcphp/public.</b></i>

### User and Advertisement creation
I implemented for testing and practicing purposes the creation of user and advertisement objects. Both are URL-based with no UI.
#### Create User
You can create a new User by the URL localhost/public/users/store/[name].
Fill in [name] with the desired name to be stored, without the brackets.
The page won't redirect, go back manually, reload, and it will be there.
#### Create Advertisement
You can create a new Advertisement by the URL localhost/public/advertisements/store/[userid]/[title].
The <i>userid</i> must be a valid user's ID. Fill it in alongside the title, again, without the brackets.
The page won't redirect, go back manually, reload, and it will be there.


