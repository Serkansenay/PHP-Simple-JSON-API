<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

$tasks = [
    ["id" => 1, "title" => "Veritabanı mimarisini tasarla", "status" => "completed"],
    ["id" => 2, "title" => "Kullanıcı giriş endpoint'ini yaz", "status" => "in_progress"],
    ["id" => 3, "title" => "Arayüz tasarımlarını koda dök", "status" => "pending"]
];

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    http_response_code(200);
    echo json_encode([
        "success" => true, 
        "message" => "Görevler başarıyla getirildi.",
        "data" => $tasks
    ]);
} else {
    http_response_code(405);
    echo json_encode(["success" => false, "message" => "Sadece GET istekleri kabul edilmektedir."]);
}
?>
