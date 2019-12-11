# QA app
Laravel - Node.js - MySQL

### Setup
1. Install Node.js and npm.
3. Run **composer install**.
4. Run **npm install**.
5. Run **npm run dev**.
6. Set MySQL database in .env file also start your MySQL server.
7. Run **php artisan migrate**.
8. Run **php artisan serve** to run the application.

### Instructions
-Register then login to the application.<br/>
-In the upper right corner there are links for Questions,Users and dropdown menu to logout.<br/>
-If you click Quesions link you can see the questions if there are any or see a message if there arent any questions.<br/>
-You can click on Ask a question to do the same.<br/>
-If you click on any question you will go to a detail page where you can EDIT or DELETE the question ONLY if you are the one who asked that question.<br/>
-Click on Users to see user list with details about every user.<br/>

You should make atleast two accounts and ask questions to see the authorization in action i.e.
to see that only user who asked the question can edit it or delete it.

This applications is only manually tested.

Also this isn't complete app there is still some work to be done.
