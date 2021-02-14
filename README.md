This is a basic Laravel blog application provided with the basic functionalities of a blog.
You have the flexibility of registering and posting as an authenticated user.

To set up this beauty on your device, you need to follow these steps.


-- Clone it to your device and cd into your project folder.

-- Run Composer install 

-- Run npm install

-- Create a copy of your .env file  e.g cp .env.example .env

-- Generate your app encryption key by running the following command
    php artisan key:generate
    
-- Create an empty database for your application

-- In the .env file, add database information to allow Laravel to connect to the database

-- Migrate the database using this command
    php artisan migrate
    
-- Optional: Seed the database using - php artisan db:seed

Then lastly, run your app either by configuring a virtual host or by simply serving it with 
- php artisan serve which generates a server for you @ localhost:8000

Enjoy : )

