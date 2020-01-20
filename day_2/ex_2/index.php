<script type="text/javascript">
    function checkFormInputs() {
        let pseudo = document.forms['address_form']['pseudo'].value;
        let email = document.forms['address_form']['email'].value;
        let address = document.forms['address_form']['address'].value;
        let pc = document.forms['address_form']['pc'].value;
        let city = document.forms['address_form']['city'].value;

        let error = !!(pseudo && email && address && pc && city);

        if(error) {
            return true;
        }
        else {
            alert('Missing fields');
            return false;
        }
    }
</script>


<h2> Customer address (JS Validation) </h2>
<form action="./post.php" method="POST" name="address_form" onsubmit="return checkFormInputs()">
    <input name="pseudo" placeholder="Pseudo"  type="text"><br />
    <input name="email" placeholder="Email"  type="text"><br />
    <input name="address" placeholder="Address"  type="text"><br />
    <input name="pc" placeholder="Postal Code"  type="text"><br />
    <input name="city" placeholder="City"  type="text"><br />

    <br />
    <input type="submit" value="Send">
</form>

<a href="../index.php"> Return </a>