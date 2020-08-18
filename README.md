<h1>Opportunities for Undergraduates (OFU)</h1>OFU is a website created to provide reliable scholarship information for undergraduates, updates on the current status of scholarships, and if they create an account, allows us to be able to apply for them (at a cost).
<br />
<br />
<i>How to setup locally:</i>
<h4>-Clone the repository on your system</h4>
<h4>-Run 'php --version' to ensure php is installed in your system. If it's not, download and install xampp</h4>
<h4>-Run 'npm install' in terminal</h4>
<h4>-Run 'composer install' in terminal</h4>
<h4>-Run 'cp .env.example .env' in terminal to generate the required .env file</h4>
<h4>-Run 'php artisan key:generate --show' in terminal</h4>
<h4>-Copy the key to your .env file and replace it with whatever is at 'APP_KEY'</h4>
<h4>-Run 'php artisan serve' to start the laravel server</h4>
<h4>-In your browser, type 'localhost:8000'</h4>
<br />
<br />
<i>How to setup the database with MySQL:</i>
<h4>-Open the control panel of your xampp</h4>
<h4>-Start the Apache server and MySQL server</h4>
<h4>-Click on the 'Admin' button of MySQL</h4>
<h4>-Create a new database and name it 'ofu'</h4>
<h4>-Run 'php artisan migrate' in terminal</h4>
<h4>-Run 'php artisan db:seed' in terminal</h4>
<br />
<br />
<i>How to contribute:</i>
<h4>-Run 'git switch -C yourname-test (e.g david-test) if it's your first time</h4>
<h4>-Create a branch in the repository with the same same you used above e.g 'david-test'</h4>
<h4>-Run 'git pull origin master' to ensure your local repository is up-to-date</h4>
<h4>-After making your changes locally, run 'git add .'</h4>
<h4>-Run 'git commit -m "Description of the change you made"</h4>
<h4>-Run 'git push origin your-branch-name (e.g david-test)</h4>
