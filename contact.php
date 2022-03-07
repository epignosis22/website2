<?php include('templates/header.php'); ?>
<section id="contact">
<div class="container">
    <div class="row">
        <div class="col">
            <div class="text">
            <h1>Contact Us</h1>
            <p class="flex">
                <strong>Tel.</strong> 0702589630
            </p>
            <p class="flex">
                <strong>Email.</strong> support@visituganda
            </p>
            <p class="flex">
                <strong>Social Media.</strong> @visituganda
            </p>
            </div>
        </div>
        <div class="col">
            <form class="message-form">
                <div class="field">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="field">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="field">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" rows="10"></textarea>
                </div>
                <div class="field"><input type="submit" class="btn" value="Send Message"></div>
            </form>
        </div>
    </div>
</div>
</section>
<?php include('templates/footer.php'); ?>