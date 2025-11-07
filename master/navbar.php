<?php
// Save as navbar.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>St. Francis De Sales School</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f0f4f8;
      overflow-x: hidden; /* Prevent horizontal scroll */
    }
    .navbar{
      background-color:#058ec4;
      color: white;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      padding: 15px;
      gap: 20px;
    }

  

    .navbar a {
      color: white;
      text-decoration: none;
      font-size: 12px;
      padding: 4px 4px;
      border-radius: 8px;
      //background-color: transparent;
      transition: background-color 0.3s, transform 0.3s;
      display: flex;
      align-items: center;
      gap: 8px;
      white-space: nowrap;
    }

    .navbar a:hover {
     transform: scale(1.05);
    }

    .emoji {
      font-size: 12px;
    }

    /* Responsive Design */
    @media (max-width: 600px) {
      .navbar {
        flex-direction: column;
        align-items: flex-start;
        padding: 10px 20px;
      }

      .navbar a {
        width: 100%;
        justify-content: flex-start;
      }
    }
  </style>
</head>
<body>

  <div class="navbar">
    <a href="tel:9615837112">
      <span class="emoji">📞</span> +91-9615837112
    </a>
    <a href="mailto:sfsburburia@gmail.com">
      <span class="emoji">📧</span> sfsburburia@gmail.com
    <a href="https://www.google.com/maps?q=Your+School+Location" target="_blank">
      <span class="emoji">📍</span> Gamaku(PO)Amarpur,Gomati (Dist),Tripura,799101
    </a>
  </div>

