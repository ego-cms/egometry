Simple telemetry web app
========================
To run the app, go the `public` directory and run `php -S localhost:3000`.

The app will be available via `http://localhost:3000`.

Available endpoints
-------------------

* **/save/{app_id}/{action_name}** - saves the action for app id
* index page allows you to see list of registered apps

Apps and their actions are registered automatically at the moment.
 
Project requirements
--------------------
* MongoDB
* MongoClient php extension

Plan
----
* registration/login for users
* each user should have ability to register an app
* use generated token for app identification
* more charts with time view