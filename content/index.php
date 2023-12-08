<?php
    $sql = "SELECT * FROM author";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='content-box'> <h1 id='username'>" . $row["username"]. " </h1> ";
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
            echo "<img class='avatar' src='" . $row["link"] . "' alt=''>";
        }
    } else {
        echo "Sonuç bulunamadı";
    }

    $sql = "SELECT * FROM author";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<p id='bio'>" . $row["biography"]. "</p>";
        }
    } else {
        echo "Sonuç bulunamadı";
    }

    $sql = "SELECT * FROM author";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<a class='social-link color-is-black' href='" . $row["github"]. "' target='_blank'><i class='fa-brands fa-github'></i></a>
            <a class='social-link color-is-orange' href='" . $row["instagram"]. "' target='_blank'><i class='fa-brands fa-instagram'></i></a>
            <a class='social-link color-is-blue' href='" . $row["discord"]. "' target='_blank'><i class='fa-brands fa-discord'></i></a>
            <a class='social-link color-is-red' href='" . $row["youtube"]. "' target='_blank'><i class='fa-brands fa-youtube'></i></a>";
        }
    } else {
        echo "Sonuç bulunamadı";
    }
    $conn->close();
    ?>
    </div>