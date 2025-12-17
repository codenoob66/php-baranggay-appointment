const aptForm = document.getElementById("appointment-form");
const responseDisplay = document.getElementById("message-area");
const responsiveDiv = document.getElementById("responseMessage");
const sutmitbtn = document.getElementById("submit-appt");
const toggleButton = document.getElementById("switch-to-check-form");
const checkAppt = document.getElementById("check-appointment");
const apptField = document.getElementById("appointment-no");
const testBtn = document.getElementById("test-btn");
const displayName = document.getElementById("display-name-field");
const displaySchedule = document.getElementById("display-schedule-field");
const displayService = document.getElementById("display-service-type");
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

  try {
    const response = await fetch(url, {
      method: "GET",
    });

    if (!response.ok) {
      console.log("Please enter a valid confirmation number");
      return;
    } else {
      console.log("Valid Confirmation No.");
      const data = await response.json();
      schedContainer.style.display = "flex";
      const firstName = data[1].Client_FirstName;
      const lastName = data[1].Client_LastName;
      displayName.innerText = `${firstName} ${lastName}`;
      checkAppt.style.display = "none";
      console.log(data)
      return;
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
