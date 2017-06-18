# Realtime GPS Tracking
Sample project Realtime GPS Tracking menggunakan PHP + MySQL Database dan jQuery (update data secara realtime).
Project ini menggunakan lib map yang telah dimodifikasi oleh Pubnub.

## How to install

### Prerequisites
* XAMPP or any Apache webserver
* phpMyAdmin (included if you used XAMPP)

### Setup database
Create database named **realtime-gps-tracking**

### Database connection string
Create database connection string, file already **koneksi.php**.

```
<?php
    $host="localhost";
    $username="root";
    $passwd="";
    $db_name="realtime-gps-tracking";
    $connection = mysqli_connect($host,$username,$passwd,$db_name) or die("Error " . mysqli_error($connection));
?>
```

### Store master-app in localhost
If you're using windows and XAMPP installed, path are available in

```
C:\xampp\htdocs\
```

Put master-app folder in there, like
```
C:\xampp\htdocs\realtime-gps-tracking\
```

## Here we go

### Map are showing
Blue marker getting data from db.
[![CC0](https://github.com/TFK-Project/realtime-gps-tracking/screenshot/Screenshot1.png)]

### Input Coordinat
Blue marker getting data from db.
[![CC0](https://github.com/TFK-Project/realtime-gps-tracking/screenshot/Screenshot2.png)]

### Track
Blue marker will move, gotcha! track! :D
[![CC0](https://github.com/TFK-Project/realtime-gps-tracking/screenshot/Screenshot2.png)]


## License

[![CC0](https://www.gnu.org/graphics/gplv3-127x51.png)](https://www.gnu.org/licenses/gpl-3.0.en.html)

GNU General Public License v3.0
