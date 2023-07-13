<h1 align="center">
  <br>
  Web Programming Final Project - ColorVerse
  <br>
</h1>
<h4 align="center">Here's where we showcase a little bit about this website.</h4> 

<p align="center"> <img src="https://github.com/alexisabdi05/ProjectWebProg/assets/67302201/ff115bf1-ce33-421d-97de-6ff2be32c9d4.gif" alt="preview"> </img> </p>

## Login & Registration
You will be directed right to this "Sign-in" page after accessing this page
<p align="center"> <img src="https://github.com/Nataliakrndng/profile-sl/assets/67302201/bbd677e6-5834-416f-8ea1-baf784630ba5.png" alt="signin"> </img> </p>
This is the "Sign-up" page if you don't have an account
<br>
<br>
<p align="center"> <img src="https://github.com/Nataliakrndng/profile-sl/assets/67302201/8324728b-b4aa-4c0d-b29b-d48bf9663973.png" alt="signup"> </img> </p>

## Home
After sign-in in you will be directed to "Home" page
<p align="center"> <img src="https://github.com/Nataliakrndng/profile-sl/assets/67302201/c8953176-0c66-40b6-b7ef-f68ef3b2b211.gif" alt="home"> </img> </p>
At home page you will see.. blablablabalbal (content in home)

## Course
Next is the "Course" Page
<p align="center"> <img src="https://github.com/Nataliakrndng/profile-sl/assets/67302201/8ccbb9db-7268-4b5f-8358-7c4115cf70e4.gif" alt="course"> </img> </p>
In "Course" page you can see the courses category and you can choose which course that suits you and you can start learning!





<br>
<br>

## Installation Guide for Colorverse
### Prerequisites
Before you begin, ensure that you have the following prerequisites installed on your machine:

- PHP (minimum version 7.4) <br>
- Composer (dependency management for PHP) <br>
- Node.js (minimum version 14) <br>
- NPM (Node Package Manager) <br>

### Step 1: Clone The Respository
1. Open your terminal or command prompt.
2. Navigate to the directory where you want to clone the project.
3. Run the following command to clone the repository: <br>
```<language>
   git clone https://github.com/your-username/colorverse.git
   ```

### Step 2: Install PHP Dependencies
1. Navigate to the project directory using the terminal or command prompt.
2. Run the following command to install PHP dependencies: <br>
```<language>
   composer install
   ```
### Step 3: Configure the Environment
1. Duplicate the .env.example file located in the project root directory and rename it to .env.
2. Open the .env file and set the necessary environment variables like database connection details, application name, etc.

### Step 4: Generate Application Key
In the terminal or command prompt, run the following command to generate an application key:
```<language>
   php artisan key:generate
   ```
### Step 5: Run Migrations
To create the required database tables, run the following command:
```<language>
   php artisan migrate
   ```
### Step 6: Install JavaScript Dependencies
Run the following command to install the JavaScript dependencies using NPM:
```<language>
   npm install
   ```
### Step 7: Build Assets
Once the dependencies are installed, run the following command to build the assets:
```<language>
   npm run dev
   ```
If you're working in a production environment, you can use npm run production instead to minify the assets.

### Step 8: Serve the Application
Finally, run the following command to start the development server:
```<language>
   php artisan serve
   ```
This command will start the Laravel development server, and you can access your application by visiting http://localhost:8000 in your web browser.
