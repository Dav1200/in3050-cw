// listen for the document to be fully loaded and then run the function to set the date picker min and add the change listener
document.addEventListener("DOMContentLoaded", function () {
  setDatePickerMin();
  addDatePickerChangeListener();
});

// Listen for the service select to change and then run the function to get the service times
document.getElementById("service").addEventListener("change", function () {
  const date = document.getElementById("date").value;
  getServiceTimes(date);
});

// Set the minimum date for the date picker to today
function setDatePickerMin() {
  const today = new Date().toISOString().split("T")[0];
  const date_picker = document.getElementById("date");
  // Set the minimum date to today and set the date picker to today
  date_picker.setAttribute("min", today);
}

// Add a change listener to the date picker to get the services available for the selected date
function addDatePickerChangeListener() {
  const date_picker = document.getElementById("date");
  date_picker.addEventListener("change", function () {
    const date_selected = date_picker.value;
    fetch(
      `/reservation/getservices?date=${encodeURIComponent(date_selected)}`,
      {
        method: "GET",
      }
    )
      .then((response) => response.json())
      .then((data) => {
        const select = document.getElementById("service");
        select.innerHTML = "";
        const option = document.createElement("option");
        if (data.length === 0) {
          option.textContent = "No Services Available";
          select.appendChild(option);
        } else {
          data.forEach((service) => {
            const combined = `${service.service} - ${service.time_start} to ${
              service.time_end
            } - ${
              service.tables_available * 2 - service.tables_booked * 2
            } Spaces Available`;
            const option = document.createElement("option");

            option.textContent = combined;
            select.appendChild(option);
          });

          //function to get times for the selected service initial fetch
          getServiceTimes(date_selected);
        }
      })
      .catch((error) => {
        console.error("Error:", error);
      });
  });
}
//get the service times for the selected date and service
function getServiceTimes(date) {
  const select = document.getElementById("service");
  const selectValue = select.value.split(" - ")[0].trim();
  fetch(
    `/reservation/getServicetimes?date=${encodeURIComponent(
      date
    )}&service=${encodeURIComponent(selectValue)}`,
    {
      method: "GET",
    }
  )
    .then((response) => response.json())
    .then((data) => {
      //add times to the time select as options
      const time_select = document.getElementById("time");
      time_select.innerHTML = "";
      const option = document.createElement("option");
      if (data.length === 0) {
        option.textContent = "No Times Available";
      } else {
        data.forEach((time) => {
          const opt = document.createElement("option");
          opt.textContent = time;
          time_select.appendChild(opt);
        });
      }
      time_select.appendChild(option);
        })
        .catch((error) => {
      console.error("Error:", error);
    });
}

//listen for the form to be submitted and then run the function to submit the form
document
  .querySelector(".reservation-container form")
  .addEventListener("submit", submitReservationForm);
//submit reservation form.
function submitReservationForm(e) {
  e.preventDefault();
  //do some preprocessing for validation.
  //get the form data
  const seats  = document.getElementById("service").value.split(" - ")[2].trim().split(" ")[0];
  const guests = document.getElementById("guests").value;
  //error message to handle no guests
  if (parseInt(guests) > parseInt(seats)) {
    showErrorMessage("Number of guests exceeds available seats.");
    return;
  }
  //error message to handle no times
  const timeSelect = document.getElementById("time");
  if (timeSelect.value === "No Times Available") {
    showErrorMessage("Please pick another service with available times.");
    return;
  }

  const formData = new FormData(this);
  //modify so that the service is correct format.
  const service = document
    .getElementById("service")
    .value.split(" - ")[0]
    .trim();
  formData.append("serviceOnly", service);

  fetch("/reservation/create", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.status === "success") {
        //
        window.location.href = "/reservationmail";
        
      } else {
        showErrorMessage(data.message);
      }
    })
    .catch((error) => {
      console.error("Error:", error);
    });
}

// Function to show an error message
function showErrorMessage(message) {
  const errorDiv = document.getElementById("error-message");
  errorDiv.innerHTML = message; // Set the message
  errorDiv.style.display = "block"; // Display the message
}
