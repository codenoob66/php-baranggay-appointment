const aptForm = document.getElementById("appointment-form");
const responseDisplay = document.getElementById("message-area");
const responsiveDiv = document.getElementById("responseMessage");
const sutmitbtn = document.getElementById("submit-appt");
const toggleButton = document.getElementById("switch-to-check-form");
const checkAppt = document.getElementById("check-appointment");
const apptField = document.getElementById("appointment-no");
const testBtn = document.getElementById("test-btn");
let displayName = document.getElementById("display-name-field");
let displaySchedule = document.getElementById("display-schedule-field");
let displayService = document.getElementById("display-service-type");
const schedContainer = document.getElementById("update-sched-container");
const closeModal = document.getElementById("sample-shit");

// let service_id;
// console.log(checkAppt)

aptForm.addEventListener("submit", async function (event) {
  event.preventDefault();

  const url = "submit_handler.php";
  const formData = new FormData(this);

  try {
    const response = await fetch(url, {
      method: "POST",
      body: formData,
    });

    if (!response.ok) {
      responsiveDiv.innerHTML = `❌ Server Error`;
      responsiveDiv.style.color = "red";
      return; // stop here
    } else {
      const data = await response.json();
      const confirmationNumber = data;
      responseDisplay.innerText = `Appointment Confirmed! Your confirmation number is ${confirmationNumber}`;
      aptForm.reset();
      setTimeout(
        (element) => {
          element.innerText = "";
        },
        10000,
        responseDisplay
      );
    }
  } catch (error) {
    console.error("Error in something", error);
    responsiveDiv.innerHTML = `❌ Network Error unable to connect to the server`;
    responsiveDiv.style.color = "red";
  }
});

toggleButton.addEventListener("click", (event) => {
  event.preventDefault();
  aptForm.classList.toggle("active");
  checkAppt.classList.toggle("active");
});

checkAppt.addEventListener("submit", async function (event) {
  event.preventDefault();

  const apptValue = apptField.value;
  const url = `submit_handler.php?appointment-no=${apptValue}`;
  const confNumber = document.getElementById("conf-number");
  confNumber.innerText = apptValue;
  try {
    const response = await fetch(url, {
      method: "GET",
    });

    if (!response.ok) {
      console.log("Please enter a valid confirmation number");
      confNumber.style.color = "red";
      confNumber.innerText = "Invalid Confirmation Number";
      return;
    } else {
      console.log("Valid Confirmation No.");
      const data = await response.json();
      confNumber.style.color = "green";
      schedContainer.style.display = "flex";
      let firstName;
      let lastName;
      let serviceId;
      let displayService;
      let apptSchedule;
      getClientData(
        firstName,
        lastName,
        serviceId,
        data,
        displayName,
        displayService,
        apptSchedule
      );
      checkAppt.style.display = "none";
      console.log(data);
    }
  } catch (error) {
    console.error("Error in something", error);
  }
});

//this will be move inside the ajax for getting the information of the confirmation number

closeModal.addEventListener("click", () => {
  schedContainer.style.display = "none";
  // checkAppt.classList.toggle("active");
});

function getClientData(
  firstName,
  lastName,
  serviceId,
  data,
  displayName,
  displayService,
  apptSchedule
) {
  displayName = document.getElementById("display-name-field");
  displaySchedule = document.getElementById("display-schedule-field");
  displayService = document.getElementById("display-service-type");
  firstName = data[1].Client_FirstName;
  lastName = data[1].Client_LastName;
  serviceId = data[0].Service_id;
  serviceType = data[0].Service_type;
  apptSchedule = data[0].Appointment_Schedule;

  let dateObj = new Date(apptSchedule);

  let formatter = new Intl.DateTimeFormat("en-US", {
    dateStyle: "full",
    timeStyle: "short",
  });

  displayName.innerText = `${firstName} ${lastName}`;
  displayService.innerText = serviceType;
  displaySchedule.innerText = formatter.format(dateObj);
}
