<html>
<head>

</head>

<body>

<?php require_once './templates/navbar.php'; ?>

<div>
    <?php
        $html = '';
        $errors = [];

        $name = $_GET['name'] ?? null;
        $color = $_GET['color'] ?? null;

        if(!$name) {
            $errors[] = 'Undefined name';
        }

        if(!$color) {
            $errors[] = 'Undefined color';
        }

        if(!$errors) {
            $html .= 'Article : ' . $name . '<br/>';
            $html .= 'Color : ' . $color;
        }
        else {
            foreach ($errors as $error) {
                $html .= $error . '<br />';
            }
        }

        echo $html;
    ?>
</div>

<?php require_once './templates/footer.php'; ?>
</body>
</html>