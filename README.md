<h1>Steps to run project run following command</h1>
<ul>
    <li>composer install</li>
    <li>php artisan sail:install</li>
    <li>alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'</li>
    <li>sail build</li>
    <li>sail up</li>
    <li>sail artisan migrate</li>
    <li>sail artisan db:seed</li>
    <li>npm run dev</li>
</ul>
<p>After creating seeder go to http://127.0.0.1. Then you will be redirected to login page. You can get email from database and password is "password" for all users. There you will see logged-in user notes with pagination</p>
