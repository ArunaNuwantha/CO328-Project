[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]

<!-- PROJECT LOGO -->
<br />
<p align="center">
    <img src="https://github.com/ArunaNuwantha/CO328-Project/blob/6884e5c8c00aca14efaa72eae1c00dc02460d66b/public/assets/images/logo.png" alt="Logo" width="200" height="100">

  <h1 align="center">Boarding Management System</h1>

  <p align="center">
    implementation by Group 15
    <br />
    <a href="https://github.com/ArunaNuwantha/CO328-Project"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="https://github.com/ArunaNuwantha/CO328-Project/issues">Report Bug</a>
    ·
  </p>
</p>

<!-- TABLE OF CONTENTS -->
<details open="open">
  <summary><h2 style="display: inline-block">Table of Contents</h2></summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li><a href="#getting-started">Getting Started</a></li>
    <li><a href="#Implimentation">Implimentation</a></li>
    <li><a href="#further-development">Further Development</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#team-members">Team Members</a></li>
    <li><a href="#acknowledgements">Acknowledgements</a></li>
  </ol>
</details>

<!-- ABOUT THE PROJECT -->

## About The Project

As university students, we were supposed to find a boarding place in our second year since we were not offered a residence hostel during that time. Finding a rental place was a challenging task in the Kandy and Peradeniya area. Some of the challenges that we faced during finding rental places are,

- We have to travel long distances to get the information.
- A limited number of people know about the place.
- Due to the covid-19, we cannot travel freely.
- Have to depend on brokers and senior students a lot.
- Some places do not have the required facilities.
- Some places demand high rental fees.

Even though this is a challenging task we still don’t have a proper system to solve this problem. Therefore as university students, we thought about building a system so that we can overcome the above-mentioned challenges.

### Built With

- [PHP]()
- [LARAVEL]()
- [MySQL]()
- [APACHE]()

<!-- GETTING STARTED -->

## Getting Started

1. Clone the repo
   ```sh
   git clone https://github.com/ArunaNuwantha/CO328-Project
   ```
2. Navigate to folder
   ```sh
        cd CO328-Project
   ```
3. Install the Laravel Composer
   ```sh
        composer install
   ```
4. Generate the key for laravel project
   ```sh
        php artisan key:generate
   ```
5. import the database file to mysql
   ```sh
        BMS.sql
   ```
6. Setup Configurations in .env file

   _This is tested with the php version 7.3 & LARAVEL version 5.5_

<!-- Implimentation -->

## Implimentation

![alt text](https://user-images.githubusercontent.com/72965997/139569930-7939c6c9-245e-49ae-93ec-42baa887153f.png)

![alt text](https://user-images.githubusercontent.com/72965997/139570026-c9c60368-ebef-457d-b5a8-09ad715497c5.png)

<!-- Further Development -->

## Further Development

- You can develop according project to add university official boardings to the system. (You may need to introduce catergory information and some other new attribute to maintain those boardings)
- You can maintain those university boarding through the system. ( Cleanings, Arrangings, Assigning roooms to students, other student details )
- Improve the security of the system. (Only show partial information for the person who looking for boarding, add more secure ways to login register )
- Adding payment method (Through this, Boarding owner can receive the advance through system )
- Develop this project combining all sri lankan universities. ( Any university student in sri lanka will be able to find their approapiate boarding )
- Upadate the system into **Laravel 6.0** and Change the views to **vue js**.

<!-- LICENSE -->

## License

Distributed under the MIT License. See `LICENSE` for more information.

<!-- CONTACT -->

## Team Members

- Chandula - [Chandula J.P.D.M](https://github.com/Chandula-JPDM) **E/16/061**

- Isuru - [Lakshan S.A.I](https://github.com/IsuruLakshan97) **E/16/203**

- Aruna - [Nuwantha B.L.A](https://github.com/ArunaNuwantha) **E/16/261**

Project Link: [https://github.com/ArunaNuwantha/CO328-Project](https://github.com/ArunaNuwantha/CO328-Project)

<!-- ACKNOWLEDGEMENTS -->

## Acknowledgements

- [Dr. Janaka Alawathugoda]()

<!-- MARKDOWN LINKS & IMAGES -->

[contributors-shield]: https://img.shields.io/github/contributors/ArunaNuwantha/CO328-Project.svg?style=for-the-badge
[contributors-url]: https://github.com/ArunaNuwantha/CO328-Project/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/ArunaNuwantha/CO328-Project.svg?style=for-the-badge
[forks-url]: https://github.com/ArunaNuwantha/CO328-Project/network/members
[stars-shield]: https://img.shields.io/github/stars/ArunaNuwantha/CO328-Project.svg?style=for-the-badge
[stars-url]: https://github.com/ArunaNuwantha/CO328-Project/stargazers
[issues-shield]: https://img.shields.io/github/issues/ArunaNuwantha/CO328-Project.svg?style=for-the-badge
[issues-url]: https://github.com/ArunaNuwantha/CO328-Project/issues
[license-shield]: https://img.shields.io/github/license/ArunaNuwantha/CO328-Project.svg?style=for-the-badge
[license-url]: https://github.com/ArunaNuwantha/CO328-Project/blob/master/LICENSE.txt
