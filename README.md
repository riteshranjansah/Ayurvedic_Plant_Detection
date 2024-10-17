# Ayurvedic Plant Detection

This project is designed to detect and provide information about nearby plants and their uses in Ayurveda. It leverages image recognition and machine learning for plant identification and gives users details about the identified plant, including its medicinal properties.

## Features

- **User Authentication**: Secure login functionality for users.
- **Plant Detection**: Users can upload images of plants and get information about the plant.
- **Ayurvedic Information**: Displays medicinal uses of identified plants according to Ayurveda.
- **Team Section**: Information about the developers involved in the project.
- **Contact Us**: Form to contact for queries or development inquiries.

## Technologies Used

- **Frontend**: HTML, CSS, JavaScript, Bootstrap
- **Backend**: PHP
- **Database**: MySQL
- **Authentication**: PHP Sessions and Password Hashing
- **Other Libraries**: 
  - AOS (Animate on Scroll)
  - Bootstrap Icons
  - GLightbox for image lightboxes

## Project Setup

### 1. Clone the Repository

```bash
git clone https://github.com/riteshranjansah/ayurvedic-plant-detection.git
```

### 2. Setup MySQL Database

#### Database Schema

1. **Create a new database** in MySQL, for example:

```sql
CREATE DATABASE ayurveda;
```

2. **Create Users Table**:

```sql
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL
);
```

3. **Sample Insert Statement** for testing:

```sql
INSERT INTO users (username, password) VALUES ('testuser', '$2y$10$N9qo8uLOickgx2Z2QfBmH1i7k/xR7z/i2J6p15I8cqR5szgxdA7kW');
```

This password (`testuser`) is hashed using PHP's `password_hash()` method. You can change it according to your needs.

#### Config File

Update your `config.php` file with the appropriate database credentials:

```php
define('DB_SERVER', 'localhost');  // Database server (e.g., localhost)
define('DB_USERNAME', 'root');     // Your database username
define('DB_PASSWORD', '');         // Your database password
define('DB_NAME', 'ayurveda');     // Your database name
```

### 3. Start the PHP Server

You can run the project locally using PHP’s built-in server:

```bash
php -S localhost:8000
```

### 4. Access the Project

Navigate to `http://localhost:8000/index.php` to access the project.

## Features

### 1. **User Authentication**

- The user must log in to access the plant detection features.
- The login page is located at `login.php`.
- After successful login, users are redirected to the homepage, where they can access the plant detection functionality.

### 2. **Plant Detection**

- On the homepage (`index.php`), users will find a button that allows them to start the plant detection process.
- Clicking on the button will redirect them to the `capture.php` page, where they can upload an image of a plant.
- The uploaded image is analyzed for plant identification.

### 3. **Ayurvedic Information**

- Once the plant is detected, information about the plant is displayed on the same page along with its medicinal properties, usage in Ayurveda, and toxicity information (if available).

### 4. **Contact Us**

- Users can contact the development team by navigating to the **Contact Section** on `index.php`, where they can submit their queries.

### 5. **Team Section**

- The project team members and their respective links (Twitter, LinkedIn, etc.) are listed on the homepage for acknowledgments.

## Directory Structure

```
ayurvedic-plant-detection/
│
├── assets/
│   ├── css/                   
│   ├── fonts/                 
│   └── js/
│
├── forms/
│   ├── contact.php            # Contact page            
│   └── nofi.php               # notification page      
│
├── capture.php                 # Page for uploading plant images
├── config.php                  # Database and app configuration
├── index.php                   # Homepage, plant detection, and main navigation
├── login.php                   # Login page for user authentication
├── logout.php                  # Logout functionality
└── signup.php                  # Signing up page
```

## Setup Instructions

1. **Database Setup**: Ensure that your database is correctly set up and configured as explained above.
2. **Configuration**: Adjust the `config.php` file with your local MySQL credentials.
3. **Run the Server**: Use the command `php -S localhost:8000` to start the local development server.
4. **Access the Website**: Open `http://localhost:8000/index.php` in your browser.

## Usage

1. **Login**: Use the `login.php` page to authenticate yourself. 
   - Username: `testuser`
   - Password: `password123`
   
2. **Plant Identification**: Once logged in, click the "Scan Plant" button to upload an image. The system will process the image and return information on the detected plant.

3. **Contact Us**: You can reach out to the development team through the **Contact Us** section, which will send an email with your query.

## Contributing

If you wish to contribute to this project, feel free to fork the repository and submit a pull request.

### Steps for Contribution:
1. Fork the project.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make your changes and commit them (`git commit -am 'Add new feature'`).
4. Push the branch to your fork (`git push origin feature-branch`).
5. Create a pull request on GitHub.

## Acknowledgements

- **Ritesh & Team** - For contributing to the project.
- **Bootstrap** - For the frontend design and responsive layout.
- **Google Maps** - For embedding the contact location on the map.
