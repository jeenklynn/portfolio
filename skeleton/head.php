<meta charset="UTF-8">
<title>Jeenklynn</title>
<link rel="icon" type="image/x-icon" href="#">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../design/css/style.css">
<script src="https://kit.fontawesome.com/a1690affb8.js" crossorigin="anonymous"></script>
<?php
$sql2 = "SELECT wallpapers.link, author.username 
    FROM author 
    INNER JOIN wallpapers ON wallpapers.id = author.wallpaper";
    $result2 = $conn->query($sql2);

    if ($result2->num_rows > 0) {
        while ($row = $result2->fetch_assoc()) {
            echo "<style> body {background-image: url('" . $row["link"] . "'); background-size: cover;} </style>";
        }
    } else {
        echo "Sonuç bulunamadı";
    }
?>