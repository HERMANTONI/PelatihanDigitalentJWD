<?php
$artikel = [
    [
        "judul" => "Belajar php & my sql Pemula",
        "penulis" => "digitalent"
    ],
    [
        "judul" => "Belajar php dari nol to master",
        "penulis" => "digitalent"
    ],
    [
        "judul" => "membuat aplikasi dengan php",
        "penulis" => "digitalent"
    ]
];

foreach($artikel as $post){
    echo "<h2>".$post["judul"]."</h2>";
    echo "<p>".$post["penulis"]."</p>";
    echo "<hr>";
}

?>