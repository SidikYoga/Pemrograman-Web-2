<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        .content {
            flex: 1;
        }
        .footer {
            background-color: #f1f1f1;
            text-align: center;
            padding: 10px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="content">
    
    </div>
    <footer class="footer">
        <?php
        $year = date("Y");
        ?>
        <p>&copy; <?php echo $year; ?> Sidik Yoga Pratama.</p>
    </footer>
</body>
</html>
