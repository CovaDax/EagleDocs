<?php
    $db->query("DELETE FROM sessions WHERE time < " . time() - 60);

    $result = $db->query("SELECT * FROM sessions");

    while ($row = $result->fetch_assoc()) {
        echo $row['username'] . "<br />";
    }
?>