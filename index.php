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


<div class="update-sched-container" id="update-sched-container">
    <svg id="sample-shit" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z" />
    </svg>
    <h1>Confirmation no.</h1>
    <span>XXXXXXXXXX</span>

    <div class="grouplabels">
        <label for="">Name:</label>
        <p id="display-name-field">Jane Doe</p>
    </div>
    <div class="grouplabels">
        <label for="" id="display-schedule-field">Schedule:</label>
        <p>Appointment Schedule goes here</p>
    </div>

    <div class="grouplabels">
        <label for="" id="display-service-type">Service type:</label>
        <p>Service tpe goes here</p>
    </div>

    <button>Change Appointment</button>
    <button id="test-btn">test</button>

</div>


<script src="script.js"></script>


<?php require "partials/footer.php"; ?>