<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* staffportal/ServiceManagement.html */
class __TwigTemplate_cdfa1180cfaaea869e2c9b148c6f6adb extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pagetitle"] ?? null), "html", null, true);
        yield "</title>
    <link rel=\"stylesheet\" href=\"/public/css/staffportalhub.css\">
</head>

<body>

    ";
        // line 13
        yield Twig\Extension\CoreExtension::include($this->env, $context, "/staffportal/header.html");
        yield "
    <main>
        <h1 class=\"\">Service Management</h1>

        <!-- Helper section to assist staff provides overview for the tables  -->
        <section class=\"story\">
            <h3>Assigned Services</h3>
            <p style=\"font-size: 1.1em; line-height: 1.6; color: #333;\"></p>
            This section displays the services assigned to the selected date. Use the \"Amend\" button to update service
            details. To view all services, clear the filter. To view services for a specific date, select a date from
            the calendar. To add Service click on 'Add Service' </p>
        </section>


        <!-- Section to filter the tables, clear the table, add new services and amend the default services form -->
        <section class=\"filter-section\">

            <label for=\"service-date\">Selected Date:</label>
            <input class=\"selecteddate\" type=\"date\" id=\"servicedate\" name=\"service-date\" value=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(" now", "Y-m-d"), "html", null, true);
        // line 32
        yield "\">

            <button class=\"red-button\" type=\"button\" onclick=\"clearDate()\">Clear Filter</button>
            <button class=\"red-button\" type=\"button\" id=\"openFormdefault\">Setup Default Form</button>

            <button style=\"float: right;\" class=\"red-button\" id=\"openFormBtn\">Add Service</button>

        </section>


        <!-- Section for pop up form to add services for a particular date with their start, end times alongside with all the other information required for service setup -->
        <section>
            <div id=\"serviceFormModal\" class=\"modal\">
                <div class=\"modal-content\">
                    <span class=\"close-btn\">&times;</span>
                    <h2>Create Service</h2>

                    <!-- form to add service  -->
                    <form id=\"serviceForm\">
                        <div>
                            <label for=\"service-date\">Service Date:</label>
                            <!-- sets the current day to filter by -->
                            <input type=\"date\" id=\"service-date\" name=\"service-date\" value=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(" now", "Y-m-d"), "html", null, true);
        // line 55
        yield "\" required>
                        </div>
                        <!-- drop down option to select which service you would like to add -->
                        <div>
                            <label for=\"service\">Service Status:</label>
                            <select id=\"service\" name=\"service\" required>
                                <option value=\"Breakfast\">Breakfast</option>
                                <option value=\"Lunch\">Lunch</option>
                                <option value=\"Dinner\">Dinner</option>
                            </select>
                        </div>
                        <!-- start time -->
                        <div>
                            <label for=\"time-start\">Start Time:</label>
                            <input type=\"time\" id=\"time-start\" name=\"time-start\" required>
                        </div>
                        <!-- end time -->
                        <div>
                            <label for=\"time-end\">End Time:</label>
                            <input type=\"time\" id=\"time-end\" name=\"time-end\" required>
                        </div>
                        <!-- tables min is 1 and has to be a number -->
                        <div>
                            <label for=\"tables-available\">Tables Available:</label>
                            <input type=\"number\" id=\"tables-available\" name=\"tables-available\" min=\"1\" required>
                        </div>
                        <!-- drop down to select option for service status -->
                        <div>
                            <label for=\"service-status\">Service Status:</label>
                            <select id=\"service-status\" name=\"service-status\" required>
                                <option value=\"available\">Available</option>
                                <option value=\"fully booked\">Fully Booked</option>
                                <option value=\"closed\">Closed</option>
                            </select>
                        </div>
                        <!-- buttomn to submit -->
                        <button class=\"red-button\" type=\"submit\">Submit</button>



                    </form>
                </div>
            </div>
        </section>


        <!-- Section for pop up form to setup default services for the staff to use  twig used to prepopulate the form with existing defualt services data-->
        <section>
            <div id=\"defaultFormModal\" class=\"modal\">
                <div class=\"modal-content\">
                    <span id=\"closebtndefault\" class=\"close-btn\">&times;</span>
                    <h2>Setup Default Service</h2>

                    <!-- Form to Setup Default Service -->
                    <form id=\"defaultServiceForm\">
                        ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["default_services"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 111
            yield "                        <div>
                            <h3>";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "service", [], "any", false, false, false, 112), "html", null, true);
            yield "</h3>
                            <label for=\"";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "service", [], "any", false, false, false, 113), "html", null, true);
            yield "-time-start\">Start Time:</label>

                            <input type=\"time\" id=\"";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "service", [], "any", false, false, false, 115), "html", null, true);
            yield "-time-start\"
                                name=\"";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "service", [], "any", false, false, false, 116), "html", null, true);
            yield "-time-start\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "time_start", [], "any", false, false, false, 116), "html", null, true);
            yield "\" required>

                            <label for=\"";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "service", [], "any", false, false, false, 118), "html", null, true);
            yield "-time-end\">End Time:</label>
                            <input type=\"time\" id=\"";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "service", [], "any", false, false, false, 119), "html", null, true);
            yield "-time-end\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "service", [], "any", false, false, false, 119), "html", null, true);
            yield "-time-end\"
                                value=\"";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "time_end", [], "any", false, false, false, 120), "html", null, true);
            yield "\" required>

                            <label for=\"";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "service", [], "any", false, false, false, 122), "html", null, true);
            yield "-tables-available\">Tables Available:</label>
                            <input type=\"number\" id=\"";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "service", [], "any", false, false, false, 123), "html", null, true);
            yield "-tables-available\"
                                name=\"";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "service", [], "any", false, false, false, 124), "html", null, true);
            yield "-tables-available\" min=\"1\"
                                value=\"";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "tables_available", [], "any", false, false, false, 125), "html", null, true);
            yield "\" required>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['service'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        yield "
                        <button class=\"red-button\" type=\"submit\">Submit</button>
                    </form>
                </div>
            </div>
        </section>


        <!-- Table to display assigned services alongside a button which will allow you to amend a specific service updates in real time -->
        <section style=\"max-height: 500px; overflow-y: auto;\">
            <table>
                <thead>
                    <!-- headings -->
                    <tr>
                        <th class=\"id-heading\">ID</th>
                        <th>Service</th>
                        <th>Service Date</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Total Tables</th>
                        <th>Tables Booked</th>
                        <th>Status</th>
                        <th>Amend</th>
                    </tr>
                </thead>
                <!-- body of table for data fetched initially loaded by twig -->
                <tbody id=\"serviceListBody\">
                    ";
        // line 155
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["servicelist"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 156
            yield "                    <tr id=\"service-row\">
                        <td class=\"id-data\">";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 157), "html", null, true);
            yield "</td>
                        <td>";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "service", [], "any", false, false, false, 158), "html", null, true);
            yield "</td>
                        <td>";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "service_date", [], "any", false, false, false, 159), "html", null, true);
            yield "</td>
                        <td>";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "time_start", [], "any", false, false, false, 160), "html", null, true);
            yield "</td>
                        <td>";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "time_end", [], "any", false, false, false, 161), "html", null, true);
            yield "</td>
                        <td>";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "tables_available", [], "any", false, false, false, 162), "html", null, true);
            yield "</td>
                        <td>";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "tables_booked", [], "any", false, false, false, 163), "html", null, true);
            yield "</td>
                        <td>";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "service_status", [], "any", false, false, false, 164), "html", null, true);
            yield "</td>
                        <td><button class=\"amend-button\" onclick=\"amendService(this)\" type=\"button\">Amend</button></td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['service'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        yield "                </tbody>
            </table>
        </section>


        <!-- Helper section to assist staff provides overview for unassigned table  -->
        <section class=\"story\">
            <h3>Unassigned Services</h3>

            <p>
                This section provides an overview of each day starting from the current date, indicating whether
                services have been assigned. It offers a quick and clear status update for convenience. The
                <strong>\"Assign Default\"</strong> button allows you to quickly assign default services for a specific
                day. The form for configuring default services can be found above. <strong>Note:</strong> <strong>This
                    action will not override any existing services</strong>, so you can use it without concern.
            </p>

        </section>


        <!-- Table to display unassigned services with a load more button to dispaly 7 more days -->
        <section style=\"max-height: 500px; overflow-y: auto;\">

            <table id=\"service-table\">
                <thead>
                    <tr>
                        <th>Service Date</th>
                        <th>Breakfast</th>
                        <th>Lunch</th>
                        <th>Dinner</th>
                        <th>Assign Default</th>
                    </tr>
                </thead>
                <tbody id=\"table-body\">

                </tbody>


            </table>

        </section>
        <button style=\"margin-bottom: 10px;\" class=\"red-button\" onclick=\"loadMoreDates()\">Load More</button>
    </main>
    ";
        // line 211
        yield Twig\Extension\CoreExtension::include($this->env, $context, "/staffportal/footer.html");
        yield "
</body>

</html>

<script>
    //function to format the date to a string
    function formatDate(date) {
        return date.toISOString().split('T')[0];
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
        const tableBody = document.getElementById('table-body');
        const today = new Date();
        const futureDates = getFutureDates(today, dateIndex);

        tableBody.innerHTML = '';
        //iterate through the dates and check if the services are available or not
        futureDates.forEach(date => {
            const breakfast = services.find(item => item.service_date === date && item.service === \"Breakfast\");
            const lunch = services.find(item => item.service_date === date && item.service === \"Lunch\");
            const dinner = services.find(item => item.service_date === date && item.service === \"Dinner\");

            const row = document.createElement('tr');
            // add row to the table according to if the date is seen, it will set to avaiable and if not it will set to unavaiable with green and red colours button added to assign default services later. 
            row.innerHTML = `
            <td>\${date}</td>
            <td style=\"color: \${breakfast ? (breakfast.service_status === 'available' ? 'green' : 'red') : 'red'}\">
                \${breakfast ? breakfast.service_status : 'Unavailable'}
            </td>
            <td style=\"color: \${lunch ? (lunch.service_status === 'available' ? 'green' : 'red') : 'red'}\">
                \${lunch ? lunch.service_status : 'Unavailable'}
            </td>
            <td style=\"color: \${dinner ? (dinner.service_status === 'available' ? 'green' : 'red') : 'red'}\">
                \${dinner ? dinner.service_status : 'Unavailable'}
            </td>
            <td><button type=\"button\" onclick=\"assignDefaultServices(this)\">  Assign Default</button></td>
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
            const response = await fetch('/staffportal/service/all', {
                method: 'GET',
            });
            const data = await response.json();
            return data;
        } catch (error) {
            console.error('Error:', error);
        }
    }

    //function to assign default services to the selected date from the row
    function assignDefaultServices(row) {
        //get date from the row selected
        date = row.parentElement.parentElement.children[0].innerText;
        //create form data to send to the server
        const formData = new FormData();
        formData.append(\"date\", date);
        //post request to assign default services
        fetch('/staffportal/service/assigndefault', {
            method: 'POST',
            body: formData,
        })
            //check if the response is successful or not
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert(data.success);
                    fetchAndPopulateTable();
                    searchServiceByDate();
                } else {
                    alert(data.error);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }

    //function to amend the service updates the form.
    function amendService(button) {
        //change the appearance of the form to coresspond to the amend action so we dont have to create a new form. 
        var row = button.parentElement.parentElement;
        var cells = row.getElementsByTagName(\"td\");
        document.querySelector(\"h2\").innerText = \"Update Service\";
        document.querySelector(\"button[type='submit']\").innerText = \"Update\";
        // Populate the form with the values from the selected row
        document.getElementById(\"service-date\").value = cells[2].innerText;
        document.getElementById(\"service\").value = cells[1].innerText;
        document.getElementById(\"time-start\").value = cells[3].innerText;
        document.getElementById(\"time-end\").value = cells[4].innerText;
        document.getElementById(\"tables-available\").value = cells[5].innerText;
        document.getElementById(\"service-status\").value = cells[7].innerText;


        //check if there is a delete button already and remove it so we dont override
        var existingDeleteButton = document.getElementById(\"deleteButton\");
        if (existingDeleteButton) {
            existingDeleteButton.remove(); // Remove the existing Delete button
        }

        // create the delete button and add it to the parent class
        var deleteButton = document.createElement(\"button\");
        deleteButton.id = \"deleteButton\"; // Assign a unique ID to the button
        deleteButton.className = \"red-button\"; // Add the desired class for styling
        deleteButton.type = \"button\";
        deleteButton.innerText = \"Delete\";


        //the idea is to add the id of the service to the form so we can use it to update the service, remove it everytime otherwise we will have duplicate id key

        var existingHiddenInput = document.querySelector(\"input[name='id']\");
        if (existingHiddenInput) {
            existingHiddenInput.remove();
        }

        //add the hidden id to the form so it can be used to update
        var hiddenIdInput = document.createElement(\"input\");
        hiddenIdInput.type = \"hidden\";
        hiddenIdInput.name = \"id\";
        hiddenIdInput.value = cells[0].innerText;

        //functionality to call delete service
        deleteButton.onclick = function () {
            deleteService(cells[0].innerText); // Call deleteService function when clicked
        };

        //add child to parent 
        document.getElementById(\"serviceForm\").appendChild(hiddenIdInput);
        document.getElementById(\"serviceForm\").appendChild(deleteButton);
        var modal = document.getElementById(\"serviceFormModal\");
        //close the form
        modal.style.display = \"block\";
    }


    //this function is called when the delete button is clicked to delete the service
    function deleteService(id) {
        //confirms with the staff if they are ready to delete the selected service
        if (!confirm(\"Are you sure you want to delete this service?\")) {
            modal.style.display = \"none\";
            return;
        }
        //create form data to send to the server
        const formData = new FormData();
        formData.append(\"id\", id);
        //post request to delre service
        fetch('/staffportal/service/delete', {
            method: 'POST',
            body: formData,
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert(data.success);
                    searchServiceByDate();
                } else {
                    alert(data.success);
                }

            })
            .catch(error => {
                console.error('Error:', error);
            });
        searchServiceByDate();
        fetchAndPopulateTable();
        modal.style.display = \"none\";

    }

    //function to search for services by date, helps to filter the services by date for the assigned table
    function searchServiceByDate() {
        date = document.getElementById(\"servicedate\").value;
        if (date == \"\") {
            date = \"false\";
        }

        fetch(`/staffportal/service/update?date=\${encodeURIComponent(date)}`, {
            method: 'GET',
        })
            .then(response => response.json())
            .then(data => {
                var tableBody = document.getElementById(\"serviceListBody\");

                // Clear the current rows in the table (optional)
                tableBody.innerHTML = '';

                // Loop through the returned data and create new rows dynamically
                data.forEach(service => {
                    var row = document.createElement(\"tr\");
                    row.innerHTML = `
            <td class=\"id-data\">\${service.id}</td>
            <td>\${service.service}</td>
            <td>\${service.service_date}</td>
            <td>\${service.time_start}</td>
            <td>\${service.time_end}</td>
            <td>\${service.tables_available}</td>
            <td>\${service.tables_booked}</td>
            <td>\${service.service_status}</td>
            <td><button class=\"amend-button\" onclick=\"amendService(this)\" type=\"button\">Amend</button></td>
        `;
                    // Append the new row to the table body
                    tableBody.appendChild(row);
                });

            })
            .catch(error => {
                console.error('Error:', error);
            });

    }

    //function to clear the date filter and display all aviailable services
    function clearDate() {
        document.getElementById(\"servicedate\").value = \"\";
        searchServiceByDate();
    }



    // Handle form submission for adding services
    document.getElementById(\"serviceForm\").addEventListener(\"submit\", function (e) {
        e.preventDefault();
        const formData = new FormData(this);
        //check if button text is submit or update
        var submitBtn = document.querySelector(\"button[type='submit']\");
        //remove the id from the from data as its not required for inserting into db
        console.log(submitBtn.innerText);
        if (submitBtn.innerText == \"Submit\") {
            formData.delete(\"id\");

        }

        //call to post data
        fetch('/staffportal/service/add', {
            method: 'POST',
            body: formData,
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert(data.success);

                } else {
                    alert(data.success);
                }

            })
            .catch(error => {
                console.error('Error:', error);
            });

        // Close the modal after form submission
        searchServiceByDate();
        fetchAndPopulateTable();
        document.querySelector(\"h2\").innerText = \"Update Service\";
        document.querySelector(\"button[type='submit']\").innerText = \"Update\";
        modal.style.display = \"none\";

    });

    //handle default form submission to update the default services provided 
    document.getElementById(\"defaultServiceForm\").addEventListener(\"submit\", function (e) {
        //prevent default form submission
        e.preventDefault();
        //create form data to send to the server
        const formData = new FormData(this);
        //post request to service
        fetch('/staffportal/service/defaultform', {
            method: 'POST',
            body: formData,
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    //required as the user should know  if the service was added or not
                    alert(data.success);
                } else {
                    alert(data.success);
                }

            })
            .catch(error => {
                console.error('Error:', error);
            });

        // Close the modal after form submission
        defaultModal.style.display = \"none\";

    });

    // Get the modal and button to open it
    var modal = document.getElementById(\"serviceFormModal\");
    var openBtn = document.getElementById(\"openFormBtn\");
    var closeBtn = document.getElementsByClassName(\"close-btn\")[0];
    const dateSelected = document.getElementById(\"servicedate\");

    //opens the default form modal for services setup
    var defaultModal = document.getElementById(\"defaultFormModal\");
    var openDefaultBtn = document.getElementById(\"openFormdefault\");
    var closeDefaultBtn = document.getElementById(\"closebtndefault\");

    // Open the modal when the button is clicked
    openBtn.onclick = function () {
        modal.style.display = \"block\";
        //cchange heaidng and button text
        document.querySelector(\"h2\").innerText = \"Create Service\";
        document.querySelector(\"button[type='submit']\").innerText = \"Submit\";
    }

    // Close the modal when the close button is clicked
    closeBtn.onclick = function () {
        modal.style.display = \"none\";
        document.querySelector(\"h2\").innerText = \"Update Service\";
        document.querySelector(\"button[type='submit']\").innerText = \"Update\";
        var existingDeleteButton = document.getElementById(\"deleteButton\");
        if (existingDeleteButton) {
            existingDeleteButton.remove();
        }

    }

    openDefaultBtn.onclick = function () {
        defaultModal.style.display = \"block\";
    }

    closeDefaultBtn.onclick = function () {
        defaultModal.style.display = \"none\";
    }

    // Close the modal if the user clicks anywhere outside the modal
    window.onclick = function (event) {
        if (event.target == modal) {
            defaultModal.style.display = \"none\";
            document.querySelector(\"h2\").innerText = \"Update Service\";
            document.querySelector(\"button[type='submit']\").innerText = \"Update\";
            modal.style.display = \"none\";
            var existingDeleteButton = document.getElementById(\"deleteButton\");
            if (existingDeleteButton) {
                existingDeleteButton.remove(); // Remove the existing Delete button
            }

        }
    }

    dateSelected.addEventListener(\"change\", function () {
        searchServiceByDate();
    });

</script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "staffportal/ServiceManagement.html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  347 => 211,  302 => 168,  292 => 164,  288 => 163,  284 => 162,  280 => 161,  276 => 160,  272 => 159,  268 => 158,  264 => 157,  261 => 156,  257 => 155,  228 => 128,  219 => 125,  215 => 124,  211 => 123,  207 => 122,  202 => 120,  196 => 119,  192 => 118,  185 => 116,  181 => 115,  176 => 113,  172 => 112,  169 => 111,  165 => 110,  108 => 55,  106 => 54,  82 => 32,  80 => 31,  59 => 13,  50 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{{pagetitle}}</title>
    <link rel=\"stylesheet\" href=\"/public/css/staffportalhub.css\">
</head>

<body>

    {{ include('/staffportal/header.html') }}
    <main>
        <h1 class=\"\">Service Management</h1>

        <!-- Helper section to assist staff provides overview for the tables  -->
        <section class=\"story\">
            <h3>Assigned Services</h3>
            <p style=\"font-size: 1.1em; line-height: 1.6; color: #333;\"></p>
            This section displays the services assigned to the selected date. Use the \"Amend\" button to update service
            details. To view all services, clear the filter. To view services for a specific date, select a date from
            the calendar. To add Service click on 'Add Service' </p>
        </section>


        <!-- Section to filter the tables, clear the table, add new services and amend the default services form -->
        <section class=\"filter-section\">

            <label for=\"service-date\">Selected Date:</label>
            <input class=\"selecteddate\" type=\"date\" id=\"servicedate\" name=\"service-date\" value=\"{{ \" now\" |
                date(\"Y-m-d\") }}\">

            <button class=\"red-button\" type=\"button\" onclick=\"clearDate()\">Clear Filter</button>
            <button class=\"red-button\" type=\"button\" id=\"openFormdefault\">Setup Default Form</button>

            <button style=\"float: right;\" class=\"red-button\" id=\"openFormBtn\">Add Service</button>

        </section>


        <!-- Section for pop up form to add services for a particular date with their start, end times alongside with all the other information required for service setup -->
        <section>
            <div id=\"serviceFormModal\" class=\"modal\">
                <div class=\"modal-content\">
                    <span class=\"close-btn\">&times;</span>
                    <h2>Create Service</h2>

                    <!-- form to add service  -->
                    <form id=\"serviceForm\">
                        <div>
                            <label for=\"service-date\">Service Date:</label>
                            <!-- sets the current day to filter by -->
                            <input type=\"date\" id=\"service-date\" name=\"service-date\" value=\"{{ \" now\" | date(\"Y-m-d\")
                                }}\" required>
                        </div>
                        <!-- drop down option to select which service you would like to add -->
                        <div>
                            <label for=\"service\">Service Status:</label>
                            <select id=\"service\" name=\"service\" required>
                                <option value=\"Breakfast\">Breakfast</option>
                                <option value=\"Lunch\">Lunch</option>
                                <option value=\"Dinner\">Dinner</option>
                            </select>
                        </div>
                        <!-- start time -->
                        <div>
                            <label for=\"time-start\">Start Time:</label>
                            <input type=\"time\" id=\"time-start\" name=\"time-start\" required>
                        </div>
                        <!-- end time -->
                        <div>
                            <label for=\"time-end\">End Time:</label>
                            <input type=\"time\" id=\"time-end\" name=\"time-end\" required>
                        </div>
                        <!-- tables min is 1 and has to be a number -->
                        <div>
                            <label for=\"tables-available\">Tables Available:</label>
                            <input type=\"number\" id=\"tables-available\" name=\"tables-available\" min=\"1\" required>
                        </div>
                        <!-- drop down to select option for service status -->
                        <div>
                            <label for=\"service-status\">Service Status:</label>
                            <select id=\"service-status\" name=\"service-status\" required>
                                <option value=\"available\">Available</option>
                                <option value=\"fully booked\">Fully Booked</option>
                                <option value=\"closed\">Closed</option>
                            </select>
                        </div>
                        <!-- buttomn to submit -->
                        <button class=\"red-button\" type=\"submit\">Submit</button>



                    </form>
                </div>
            </div>
        </section>


        <!-- Section for pop up form to setup default services for the staff to use  twig used to prepopulate the form with existing defualt services data-->
        <section>
            <div id=\"defaultFormModal\" class=\"modal\">
                <div class=\"modal-content\">
                    <span id=\"closebtndefault\" class=\"close-btn\">&times;</span>
                    <h2>Setup Default Service</h2>

                    <!-- Form to Setup Default Service -->
                    <form id=\"defaultServiceForm\">
                        {% for service in default_services %}
                        <div>
                            <h3>{{ service.service }}</h3>
                            <label for=\"{{ service.service }}-time-start\">Start Time:</label>

                            <input type=\"time\" id=\"{{ service.service }}-time-start\"
                                name=\"{{ service.service }}-time-start\" value=\"{{service.time_start}}\" required>

                            <label for=\"{{ service.service }}-time-end\">End Time:</label>
                            <input type=\"time\" id=\"{{ service.service }}-time-end\" name=\"{{ service.service }}-time-end\"
                                value=\"{{service.time_end}}\" required>

                            <label for=\"{{ service.service }}-tables-available\">Tables Available:</label>
                            <input type=\"number\" id=\"{{ service.service }}-tables-available\"
                                name=\"{{ service.service }}-tables-available\" min=\"1\"
                                value=\"{{service.tables_available}}\" required>
                        </div>
                        {% endfor %}

                        <button class=\"red-button\" type=\"submit\">Submit</button>
                    </form>
                </div>
            </div>
        </section>


        <!-- Table to display assigned services alongside a button which will allow you to amend a specific service updates in real time -->
        <section style=\"max-height: 500px; overflow-y: auto;\">
            <table>
                <thead>
                    <!-- headings -->
                    <tr>
                        <th class=\"id-heading\">ID</th>
                        <th>Service</th>
                        <th>Service Date</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Total Tables</th>
                        <th>Tables Booked</th>
                        <th>Status</th>
                        <th>Amend</th>
                    </tr>
                </thead>
                <!-- body of table for data fetched initially loaded by twig -->
                <tbody id=\"serviceListBody\">
                    {% for service in servicelist %}
                    <tr id=\"service-row\">
                        <td class=\"id-data\">{{ service.id }}</td>
                        <td>{{ service.service }}</td>
                        <td>{{ service.service_date }}</td>
                        <td>{{ service.time_start }}</td>
                        <td>{{ service.time_end }}</td>
                        <td>{{ service.tables_available }}</td>
                        <td>{{ service.tables_booked }}</td>
                        <td>{{ service.service_status }}</td>
                        <td><button class=\"amend-button\" onclick=\"amendService(this)\" type=\"button\">Amend</button></td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </section>


        <!-- Helper section to assist staff provides overview for unassigned table  -->
        <section class=\"story\">
            <h3>Unassigned Services</h3>

            <p>
                This section provides an overview of each day starting from the current date, indicating whether
                services have been assigned. It offers a quick and clear status update for convenience. The
                <strong>\"Assign Default\"</strong> button allows you to quickly assign default services for a specific
                day. The form for configuring default services can be found above. <strong>Note:</strong> <strong>This
                    action will not override any existing services</strong>, so you can use it without concern.
            </p>

        </section>


        <!-- Table to display unassigned services with a load more button to dispaly 7 more days -->
        <section style=\"max-height: 500px; overflow-y: auto;\">

            <table id=\"service-table\">
                <thead>
                    <tr>
                        <th>Service Date</th>
                        <th>Breakfast</th>
                        <th>Lunch</th>
                        <th>Dinner</th>
                        <th>Assign Default</th>
                    </tr>
                </thead>
                <tbody id=\"table-body\">

                </tbody>


            </table>

        </section>
        <button style=\"margin-bottom: 10px;\" class=\"red-button\" onclick=\"loadMoreDates()\">Load More</button>
    </main>
    {{ include('/staffportal/footer.html') }}
</body>

</html>

<script>
    //function to format the date to a string
    function formatDate(date) {
        return date.toISOString().split('T')[0];
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
        const tableBody = document.getElementById('table-body');
        const today = new Date();
        const futureDates = getFutureDates(today, dateIndex);

        tableBody.innerHTML = '';
        //iterate through the dates and check if the services are available or not
        futureDates.forEach(date => {
            const breakfast = services.find(item => item.service_date === date && item.service === \"Breakfast\");
            const lunch = services.find(item => item.service_date === date && item.service === \"Lunch\");
            const dinner = services.find(item => item.service_date === date && item.service === \"Dinner\");

            const row = document.createElement('tr');
            // add row to the table according to if the date is seen, it will set to avaiable and if not it will set to unavaiable with green and red colours button added to assign default services later. 
            row.innerHTML = `
            <td>\${date}</td>
            <td style=\"color: \${breakfast ? (breakfast.service_status === 'available' ? 'green' : 'red') : 'red'}\">
                \${breakfast ? breakfast.service_status : 'Unavailable'}
            </td>
            <td style=\"color: \${lunch ? (lunch.service_status === 'available' ? 'green' : 'red') : 'red'}\">
                \${lunch ? lunch.service_status : 'Unavailable'}
            </td>
            <td style=\"color: \${dinner ? (dinner.service_status === 'available' ? 'green' : 'red') : 'red'}\">
                \${dinner ? dinner.service_status : 'Unavailable'}
            </td>
            <td><button type=\"button\" onclick=\"assignDefaultServices(this)\">  Assign Default</button></td>
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
            const response = await fetch('/staffportal/service/all', {
                method: 'GET',
            });
            const data = await response.json();
            return data;
        } catch (error) {
            console.error('Error:', error);
        }
    }

    //function to assign default services to the selected date from the row
    function assignDefaultServices(row) {
        //get date from the row selected
        date = row.parentElement.parentElement.children[0].innerText;
        //create form data to send to the server
        const formData = new FormData();
        formData.append(\"date\", date);
        //post request to assign default services
        fetch('/staffportal/service/assigndefault', {
            method: 'POST',
            body: formData,
        })
            //check if the response is successful or not
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert(data.success);
                    fetchAndPopulateTable();
                    searchServiceByDate();
                } else {
                    alert(data.error);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }

    //function to amend the service updates the form.
    function amendService(button) {
        //change the appearance of the form to coresspond to the amend action so we dont have to create a new form. 
        var row = button.parentElement.parentElement;
        var cells = row.getElementsByTagName(\"td\");
        document.querySelector(\"h2\").innerText = \"Update Service\";
        document.querySelector(\"button[type='submit']\").innerText = \"Update\";
        // Populate the form with the values from the selected row
        document.getElementById(\"service-date\").value = cells[2].innerText;
        document.getElementById(\"service\").value = cells[1].innerText;
        document.getElementById(\"time-start\").value = cells[3].innerText;
        document.getElementById(\"time-end\").value = cells[4].innerText;
        document.getElementById(\"tables-available\").value = cells[5].innerText;
        document.getElementById(\"service-status\").value = cells[7].innerText;


        //check if there is a delete button already and remove it so we dont override
        var existingDeleteButton = document.getElementById(\"deleteButton\");
        if (existingDeleteButton) {
            existingDeleteButton.remove(); // Remove the existing Delete button
        }

        // create the delete button and add it to the parent class
        var deleteButton = document.createElement(\"button\");
        deleteButton.id = \"deleteButton\"; // Assign a unique ID to the button
        deleteButton.className = \"red-button\"; // Add the desired class for styling
        deleteButton.type = \"button\";
        deleteButton.innerText = \"Delete\";


        //the idea is to add the id of the service to the form so we can use it to update the service, remove it everytime otherwise we will have duplicate id key

        var existingHiddenInput = document.querySelector(\"input[name='id']\");
        if (existingHiddenInput) {
            existingHiddenInput.remove();
        }

        //add the hidden id to the form so it can be used to update
        var hiddenIdInput = document.createElement(\"input\");
        hiddenIdInput.type = \"hidden\";
        hiddenIdInput.name = \"id\";
        hiddenIdInput.value = cells[0].innerText;

        //functionality to call delete service
        deleteButton.onclick = function () {
            deleteService(cells[0].innerText); // Call deleteService function when clicked
        };

        //add child to parent 
        document.getElementById(\"serviceForm\").appendChild(hiddenIdInput);
        document.getElementById(\"serviceForm\").appendChild(deleteButton);
        var modal = document.getElementById(\"serviceFormModal\");
        //close the form
        modal.style.display = \"block\";
    }


    //this function is called when the delete button is clicked to delete the service
    function deleteService(id) {
        //confirms with the staff if they are ready to delete the selected service
        if (!confirm(\"Are you sure you want to delete this service?\")) {
            modal.style.display = \"none\";
            return;
        }
        //create form data to send to the server
        const formData = new FormData();
        formData.append(\"id\", id);
        //post request to delre service
        fetch('/staffportal/service/delete', {
            method: 'POST',
            body: formData,
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert(data.success);
                    searchServiceByDate();
                } else {
                    alert(data.success);
                }

            })
            .catch(error => {
                console.error('Error:', error);
            });
        searchServiceByDate();
        fetchAndPopulateTable();
        modal.style.display = \"none\";

    }

    //function to search for services by date, helps to filter the services by date for the assigned table
    function searchServiceByDate() {
        date = document.getElementById(\"servicedate\").value;
        if (date == \"\") {
            date = \"false\";
        }

        fetch(`/staffportal/service/update?date=\${encodeURIComponent(date)}`, {
            method: 'GET',
        })
            .then(response => response.json())
            .then(data => {
                var tableBody = document.getElementById(\"serviceListBody\");

                // Clear the current rows in the table (optional)
                tableBody.innerHTML = '';

                // Loop through the returned data and create new rows dynamically
                data.forEach(service => {
                    var row = document.createElement(\"tr\");
                    row.innerHTML = `
            <td class=\"id-data\">\${service.id}</td>
            <td>\${service.service}</td>
            <td>\${service.service_date}</td>
            <td>\${service.time_start}</td>
            <td>\${service.time_end}</td>
            <td>\${service.tables_available}</td>
            <td>\${service.tables_booked}</td>
            <td>\${service.service_status}</td>
            <td><button class=\"amend-button\" onclick=\"amendService(this)\" type=\"button\">Amend</button></td>
        `;
                    // Append the new row to the table body
                    tableBody.appendChild(row);
                });

            })
            .catch(error => {
                console.error('Error:', error);
            });

    }

    //function to clear the date filter and display all aviailable services
    function clearDate() {
        document.getElementById(\"servicedate\").value = \"\";
        searchServiceByDate();
    }



    // Handle form submission for adding services
    document.getElementById(\"serviceForm\").addEventListener(\"submit\", function (e) {
        e.preventDefault();
        const formData = new FormData(this);
        //check if button text is submit or update
        var submitBtn = document.querySelector(\"button[type='submit']\");
        //remove the id from the from data as its not required for inserting into db
        console.log(submitBtn.innerText);
        if (submitBtn.innerText == \"Submit\") {
            formData.delete(\"id\");

        }

        //call to post data
        fetch('/staffportal/service/add', {
            method: 'POST',
            body: formData,
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert(data.success);

                } else {
                    alert(data.success);
                }

            })
            .catch(error => {
                console.error('Error:', error);
            });

        // Close the modal after form submission
        searchServiceByDate();
        fetchAndPopulateTable();
        document.querySelector(\"h2\").innerText = \"Update Service\";
        document.querySelector(\"button[type='submit']\").innerText = \"Update\";
        modal.style.display = \"none\";

    });

    //handle default form submission to update the default services provided 
    document.getElementById(\"defaultServiceForm\").addEventListener(\"submit\", function (e) {
        //prevent default form submission
        e.preventDefault();
        //create form data to send to the server
        const formData = new FormData(this);
        //post request to service
        fetch('/staffportal/service/defaultform', {
            method: 'POST',
            body: formData,
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    //required as the user should know  if the service was added or not
                    alert(data.success);
                } else {
                    alert(data.success);
                }

            })
            .catch(error => {
                console.error('Error:', error);
            });

        // Close the modal after form submission
        defaultModal.style.display = \"none\";

    });

    // Get the modal and button to open it
    var modal = document.getElementById(\"serviceFormModal\");
    var openBtn = document.getElementById(\"openFormBtn\");
    var closeBtn = document.getElementsByClassName(\"close-btn\")[0];
    const dateSelected = document.getElementById(\"servicedate\");

    //opens the default form modal for services setup
    var defaultModal = document.getElementById(\"defaultFormModal\");
    var openDefaultBtn = document.getElementById(\"openFormdefault\");
    var closeDefaultBtn = document.getElementById(\"closebtndefault\");

    // Open the modal when the button is clicked
    openBtn.onclick = function () {
        modal.style.display = \"block\";
        //cchange heaidng and button text
        document.querySelector(\"h2\").innerText = \"Create Service\";
        document.querySelector(\"button[type='submit']\").innerText = \"Submit\";
    }

    // Close the modal when the close button is clicked
    closeBtn.onclick = function () {
        modal.style.display = \"none\";
        document.querySelector(\"h2\").innerText = \"Update Service\";
        document.querySelector(\"button[type='submit']\").innerText = \"Update\";
        var existingDeleteButton = document.getElementById(\"deleteButton\");
        if (existingDeleteButton) {
            existingDeleteButton.remove();
        }

    }

    openDefaultBtn.onclick = function () {
        defaultModal.style.display = \"block\";
    }

    closeDefaultBtn.onclick = function () {
        defaultModal.style.display = \"none\";
    }

    // Close the modal if the user clicks anywhere outside the modal
    window.onclick = function (event) {
        if (event.target == modal) {
            defaultModal.style.display = \"none\";
            document.querySelector(\"h2\").innerText = \"Update Service\";
            document.querySelector(\"button[type='submit']\").innerText = \"Update\";
            modal.style.display = \"none\";
            var existingDeleteButton = document.getElementById(\"deleteButton\");
            if (existingDeleteButton) {
                existingDeleteButton.remove(); // Remove the existing Delete button
            }

        }
    }

    dateSelected.addEventListener(\"change\", function () {
        searchServiceByDate();
    });

</script>", "staffportal/ServiceManagement.html", "/var/www/html/mounted/website/src/Views/staffportal/ServiceManagement.html");
    }
}
