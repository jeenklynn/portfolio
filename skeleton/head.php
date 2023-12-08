<meta charset="UTF-8">

<?php     
include('connect.php');
$sql = "SELECT * FROM author";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<title>" . $row["username"]. " </title>";
        }
    } else {
        echo "Sonuç bulunamadı";
    }

$sql = "SELECT avatars.link, author.username 
FROM author 
INNER JOIN avatars ON avatars.id = author.avatar";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<link rel='icon' type='image/x-icon' href='" . $row["link"] . "'>";
    }
} else {
    echo "Sonuç bulunamadı";
}
?>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../design/css/style.css">
<script src="https://kit.fontawesome.com/a1690affb8.js" crossorigin="anonymous"></script>
<?php
$sql = "SELECT wallpapers.link, author.username 
    FROM author 
    INNER JOIN wallpapers ON wallpapers.id = author.wallpaper";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<style> body {background-image: url('" . $row["link"] . "'); background-size: cover;} </style>";
        }
    } else {
        echo "Sonuç bulunamadı";
    }
?>