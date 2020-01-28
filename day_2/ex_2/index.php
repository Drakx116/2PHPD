<script type="text/javascript">
    function checkFormInputs() {
        let errors = [];

        let form = document.forms['address_form'];

        for (let i = 0; i < form.length - 1; i++) {
            let inputValue = form[i].value;
            if(!inputValue) {
                errors.push('Missing ' + form[i].name)
            }
        }

        if(!errors.length) {
            return true;
        }

        let message = '';
        errors.forEach((error) => {
            message += error + '\n';
        });

        alert(message);

        return false;
    }
</script>


<h2> Customer address (JS Validation) </h2>
<form action="./post.php" method="POST" name="address_form" onsubmit="return checkFormInputs()">
    <input name="pseudo" placeholder="Pseudo" type="text"><br />
    <input name="email" placeholder="Email" type="text"><br />
    <input name="address" placeholder="Address" type="text"><br />
    <input name="pc" placeholder="Postal Code" type="text"><br />
    <input name="city" placeholder="City" type="text"><br />

    <br />
    <input type="submit" value="Send">
</form>

<a href="../index.php"> Return </a>