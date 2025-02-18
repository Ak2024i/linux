<?php
// API接口文件
include '../db/connect.php';

header('Content-Type: application/json');

$action = $_GET['action'];

switch ($action) {
    case 'getUser':
        $userId = $_GET['id'];
        $sql = "SELECT * FROM users WHERE id = '$userId'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo json_encode($result->fetch_assoc());
        } else {
            echo json_encode(['error' => 'User not found']);
        }
        break;

    case 'getAllUsers':
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);
        $users = [];
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
        echo json_encode($users);
        break;

    default:
        echo json_encode(['error' => 'Invalid action']);
        break;
}

$conn->close();
?>
