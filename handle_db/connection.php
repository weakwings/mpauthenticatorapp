<?php
try {
    $mysqli = new mysqli("localhost", "root", "", "userapp");
} catch (mysqli_sql_exception $e) {
    echo "Error: " . $e->getMessage();
}
