<?php

namespace In3050Inm428WebDev\PhpMvc;

use In3050Inm428WebDev\PhpMvc\Controllers\HomeController;
#staff
use In3050Inm428WebDev\PhpMvc\Controllers\StaffLoginController;
use In3050Inm428WebDev\PhpMvc\Controllers\StaffDashboardController;
use In3050Inm428WebDev\PhpMvc\Controllers\StaffServicesController;
use In3050Inm428WebDev\PhpMvc\Controllers\StaffBookingsController;

#diner
use In3050Inm428WebDev\PhpMvc\Controllers\DinerLoginController;
use In3050Inm428WebDev\PhpMvc\Controllers\DinerHubController;
use In3050Inm428WebDev\PhpMvc\Controllers\DinerReservationController;
use In3050Inm428WebDev\PhpMvc\Controllers\DinerEmailController;

use In3050Inm428WebDev\PhpMvc\Router;


$router = new Router();

$router->get('/', HomeController::class, 'index');
$router->get('/index.php', HomeController::class, 'index');

#staff auth routes
$router->get('/stafflogin', StaffLoginController::class, 'index');
$router->get('/staffsignup', StaffLoginController::class, 'showSignupForm');
$router->get('/stafflogout', StaffLoginController::class, 'staffLogout');
$router->post('/authStaff', StaffLoginController::class, 'checkLoginInput');#
$router->post('/authStaffSignup', StaffLoginController::class, 'createStaffAccount');

# Staff portal route
$router->get('/staffportal', StaffDashboardController::class, 'index');

# Manage service
$router->get('/staffportal/service', StaffServicesController::class, action: 'index');

# Add/updated/delete service 
$router->post('/staffportal/service/add', StaffServicesController::class, action: 'addService');
# fetch service by date
$router->get('/staffportal/service/update', StaffServicesController::class, action: 'fetchServicesByDate');
# fetch all services
$router->get('/staffportal/service/all', StaffServicesController::class, action: 'fetchLatestService');
# delete service
$router->post('/staffportal/service/delete', StaffServicesController::class, action: 'deleteService');

# update the default service form
$router->post('/staffportal/service/defaultform', StaffServicesController::class, action: 'submitDefaultForm');
# assign default service
$router->post('/staffportal/service/assigndefault', StaffServicesController::class, action: 'addDefaultServices');
#end of manage service

# Diner login routes
$router->get('/login', DinerLoginController::class, 'index');
$router->get('/register', DinerLoginController::class, 'register');
$router->get('/dinerlogout', DinerLoginController::class, 'dinerLogout');
$router->post('/authDinerSignup', DinerLoginController::class, 'authDinerSignup');
$router->post('/authDiner', DinerLoginController::class, 'authDinerLogin');

# Diner reservation
$router->get('/reservation/getservices', DinerReservationController::class, 'getServicesByDate');

$router->get('/reservation/getServicetimes', DinerReservationController::class, 'getServiceTimes');

$router->post('/reservation/create', DinerReservationController::class, 'createReservation');
$router->get('/reservation', DinerReservationController::class, 'index');
#Diner hub
$router->get('/dinerhub', DinerHubController::class, 'index');


#emails
$router->get('/reservationmail', DinerEmailController::class, 'index');

#change password
$router->get('/changepassword', DinerLoginController::class, 'changePasswordPage');
$router->post('/sendotp', DinerLoginController::class, 'sendOtp');
$router->post('/checkotp', DinerLoginController::class, 'checkotp');
$router->post('/authchangepass', DinerLoginController::class, 'updatePassword');


#Staff bookings_list
$router->get('/staffportal/bookings', StaffBookingsController::class, 'index');
$router->dispatch();

?>