# COMP1044_CW_G21
Group 21 **version 1.0.0**
<h1 align="center">Hi π, Welcome to our Library Management System.</h1>

---

<h3 align="center">Quick Tour to our Project</h3>

This is the system designed for our librarians, **only librarians** can have access to modify or update the information.

- π­ First, make sure the **XAMPP Control Panel** is opened.

- π€ Click **"Apache"** and **"MySQL"** start button.

- π¨β Check all the data from the dataset are inserted to phpMyAdmin's library.

- π Type the link in Chrome(recommended web browser) : π¬ localhost/(the folder you store our project)/userlogin1a.php

- π― Please fill in the correct Username and Password. / Or You can choose to **register own account**.

- π± There should be **8** function blocks on the Home Page.

- π€ Each function blocks would have a **home** button and a **logout** button at the top right.

- π― You can **return** to homepage or logout anytime you want.

- π¬ You can explore our project with the function report and the demo video.

- π¨βπ» All files related to our project are available at the GitHub Repository.

---

## Login Page Functions

- **Login Username and Password**

π― If the librarian already has an account, make sure fill in the correct **Username** and **Password**.

β‘ If the librarian enters **Wrong** Username or Password, **"Username or Password is Invalid"** will show.

β‘ If the librarian doesn't input both Username & Password, straightly clicking login button, **"Please Input Username and Password"** will show.

π€ If the librarian enters **correct** Username and Password, login page will jump to the **Homepage**.

##

- **New User Registration**

π± If new librarian doesn't have account to login, he can register a new account by clicking **Register now** button on the login page. 

β‘ Make sure all the columns must be filled, if there is any missing input in any column, when the register clicks **Sign Up**οΌan alert message **"(missing part) must be filled out"** will pop up, warning the register that the registration form is not submitted successfully.

π€ After the librarian fill in all the columns, click **Sign up**, then they can get their own library system account !

---

## Homepage Functions

- **Add book**

π¨β Fill in all the columns.

β‘ All the columns must be filled, if not, an alert message **"(missing column name) must be filled out"** will pop out to prevent the form being submitted.

π€ **Reset** button can help you clean all the columns you just filled in, so you don't need to delete every column one by one, making it more convinient for users.

π― Click **Submit** then the new book will be added to the database immediately.

##

- **Add member**

π¨β Fill in all the columns.

β‘ All the columns must be filled, if not, an alert message **"(missing column name) must be filled out"** will pop out to prevent the form being submitted.

π€ **Reset** button same as the one in **Add book**.

π― Click **Submit** then the new member will be added to the database immediately.

##

- **Search book**

π You can search any book either by **Book ID** or **Author** or **Book title**.

π­ Not filling anything in search box will show warning message: **"Please fill in this field"**

π Filling in books that are not in database will show **"No Record Found"**.

##

- **Search member**

π You can search any member either by **Member ID** or **First name** or **Last name**.

π­ Not filling anything in search box will show warning message: **"Please fill in this field"**

π Filling in member information that is not in database will show **"No Record Found"**.

##

- **Delete book**

π­ Search the Book you want to delete by **Book ID** or **Author** or **Book title**.

π¬ **Delete button** will show at the right of the book, click it then the book will be deleted from the database.

π­ Not filling anything in search box will show warning message: **"Please fill in this field"**

π Filling in books that are not in database will show **"No Record Found"**.

##

- **Delete member**

π­ Search the member you want to delete by **Member ID** or **First name** or **Last name**.

π¬ **Delete button** will show at the right of the member, click it then the member will be deleted from the database.

π­ Not filling anything in search box will show warning message: **"Please fill in this field"**

π Filling in member information that is not in database will show **"No Record Found"**.

##

- **Update borrow details record**

π¨β Search "Borrow details" by **Borrow ID**.

π¬ **Borrow Status** will show, the librarian can **modify/update** the status.

π€ Click **Update data**, the new status for this borrow ID will be uploaded to the library's "borrowdetails" database.

π­ Not filling anything in search box will show warning message: **"Please input a borrow ID to search"**.

##

- **Update member details**

π¨β Search "Member details" by **Member ID**.

π¬ **Member Information** will show, the librarian can **modify/update** the information.

π€ Click **Update data**, the new information for this member ID will be uploaded to the library's member database.

π­ Not filling anything in search box will show warning message: **"Please input a member ID to search"**

##

---

## Contributors

- Chai Qin Hui
- Huang, Danyi
- Firdaus Bin Fakhir Khan
- Lee Shing Zhe

---

## License & copyright
Β© Chai Qin Hui, Huang Danyi, Firdaus Bin Fakhir Khan, Lee Shing Zhe, University of Nottingham Malaysia Library Management System Design

---

<h3 align="left"> Support </h3>

- π« How to reach me **hcydh1@nottingham.edu.my**
<p align="left">
</p>

---

<h3 align="left">Languages and Tools:</h3>
<p align="left"> <a href="https://www.w3schools.com/css/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original-wordmark.svg" alt="css3" width="40" height="40"/> </a> <a href="https://www.w3.org/html/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original-wordmark.svg" alt="html5" width="40" height="40"/> </a> <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg" alt="javascript" width="40" height="40"/> </a> <a href="https://www.mysql.com/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original-wordmark.svg" alt="mysql" width="40" height="40"/> </a> <a href="https://www.php.net" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" alt="php" width="40" height="40"/> </a> </p>
