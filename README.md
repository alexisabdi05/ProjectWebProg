<h1 align="center">
  <br>
  Web Programming Final Project - ColorVerse
  <br>
</h1>

<h4 align="center">"Here's where we showcase a little bit about this website."</h4>

<p align="center"> <img src=alt="preview"> </img> </p>

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
