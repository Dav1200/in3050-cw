//function to format the date to a string
function formatDate(date) {
  return date.toISOString().split("T")[0];
}
//set the date index to 7 to display the initial 7 days on unassigned services
let dateIndex = 7;

//function to load more dates and fetch the results again
function loadMoreDates() {
  dateIndex += 7;
  fetchAndPopulateTable();
}
//call the function to fetch and populate the table to check for unassinged services
async function fetchAndPopulateTable() {
  //get the data requried to populate the table and set the date to the current date
  const services = await fetchAllServices();
  const tableBody = document.getElementById("table-body");
  const today = new Date();
  const futureDates = getFutureDates(today, dateIndex);

  tableBody.innerHTML = "";
  //iterate through the dates and check if the services are available or not
  futureDates.forEach((date) => {
    const breakfast = services.find(
      (item) => item.service_date === date && item.service === "Breakfast"
    );
    const lunch = services.find(
      (item) => item.service_date === date && item.service === "Lunch"
    );
    const dinner = services.find(
      (item) => item.service_date === date && item.service === "Dinner"
    );

    const row = document.createElement("tr");
    // add row to the table according to if the date is seen, it will set to avaiable and if not it will set to unavaiable with green and red colours button added to assign default services later.
    row.innerHTML = `
            <td>${date}</td>
            <td style="color: ${
              breakfast
                ? breakfast.service_status === "available"
                  ? "green"
                  : "red"
                : "red"
            }">
                ${breakfast ? breakfast.service_status : "Unavailable"}
            </td>
            <td style="color: ${
              lunch
                ? lunch.service_status === "available"
                  ? "green"
                  : "red"
                : "red"
            }">
                ${lunch ? lunch.service_status : "Unavailable"}
            </td>
            <td style="color: ${
              dinner
                ? dinner.service_status === "available"
                  ? "green"
                  : "red"
                : "red"
            }">
                ${dinner ? dinner.service_status : "Unavailable"}
            </td>
            <td><button type="button" onclick="assignDefaultServices(this)">  Assign Default</button></td>
            `;
    //add the row to the parent container
    tableBody.appendChild(row);
  });
}

// helper function to get the future dates from the current date
function getFutureDates(startDate, days) {
  const dates = [];
  for (let i = 0; i < days; i++) {
    const date = new Date(startDate);
    date.setDate(startDate.getDate() + i);
    dates.push(formatDate(date));
  }
  return dates;
}
//intial call to fetch and populate the table
fetchAndPopulateTable();

//fetch all services from current date used to populate the table for unassigned services
async function fetchAllServices() {
  try {
    const response = await fetch("/staffportal/service/all", {
      method: "GET",
    });
    const data = await response.json();
    return data;
  } catch (error) {
    console.error("Error:", error);
  }
}

//function to assign default services to the selected date from the row
function assignDefaultServices(row) {
  //get date from the row selected
  date = row.parentElement.parentElement.children[0].innerText;
  //create form data to send to the server
  const formData = new FormData();
  formData.append("date", date);
  //post request to assign default services
  fetch("/staffportal/service/assigndefault", {
    method: "POST",
    body: formData,
  })
    //check if the response is successful or not
    .then((response) => response.json())
    .then((data) => {
      if (data.success) {
        alert(data.success);
        fetchAndPopulateTable();
        searchServiceByDate();
      } else {
        alert(data.error);
      }
    })
    .catch((error) => {
      console.error("Error:", error);
    });
}

//function to amend the service updates the form.
function amendService(button) {
  //change the appearance of the form to coresspond to the amend action so we dont have to create a new form.
  var row = button.parentElement.parentElement;
  var cells = row.getElementsByTagName("td");
  document.querySelector("h2").innerText = "Update Service";
  document.querySelector("button[type='submit']").innerText = "Update";
  // Populate the form with the values from the selected row
  document.getElementById("service-date").value = cells[2].innerText;
  document.getElementById("service").value = cells[1].innerText;
  document.getElementById("time-start").value = cells[3].innerText;
  document.getElementById("time-end").value = cells[4].innerText;
  document.getElementById("tables-available").value = cells[5].innerText;
  document.getElementById("service-status").value = cells[7].innerText;

  //check if there is a delete button already and remove it so we dont override
  var existingDeleteButton = document.getElementById("deleteButton");
  if (existingDeleteButton) {
    existingDeleteButton.remove(); // Remove the existing Delete button
  }

  // create the delete button and add it to the parent class
  var deleteButton = document.createElement("button");
  deleteButton.id = "deleteButton"; // Assign a unique ID to the button
  deleteButton.className = "red-button"; // Add the desired class for styling
  deleteButton.type = "button";
  deleteButton.innerText = "Delete";

  //the idea is to add the id of the service to the form so we can use it to update the service, remove it everytime otherwise we will have duplicate id key

  var existingHiddenInput = document.querySelector("input[name='id']");
  if (existingHiddenInput) {
    existingHiddenInput.remove();
  }

  //add the hidden id to the form so it can be used to update
  var hiddenIdInput = document.createElement("input");
  hiddenIdInput.type = "hidden";
  hiddenIdInput.name = "id";
  hiddenIdInput.value = cells[0].innerText;

  //functionality to call delete service
  deleteButton.onclick = function () {
    deleteService(cells[0].innerText); // Call deleteService function when clicked
  };

  //add child to parent
  document.getElementById("serviceForm").appendChild(hiddenIdInput);
  document.getElementById("serviceForm").appendChild(deleteButton);
  var modal = document.getElementById("serviceFormModal");
  //close the form
  modal.style.display = "block";
}

//this function is called when the delete button is clicked to delete the service
function deleteService(id) {
  //confirms with the staff if they are ready to delete the selected service
  if (!confirm("Are you sure you want to delete this service?")) {
    modal.style.display = "none";
    return;
  }
  //create form data to send to the server
  const formData = new FormData();
  formData.append("id", id);
  //post request to delre service
  fetch("/staffportal/service/delete", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.success) {
        alert(data.success);
        searchServiceByDate();
      } else {
        alert(data.success);
      }
    })
    .catch((error) => {
      console.error("Error:", error);
    });
  searchServiceByDate();
  fetchAndPopulateTable();
  modal.style.display = "none";
}

//function to search for services by date, helps to filter the services by date for the assigned table
function searchServiceByDate() {
  date = document.getElementById("servicedate").value;
  if (date == "") {
    date = "false";
  }

  fetch(`/staffportal/service/update?date=${encodeURIComponent(date)}`, {
    method: "GET",
  })
    .then((response) => response.json())
    .then((data) => {
      var tableBody = document.getElementById("serviceListBody");

      // Clear the current rows in the table (optional)
      tableBody.innerHTML = "";

      // Loop through the returned data and create new rows dynamically
      data.forEach((service) => {
        var row = document.createElement("tr");
        row.innerHTML = `
            <td class="id-data">${service.id}</td>
            <td>${service.service}</td>
            <td>${service.service_date}</td>
            <td>${service.time_start}</td>
            <td>${service.time_end}</td>
            <td>${service.tables_available}</td>
            <td>${service.tables_booked}</td>
            <td>${service.service_status}</td>
            <td><button class="amend-button" onclick="amendService(this)" type="button">Amend</button></td>
        `;
        // Append the new row to the table body
        tableBody.appendChild(row);
      });
    })
    .catch((error) => {
      console.error("Error:", error);
    });
}

//function to clear the date filter and display all aviailable services
function clearDate() {
  document.getElementById("servicedate").value = "";
  searchServiceByDate();
}

// Handle form submission for adding services
document.getElementById("serviceForm").addEventListener("submit", function (e) {
  e.preventDefault();
  const formData = new FormData(this);
  //check if button text is submit or update
  var submitBtn = document.querySelector("button[type='submit']");
  //remove the id from the from data as its not required for inserting into db
  console.log(submitBtn.innerText);
  if (submitBtn.innerText == "Submit") {
    formData.delete("id");
  }

  //call to post data
  fetch("/staffportal/service/add", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.success) {
        alert(data.success);
      } else {
        alert(data.success);
      }
    })
    .catch((error) => {
      console.error("Error:", error);
    });

  // Close the modal after form submission
  searchServiceByDate();
  fetchAndPopulateTable();
  document.querySelector("h2").innerText = "Update Service";
  document.querySelector("button[type='submit']").innerText = "Update";
  modal.style.display = "none";
});

//handle default form submission to update the default services provided
document
  .getElementById("defaultServiceForm")
  .addEventListener("submit", function (e) {
    //prevent default form submission
    e.preventDefault();
    //create form data to send to the server
    const formData = new FormData(this);
    //post request to service
    fetch("/staffportal/service/defaultform", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.success) {
          //required as the user should know  if the service was added or not
          alert(data.success);
        } else {
          alert(data.success);
        }
      })
      .catch((error) => {
        console.error("Error:", error);
      });

    // Close the modal after form submission
    defaultModal.style.display = "none";
  });

// Get the modal and button to open it
var modal = document.getElementById("serviceFormModal");
var openBtn = document.getElementById("openFormBtn");
var closeBtn = document.getElementsByClassName("close-btn")[0];
const dateSelected = document.getElementById("servicedate");

//opens the default form modal for services setup
var defaultModal = document.getElementById("defaultFormModal");
var openDefaultBtn = document.getElementById("openFormdefault");
var closeDefaultBtn = document.getElementById("closebtndefault");

// Open the modal when the button is clicked
openBtn.onclick = function () {
  modal.style.display = "block";
  //cchange heaidng and button text
  document.querySelector("h2").innerText = "Create Service";
  document.querySelector("button[type='submit']").innerText = "Submit";
};

// Close the modal when the close button is clicked
closeBtn.onclick = function () {
  modal.style.display = "none";
  document.querySelector("h2").innerText = "Update Service";
  document.querySelector("button[type='submit']").innerText = "Update";
  var existingDeleteButton = document.getElementById("deleteButton");
  if (existingDeleteButton) {
    existingDeleteButton.remove();
  }
};

openDefaultBtn.onclick = function () {
  defaultModal.style.display = "block";
};

closeDefaultBtn.onclick = function () {
  defaultModal.style.display = "none";
};

// Close the modal if the user clicks anywhere outside the modal
window.onclick = function (event) {
  if (event.target == modal) {
    defaultModal.style.display = "none";
    document.querySelector("h2").innerText = "Update Service";
    document.querySelector("button[type='submit']").innerText = "Update";
    modal.style.display = "none";
    var existingDeleteButton = document.getElementById("deleteButton");
    if (existingDeleteButton) {
      existingDeleteButton.remove(); // Remove the existing Delete button
    }
  }
};

dateSelected.addEventListener("change", function () {
  searchServiceByDate();
});
