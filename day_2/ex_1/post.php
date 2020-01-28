<div>
    <?php echo  'Pseudo : '. (htmlspecialchars($_POST['pseudo']) ?? '') . '<br /><br />'; ?>
    <?php echo  'Email : '. (htmlspecialchars($_POST['pseudo']) ?? '') . '<br /><br />'; ?>
    <?php echo  'Address : '. (htmlspecialchars($_POST['address']) ?? '') . '<br /><br />'; ?>
    <?php echo  'PC : '. (htmlspecialchars($_POST['pc']) ?? '') . '<br /><br />'; ?>
    <?php echo  'City : '. (htmlspecialchars($_POST['city']) ?? '') . '<br /><br />'; ?>
</div>

<a href="./index.php"> Return </a>