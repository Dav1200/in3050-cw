<?php

namespace In3050Inm428WebDev\PhpMvc;

use In3050Inm428WebDev\PhpMvc\Controllers\HomeController;
use In3050Inm428WebDev\PhpMvc\Controllers\ReservationController;
use In3050Inm428WebDev\PhpMvc\Controllers\StaffLoginController;
use In3050Inm428WebDev\PhpMvc\Controllers\StaffDashboardController;
use In3050Inm428WebDev\PhpMvc\Controllers\ManageServiceController;

use In3050Inm428WebDev\PhpMvc\Controllers\DinerLoginController;
use In3050Inm428WebDev\PhpMvc\Controllers\DinerHubController;
use In3050Inm428WebDev\PhpMvc\Controllers\EmailController;
use In3050Inm428WebDev\PhpMvc\Controllers\StaffBookingsController;
use In3050Inm428WebDev\PhpMvc\Router;


$router = new Router();

$router->get('/', HomeController::class, 'index');
$router->get('/index.php', HomeController::class, 'index');

$router->get('/reservation', ReservationController::class, 'index');

$router->get('/stafflogin', StaffLoginController::class, 'index');
# Sign up initially
$router->get('/staffsignup', StaffLoginController::class, 'showSignupForm');

$router->get('/stafflogout', StaffLoginController::class, 'staffLogout');

$router->post('/authStaff', StaffLoginController::class, 'checkLoginInput');#

$router->post('/authStaffSignup', StaffLoginController::class, 'createStaffAccount');

# Staff portal
$router->get('/staffportal', StaffDashboardController::class, 'index');




# Manage service
$router->get('/staffportal/service', ManageServiceController::class, action: 'index');

# Add/updated/delete service 
$router->post('/staffportal/service/add', ManageServiceController::class, action: 'addService');
# fetch service by date
$router->get('/staffportal/service/update', ManageServiceController::class, action: 'fetchServicesByDate');
# fetch all services
$router->get('/staffportal/service/all', ManageServiceController::class, action: 'fetchLatestService');
# delete service
$router->post('/staffportal/service/delete', ManageServiceController::class, action: 'deleteService');

# update the default service form
$router->post('/staffportal/service/defaultform', ManageServiceController::class, action: 'submitDefaultForm');
# assign default service
$router->post('/staffportal/service/assigndefault', ManageServiceController::class, action: 'addDefaultServices');
#end of manage service




# Diner login
$router->get('/login', DinerLoginController::class, 'index');
$router->get('/register', DinerLoginController::class, 'register');
$router->get('/dinerlogout', DinerLoginController::class, 'dinerLogout');
$router->post('/authDinerSignup', DinerLoginController::class, 'authDinerSignup');
$router->post('/authDiner', DinerLoginController::class, 'authDinerLogin');

# Diner reservation
$router->get('/reservation/getservices', ReservationController::class, 'getServicesByDate');

$router->get('/reservation/getServicetimes', ReservationController::class, 'getServiceTimes');

$router->post('/reservation/create', ReservationController::class, 'createReservation');

#Diner hub
$router->get('/dinerhub', DinerHubController::class, 'index');


#emails
$router->get('/reservationmail', EmailController::class, 'index');

#change password

$router->get('/changepassword', DinerLoginController::class, 'changePasswordPage');
$router->post('/sendotp', DinerLoginController::class, 'sendOtp');
$router->post('/checkotp', DinerLoginController::class, 'checkotp');
$router->post('/authchangepass', DinerLoginController::class, 'updatePassword');


#Staff bookings_list
$router->get('/staffportal/bookings', StaffBookingsController::class, 'index');
$router->dispatch();

?>