<?php
// ******************Connection Code********************
$conn = new mysqli("localhost", "root", "", "ur_code_lite"); // UR-code-0001
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error.".");
}
