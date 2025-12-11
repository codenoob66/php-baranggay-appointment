<?php require "partials/header.php"; ?>
<h1 class="title">Baranggay Lahug Appointment Center</h1>

<div class="form-container">
    <p id="message-area"></p>

    <form class="appointment-form" id="appointment-form">

        <div class="full-name">

            <div class="name-field">
                <label for="first-name">First Name</label>
                <input type="text" id="first-name" name="first-name" required placeholder="First Name">
            </div>

            <div class="name-field">
                <label for="last-name">Last Name</label>
                <input type="text" id="last-name" name="last-name" required placeholder="Last Name">
            </div>

        </div>


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
        <a id="switch-to-check-form" href="">Have an appointment that you want to change?</a>

    </form>

    <form id="check-appointment" action="" class="active">
        <label for="appointment-no">Check Appointment</label>
        <input type="text" id="appointment-no" name="appointment-no" placeholder="Enter Appointment no.">
        <button id="check-appt" type="submit">Check</button>
        <a href="">Book an appointment instead?</a>
    </form>

</div>


<div class="update-sched-container">

    <div class="grouplabels">
        <label for="">Name:</label>
        <p>Jane Doe</p>
    </div>
    <div class="grouplabels">
        <label for="">Schedule:</label>
        <p>Appointment Schedule goes here</p>
    </div>

    <div class="grouplabels">
        <label for="">Service type:</label>
        <p>Service tpe goes here</p>
    </div>

    <button>Change Appointment</button>

</div>


<script src="script.js"></script>


<?php require "partials/footer.php"; ?>