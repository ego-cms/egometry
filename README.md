[![eGo-CMS](https://rawgithub.com/ego-cms/Resources/master/Badges_by_EGO/by_EGO.svg)](http://ego-cms.com/?utm_source=github)
[![License](https://rawgit.com/ego-cms/Resources/master/License/license.svg)]()

Simple telemetry web app
========================
To run the app, go the `public` directory and run `php -S localhost:3000`.

The app will be available via `http://localhost:3000`.

Available endpoints
-------------------

* **/save/{app_id}/{action_name}** - saves the action for app id
* index page allows you to see list of registered apps

Apps and their actions are registered automatically at the moment.

Install and Run
---------------

- go to `docker` folder
- run `docker-compose up -d --build`
- go to `http://localhost:3000`


Plan
----
* ~~migrate to Docker so anyone can easily run it~~
* registration/login for users
* each user should have ability to register an app
* use generated token for app identification
* more charts with time view

## License

    The MIT License (MIT)

    Copyright (c) Copyright © 2016 EGO creative media solutions

    Permission is hereby granted, free of charge, to any person obtaining a copy
    of this software and associated documentation files (the "Software"), to deal
    in the Software without restriction, including without limitation the rights
    to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
    copies of the Software, and to permit persons to whom the Software is
    furnished to do so, subject to the following conditions:

    The above copyright notice and this permission notice shall be included in
    all copies or substantial portions of the Software.

    THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
    IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
    FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
    AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
    LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
    OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
    THE SOFTWARE.
