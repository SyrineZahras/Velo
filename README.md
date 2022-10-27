# :bicyclist: Velo Laravel App
<div id="top" align="center">
  <img src="https://user-images.githubusercontent.com/78981558/195495941-1d475be4-4685-40ff-8f45-73826c94a391.png" width="160" height="160"/>
  <div id="badges">

   <a href="https://github.com/SyrineZahras/Velo/graphs/contributors">
    <img src="https://img.shields.io/github/contributors/SyrineZahras/Velo.svg?style=for-the-badge"/>
  </a>

  <a href="https://github.com/SyrineZahras/Velo/issues">
    <img src="https://img.shields.io/github/issues/SyrineZahras/Velo.svg?style=for-the-badge"/>
  </a>

  <a href="https://github.com/SyrineZahras/Velo/stargazers">
    <img src="https://img.shields.io/github/stars/SyrineZahras/Velo.svg?style=for-the-badge"/>
  </a>
   <a href="https://github.com/SyrineZahras/Velo/network/members">
      <img src="https://img.shields.io/github/forks/SyrineZahras/Velo.svg?style=for-the-badge"/>
    </a>
  </div>
<h3 align="center">Velo Laravel App :bicyclist:</h3>
  
  <p align="center">
This is the official Velo App documentation <br/>

  </p>
 </div>  

<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#-about-the-project">About The Project</a>
      <ul>
        <li><a href="#-project-main-features">Project Main Features</a></li>
        <li><a href="#-built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#-getting-started">Getting Started</a>
      <ul>
        <li><a href="#-prerequisites">Prerequisites</a></li>
        <li><a href="#-installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#-usage">Usage</a></li>
    <li><a href="#-demo">Demo</a></li>
    <li><a href="#-roadmap">Roadmap</a></li>
    <li><a href="#-contributing">Contributing</a></li>
    <li><a href="#-contact">Contact</a></li>
    <li><a href="#-acknowledgments">Acknowledgments</a></li>

  </ol>
</details>

<!-- ABOUT THE PROJECT -->
## 📃 About The Project
<b>"Velo.tn"</b>is an application that brings together people who are passionate about bicycles. Its aim will be to insist on the need to adopt more massively cycling as an alternative means of transport to the car.<br>

 ### 📜 Project Main features
1. **:bike: Bikes Management** 
2. **:euro: Bike Rentals Management**
3. **:reminder_ribbon: Bike Associations Management** 
4. **:bicyclist: Bike Rides Management**
5. **:flags: Bike Events Management** 
6. **🙋 Users Management** 
<p align="right">(<a href="#top">back to top</a>)</p>


### 🚀 Built With

**Velo.tn** is built using Laravel Framework. You may find below the list of the frameworks/libraries that we used to build our project :
<br/>


  <div align="center">

	
 <a href="https://laravel.com">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" title="laravel" alt="laravel" width="150" height="150"/>
  </a>
	
  <a href="https://jetstream.laravel.com">
    <img src="https://github.com/laravel/jetstream/blob/2.x/art/logo.svg" title="jetstream" alt="jetstream" width="200" height="150"/>
 </a>
	
   <a href="https://www.mysql.com/fr/">
    <img src="https://github.com/devicons/devicon/blob/master/icons/mysql/mysql-original-wordmark.svg" title="MySQL" alt="MySQL" width="200" height="150"/>
    </a>
  </div>
  
<p align="right">(<a href="#top">back to top</a>)</p>



<!-- GETTING STARTED -->
## ✨ Getting Started
To get a local copy up and running follow these simple example steps.

### 🚧 Prerequisites

You may find below the list of things you need to use this project :
* Make sure MySQL is running on your system.
* You will need to install the "yarn" or "npm" command line.

### 🛠 Installation

_In order to install the app you need to follow the instructions below :_

1. Clone the repo
   ```sh
   git clone https://github.com/SyrineZahras/Velo
   ```
   
2. Install project dependencies
   ```sh
   composer install
   ```
   
3. Install NPM packages dependencies 
   ```sh
   npm install && npm run dev
   ```
4. Rename **.env.example** file to **.env** on the root folder. 
5. Open your **.env** file and change the database name **DB_DATABASE** to whatever you have, username **DB_USERNAME** and password **DB_PASSWORD** field correspond to your configuration. Also don't forget to set **MAIL_USERNAME** and **MAIL_PASSWORD** values .
 
   
7. Generate key to set APP_KEY value in .env 
   ```sh
   php artisan key:generate
   ```
   
8. Migrate the database
   ```sh
   php composer migrate
   ```
9. Link the storage file public/storage with storage
   ```sh
   php artisan storage:link
   ```
10. Run the server on 
   ```sh
   php artisan serve
   ```
11. Open localhost:8000 in the browser and that's it you can enjoy the project 🎉!

 

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- USAGE EXAMPLES -->
## ⚡ Usage

| <img src="https://user-images.githubusercontent.com/78981558/197310444-1b40236d-133c-43ee-8816-79d5446f5e7b.png" width="900" height="300"/><br> **Login Page**| <img src="https://user-images.githubusercontent.com/78981558/197310451-d6272ef4-6c80-4dcb-80b1-212f608eb89f.png" width="900" height="300"/>  <br>**Register Page**| 
| ------------- | ------------- | 
| <img src="https://user-images.githubusercontent.com/78981558/197310603-ad1652dc-8424-4762-9957-cd6bf6b3261a.png" width="900" height="300"/><br> **Forget Password Page**| <img src="https://user-images.githubusercontent.com/78981558/197310609-5aab1819-bd01-4af6-ac0e-0d64e5339bee.png" width="900" height="300"/>  <br>**Home Page**| 
| <img src="https://user-images.githubusercontent.com/78981558/197310419-c5d6f454-ca2a-48a9-a19a-d6e1ffb6c35c.png" width="900" height="300"/><br> **Dashboard**| <img src="https://user-images.githubusercontent.com/78981558/197310481-ab1a35db-f23a-4ba6-bd5a-73f7e7a30888.png" width="900" height="300"/>  <br>**User Profile Page**| 
| <img src="https://user-images.githubusercontent.com/78981558/197310463-8ec54d51-e8c7-479d-bf0e-c5671ee82b6a.png" width="900" height="300"/><br> **Rides Management**| <img src="https://user-images.githubusercontent.com/78981558/197310466-6c44e8f7-febc-4521-b14d-0779328d667d.png" width="900" height="300"/>  <br>**Rides Tracking**| 
| <img src="https://user-images.githubusercontent.com/78981558/197310470-6b4b4f36-19a4-437d-8815-6b23176d424a.png" width="900" height="300"/><br> **Rides Tracking - 1**| <img src="https://user-images.githubusercontent.com/78981558/198311850-e98ce7a7-0ea7-4f23-8198-01076232220c.png" width="900" height="300"/>  <br>**Events Page**| 
<img src="https://user-images.githubusercontent.com/78981558/198311389-81e3e2d6-29cf-43b6-a1cb-0fcd8cb0792b.png" width="900" height="300"/><br> **Associations Management**| <img src="https://user-images.githubusercontent.com/78981558/198311346-25ce0027-3491-40d6-8940-40c17c263c44.png" width="900" height="300"/>  <br>**Create an Association**| <img src="https://user-images.githubusercontent.com/78981558/198311459-99d2c146-93ad-442c-b8ad-dc4b9fd3f984.png" width="900" height="300"/><br> **Associations Management**| <img src="https://user-images.githubusercontent.com/78981558/198311676-50816f55-9f7f-4f6b-9f80-8555c3d3b8e2.png" width="900" height="300"/>  <br>**Create an Association**| 


| <img src="https://user-images.githubusercontent.com/78981558/198387438-37b0b0c6-93c2-48f1-8e1f-00964c3792fc.png" width="900" height="300"/><br> **Tracking Rides**| <img src="https://user-images.githubusercontent.com/78981558/198387452-d9d85f35-8934-4eca-8b28-0525eec9891f.png" width="900" height="300"/>  <br>**Ride Plan**| 
| ------------- | ------------- | 
 

## 🌎 Demo
  
  https://user-images.githubusercontent.com/78981558/198382453-10693677-dd76-444c-a49c-b0f051741a8e.mp4


<p align="right">(<a href="#top">back to top</a>)</p>

<!-- ROADMAP -->
## 🚩 Roadmap

See the [open issues](https://github.com/ahlem-phantom/AI-HealthCare-Assistant/issues) for a list of proposed features (and known issues).

 - [x] Phase 1 : Template Integration using Blade
	 - Frontoffice template
	 - Backoffice template

- [x] Phase 2 : Authentication Integration using JetStream
	- User Authentication
	- User Profile Management
	- Password Update
	- Password Confirmation
	- Account mail verification

- [x] Phase 3 : CRUD Integration
  - Bikes Management 
  - Bike Rentals Management
  - Bike Associations Management
  - Bike Rides Management
  - Bike Events Management


  
<p align="right">(<a href="#top">back to top</a>)</p>



<!-- CONTRIBUTING -->
## 😎 Contributing

If you have a suggestion that would make this project better, please fork the repo and create a pull request. Any contributions you make are **greatly appreciated**.
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b Yourbranch`)
3. Commit your Changes (`git commit -m 'Add some features to project'`)
4. Push to the Branch (`git push origin Yourbranch`)
5. Open a Pull Request

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- CONTACT -->
## 💌 Contact

<b>Project Members :</b> 
| <img src="https://user-images.githubusercontent.com/78981558/157719496-9aec4730-512f-4188-87ca-8dbe6271ebfc.jpg" width="150" height="150"/>  <br> **Ahlem Laajili**| <img src="https://user-images.githubusercontent.com/78981558/157719539-f2829a38-c204-40fc-881d-21b9f407aa84.jpg" width="150" height="150"/>  <br>**Skander Turki**| <img src="https://user-images.githubusercontent.com/78981558/157719519-36d5e110-659c-4c29-80fc-64e78d53e669.jpg" width="150" height="150"/> <br>**Syrine Zahras**| <img src="https://user-images.githubusercontent.com/78981558/157719578-6479fcf3-e4f1-4db0-83d4-158b640552c1.jpg" width="150" height="150"/> <br>**Hichem Ben Zammal**| <img src="https://user-images.githubusercontent.com/78981558/157719597-23028a28-1095-4472-af25-ec631c6c1307.jpg" width="150" height="150"/> <br>**Nesrine Ben Mahmoud**|
| ------------- | ------------- | ------------- | ------------- | ------------- |
|<div align="center"><a href="mailto:ahlem.laajili@esprit.tn"><img src="https://img.shields.io/badge/Gmail-D14836?style=for-the-badge&logo=gmail&logoColor=white" alt="Gmail Badge"/></a><a href="https://github.com/ahlem-phantom"><img title="Follow on GitHub" src="https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white"/></a></div> |<div align="center"><a href="mailto:skander.turki@esprit.tn"><img src="https://img.shields.io/badge/Gmail-D14836?style=for-the-badge&logo=gmail&logoColor=white" alt="Gmail Badge"/></a><a href="https://github.com/skander-turki"><img title="Follow on GitHub" src="https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white"/></a></div> |<div align="center"><a href="mailto:syrine.zahras@esprit.tn"><img src="https://img.shields.io/badge/Gmail-D14836?style=for-the-badge&logo=gmail&logoColor=white" alt="Gmail Badge"/></a><a href="https://github.com/SyrineZahras"><img title="Follow on GitHub" src="https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white"/></a></div> | <div align="center"><a href="mailto:hichem.bemzammal@esprit.tn"><img src="https://img.shields.io/badge/Gmail-D14836?style=for-the-badge&logo=gmail&logoColor=white" alt="Gmail Badge"/></a><a href="https://github.com/hichembenzammel"><img title="Follow on GitHub" src="https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white"/></a></div>  | <div align="center"><a href="mailto:nesrine.benmahmoud@esprit.tn"><img src="https://img.shields.io/badge/Gmail-D14836?style=for-the-badge&logo=gmail&logoColor=white" alt="Gmail Badge"/></a><a href="https://github.com/nesrine1999"><img title="Follow on GitHub" src="https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white"/></a></div>  |

<p align="right">(<a href="#top">back to top</a>)</p>


<!-- ACKNOWLEDGMENTS -->
## 🙌 Acknowledgments

* [Choose an Open Source License](https://choosealicense.com)
* [GitHub Emoji Cheat Sheet](https://www.webpagefx.com/tools/emoji-cheat-sheet)
* [Img Shields](https://shields.io)
* [GitHub Pages](https://pages.github.com)
* [Font Awesome](https://fontawesome.com)

<p align="right">(<a href="#top">back to top</a>)</p>

