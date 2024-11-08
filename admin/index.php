<?php 
// Require file commons
require_once '../commons/env.php'; 
require_once '../commons/function.php'; 

// Require toàn bộ file Controllers
require_once './controllers/AdminDanhMucController.php';
require_once './controllers/AdminSanPhamController.php';

// Require toàn bộ file Models
require_once './models/AdminDanhMuc.php';
require_once './models/AdminSanPham.php';

// Route
$act = $_GET['act'] ?? '/';

match ($act) {
    'danh-muc' => (new AdminDanhMucController())->danhSachSanPham(),
};