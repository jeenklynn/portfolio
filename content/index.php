<?php
// Veri çekme sorgusu
    $sql = "SELECT * FROM author";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Verileri döngü ile alın
        while($row = $result->fetch_assoc()) {
            echo "<div class='content-box'> <h1 id='username'>" . $row["username"]. " </h1> ";
        }
    } else {
        echo "Sonuç bulunamadı";
    }

    $sql3 = "SELECT avatars.link, author.username 
    FROM author 
    INNER JOIN avatars ON avatars.id = author.avatar";
    $result3 = $conn->query($sql3);

    if ($result3->num_rows > 0) {
        while ($row = $result3->fetch_assoc()) {
            echo "<img class='avatar' src='" . $row["link"] . "' alt=''>";
        }
    } else {
        echo "Sonuç bulunamadı";
    }

    $sql4 = "SELECT * FROM author";
    $result4 = $conn->query($sql4);

    if ($result4->num_rows > 0) {
        // Verileri döngü ile alın
        while($row = $result4->fetch_assoc()) {
            echo "<p id='bio'>" . $row["biography"]. "</p>";
        }
    } else {
        echo "Sonuç bulunamadı";
    }

    // Bağlantıyı kapat
    $conn->close();
    ?>
    <a class="social-link color-is-black" href="#github" target="blank_"><i class="fa-brands fa-github"></i></a>
    <a class="social-link color-is-blue" href="#discord" target="blank_"><i class="fa-brands fa-discord"></i></a>
    </div>