<h1 align="center">
  <br>
  Web Programming Final Project
  <br>
</h1>

<p align="center"> <img src="https://github.com/alexisabdi05/ProjectWebProg/assets/67302201/8b067c5a-8dbf-4ccc-b2b6-bb6d523e61ff.png" alt="preview"> </img> </p>

<h4 align="center">Here's where we showcase a little bit about this website.</h4> 

## About ColorVerse
Colorverse is a website designed specifically to help you learn about design and create appealing color palettes. It focuses on providing valuable resources for designers. At Colorverse, you can find various tutorials covering design topics, including color theory, design principles, graphic design tips and tricks, and guides on popular design tools like Adobe Photoshop and Illustrator.

One of the main features of the website is the color palette generator tool. You can use this tool to create harmonious and eye-catching color combinations for your design projects or creative inspiration. All content on Colorverse is presented in an easily understandable format, with illustrations, examples, and clear explanations. We hope to assist you in learning the fundamentals of design and inspiring your creativity.

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

## Categories
Next is the "Categories" page, where you can see the courses category and you can choose which design categories you wanna learn.
<p align="center"> <img src="https://github.com/alexisabdi05/ProjectWebProg/assets/67302201/2f5e104f-5387-40ff-9bb8-502a761fd7ef.png" alt="course"> </img> </p>

## Course
Next is the "Course" page, where you can see the courses category and you can choose which course that suits you and you can start learning!
<p align="center"> <img src="https://github.com/Nataliakrndng/profile-sl/assets/67302201/8ccbb9db-7268-4b5f-8358-7c4115cf70e4.gif" alt="course"> </img> </p>

We also have the dynamic search bar to help you find your course easier ;)
<p align="center"> <img src="https://github.com/alexisabdi05/ProjectWebProg/assets/67302201/83ba3dac-a6a6-406b-8da5-ce6e6ac5983a.gif" alt="course"> </img> </p>

## Color Pallete
Moving on to our main feature which is "Color Pallete" Page
<p align="center"> <img src="https://github.com/alexisabdi05/ProjectWebProg/assets/67302201/3bb0d1a1-4a06-4e32-8958-013ce50029cd.gif" alt="color"> </img> </p>
in this page, you can generate a color pallete from any picture that you choose :D

## Profile
And the last one is "Profile" page. In this page you can see all the course you've enrolled and completed
<p align="center"> <img src="https://github.com/alexisabdi05/ProjectWebProg/assets/67302201/6a624252-7937-47be-83bf-106d913757d9.gif" alt="course"> </img> </p>
There is also a sign out button to log you out and direct you back to sign-in page.

## Achievement
You can also click "See More" on the "Profile" page or "Achievement" menu on the navbar and it will direct you to the achievement page where you can see all the progress you make and all that you've completed.
<p align="center"> <img src="https://github.com/alexisabdi05/ProjectWebProg/assets/67302201/31f6ebbc-9e50-437a-9586-c2ebb0cc8ad2.gif" alt="course"> </img> </p>
<br>

# Installation Guide for Colorverse
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
