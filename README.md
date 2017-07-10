# Realtime GPS Tracking
Sample project Realtime GPS Tracking menggunakan PHP + MySQL Database dan jQuery (update data secara realtime).
Project ini menggunakan lib map yang telah dimodifikasi oleh PubNub.

## How to install

### Prerequisites
* XAMPP or any Apache webserver
* phpMyAdmin (included if you used XAMPP)
* PubNub Key (publish and subscribe key), register here for free http://www.pubnub.com/get-started/

### Store master-app in localhost
[Download this repo](https://github.com/TFK-Project/Gps-Realtime-Tracking-Database/archive/master.zip) and store, if you're using windows and XAMPP installed, path are available in

```
C:\xampp\htdocs\
```

Put master-app folder in there, like
```
C:\xampp\htdocs\realtime-gps-tracking\
```

### Setup database
Create database named **realtime-gps-tracking**.
Sample db are available in this directory, just import it.
```
/sample db/realtime-gps-tracking.sql
```

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

### PubNub key
Put and change that **demo** key to your PubNub key.

```
var pubnub = new PubNub({
        publishKey: 'demo', //put your PubNub publish key
        subscribeKey: 'demo' //put your PubNub subscribe key
});
```

## Here we go

### Map are showing
Blue marker getting data from db.
![Map](/screenshot/Screenshot1.png?raw=true "Map")

### Input Coordinat
Try to input coordinat.
![Input coordinat](/screenshot/Screenshot2.png?raw=true "Input Coordinat")

### Track
Blue marker will moved _without refreshing_ the page, gotcha! track! :D
![Tracking](/screenshot/Screenshot3.png?raw=true "Tracking")


## License

[![CC0](https://www.gnu.org/graphics/gplv3-127x51.png)](https://www.gnu.org/licenses/gpl-3.0.en.html)

GNU General Public License v3.0
