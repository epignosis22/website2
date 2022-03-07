

<?php include('templates/header.php'); ?>

<div class="frm">
        <form action="" class="reg1" method="POST" autocomplete="on">
            <fieldset>
                <legend>Registration Form</legend>
                <label for="fname"> First Name</label><br>
                <input type="text" name="fname"> <br>
                <label for="lname"> Last Name</label><br>
                <input type="text" name="lname"> <br>
                <label for="country"> country</label><br>
                <select name="countries" id="nations">
                    <option value="">Uganda</option>
                    <option value="">Kenya</option>
                    <option value="">Tanzania</option>
                    <option value="">south sudan</option>
                    <option value="">Rwanda</option>
                    <option value="">Burundi</option>
                    <option value="">Congo</option>
                    <option value="">DR. Congo</option>
                    <option value="">Zimbabwe</option>
                </select><br>
                <label for="city"> City</label><br>
                <select name="countries" id="nations"><br>
                    <option value="">Kampala</option>
                    <option value="">Nairobi</option>
                    <option value="">Dar es salam</option>
                    <option value="">Juba</option>
                    <option value="">Kigali</option>
                    <option value="">Bujumbura</option>
                    <option value="">Brazaville</option>
                    <option value="">Kinshasa</option>
                    <option value="">Harare</option>
                </select><br>
                <label for="pcode"> Post code</label><br>
                <input type="text" name="pcode"> <br>
                <label for="email"> Email</label><br>
                <input type="email" name="email"> <br>
                <input type="button" value="Submit">
            </fieldset>

        </form>
    </div>

<?php include('templates/footer.php'); ?>
