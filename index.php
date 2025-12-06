<?php require "partials/header.php"; ?>
<h1 class="title">Barrangay lahug appointment center</h1>

<div class="form-container">
    <form class="appointment-form" id="appointment-form">
        <label for="user-name">Your Name:</label>
        <input type="text" id="user-name" name="user-name" required placeholder="First and Last Name">

        <label for="appointment-type">Appointment Type:</label>
        <select name="appointment-type" id="appointment-type" required>
            <option value="" selected disabled>-- Select a Service Type --</option>
            <option value="Health">Health</option>
            <option value="Document-Services">Document Services</option>
            <option value="Public-Service">Public Affairs</option>
        </select>

        <label for="appointment-time">Date & Time:</label>
        <input type="datetime-local" id="appointment-time" name="appointment-time" required>

        <button class="form-btn" id="submit-appt" type="submit">Book Appointment</button>

    </form>

</div>
<p id="message-area"></p>
<script src="script.js"></script>


<?php require "partials/footer.php"; ?>