# Uber
Ride anywhere

# Installation
```
git clone https://github.com/probasranjan/Uber.git
cd Uber
bower install
```
## MySQL Database Setup
Please consider uber.sql as a dummy data and feel to use import the dump to 'uber' database.
Alternately You can create tables manually.
```
CREATE DATABASE uber;
```

```
CREATE TABLE `drivers` (
  `id` int(11) NOT NULL,
  `name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `fare` int(11) NOT NULL,
  `total_driven` int(11) NOT NULL,
  `car_type` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `car_number` int(11) NOT NULL,
  `passenger_size` int(11) NOT NULL,
  `fined_count` int(11) NOT NULL,
  `fine_sum` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
```

```
CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `driverid` int(11) NOT NULL,
  `latitude` decimal(10,0) NOT NULL,
  `longitude` decimal(10,0) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

```

## Environments
```
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uber";
```

## System Requirements
  * PHP
  * MYSQL
  * NPM (For bower install)

## Run
Use your preferred HTTP Server to run this project.

# Screenshot
### Search Driver
```
localhost/
```
![ScreenShot](https://raw.githubusercontent.com/probasranjan/Uber/master/screenshots/Search%20driver.PNG)
### Filter By Rating
```
localhost/car_list.php?sort=rating
```
![ScreenShot](https://raw.githubusercontent.com/probasranjan/Uber/master/screenshots/Filtered%20By%20rating.PNG)
### Filter By Top Earner
```
localhost/car_list.php?sort=earned
```
![ScreenShot](https://raw.githubusercontent.com/probasranjan/Uber/master/screenshots/Top%20Earner.PNG)
### Filter By Fines
```
localhost/car_list.php?sort=fined
```
![ScreenShot](https://raw.githubusercontent.com/probasranjan/Uber/master/screenshots/Filtered%20by%20fined.PNG)
### Add Driver
```
localhost/admin/add_driver.php
```
![ScreenShot](https://raw.githubusercontent.com/probasranjan/Uber/master/screenshots/Add%20Driver.PNG)
### update Driver
```
localhost/admin/update_driver.php?id=2
```
![ScreenShot](https://raw.githubusercontent.com/probasranjan/Uber/master/screenshots/Update%20Driver%20info.PNG)

# License
You are free to do whatever you want.

# Conclusion
I strongly recommend you not to consider this is a complete project. But I would really love to learn more from you. Please feel free to give your valuable feedback to this quick draft.

Thank you for your time :)
