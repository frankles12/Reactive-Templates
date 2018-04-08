<h1><b>Reactive-Templates</b></h1>


<h3>Welcome!</h3>
Reactive Templates is a single page application templating system built using the decoupled Wordpress Rest API as a backend CMS and React as the framework for designing the frontend. Reactive Templates allows developers complete freedom when designing the front-end while providing familiarity of Wordpress to users on the back-end. Utilizing Advanced Custom Fields, developers are able to specify what components (created in React) are editable by users in Wordpress. React components are completley reusable with one another allowing extreme flexiblility when creating SPA templates. Have fun with it!



<h3>Setup/Installation</h3>

Using MAMP or WAMP, link your localhost to the folder the_REST_test.

Go to phpMyadmin and create a database called `the_REST_test` and upload the database file restTest.sql.

Inside of phpMyAdmin create a user with the following credientials:

User name: Frank
Host name: localhost
Password: sleepisrestful

After entering those values next to the Global Privileges click the check all button and press Go.

Once that is all set up go to localhost:8888/wp-admin to log into the wordpress instance. Login credentials for the wordpress are as follows:

Username: frank
Password: theheadlesswordpress

Once logged into Wordpress navigate in terminal to the directory wp-api-react. From within that directory run npm start. The project should then be up and running on localhost:8080.

Inside of Wordpress navigate to pages and click on one. From within the pages you can edit/change content. Upon pressing update simply refresh localhost:8080 to see the changes take place!
