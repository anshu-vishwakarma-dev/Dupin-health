<?php
require_once 'db.php';

$products = [];

// Fetch products with their categories
$query = "SELECT p.*, c.name as category_name 
          FROM products p 
          LEFT JOIN categories c ON p.category_id = c.id 
          WHERE p.status = 1";
$result = db_query($query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        // Map database fields to the structure expected by the frontend
        $products[] = [
            'id' => $row['id'],
            'icon' => $row['icon'] ?: 'fas fa-pills',
            'image' => !empty($row['image']) ? 'admin/uploads/' . $row['image'] : '',
            'category' => strtolower($row['category_name'] ?: 'others'),
            'name' => $row['name'],
            'composition' => $row['composition'],
            'usage' => $row['usage_info'],
            'packaging' => $row['packaging'],
            'form' => $row['form'],
            'stage' => $row['stage'],
            'approval' => $row['approval'],
            'desc' => $row['description']
        ];
    }
}
?>
