<?php
session_start();
$_SESSION['dashboard_tour_completed'] = true;
echo json_encode(['status' => 'success']);
?>