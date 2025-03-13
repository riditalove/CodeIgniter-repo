<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Text Display</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .random-text {
            font-size: 24px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="random-text">
            <?php 
                echo isset($blog_url) ? "Blog URL: " . htmlspecialchars($blog_url) : "No blog URL provided.";
            ?>
        </div>
    </div>
</body>
</html>
