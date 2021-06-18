<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['testyourself'] = 'wellbeing/testyourself';
$route['testyourself/question/display/(:any)'] = 'questions/questionView/$1';

// $route['testyourself/question/display/'] = 'questions/questionView/$1';
$route['testyourself/question/(:any)/resultDisplay'] = 'questions/resultView/$1';


$route['blogs'] = 'wellbeing/blogs';

$route['experiences'] = 'wellbeing/experiences';

$route['about'] = 'wellbeing/about';

$route['apply'] = 'requests/apply';
$route['sendApplication'] = 'requests/addApp';

$route['request'] = 'requests/request';

$route['sendRequest'] = 'requests/add';

// $route['sendEmail'] = 'users/emailSend';

// $route['approvalMail'] = 'users/sendApprovalEmail';
$route['rejectionMail'] = 'users/rejectionEmail';

$route['main/email_availilibity'] = 'main/email_availibility';
// $route['request/check_email_avalibility'] = 'requests/email_availibility';

$route['contact'] = 'wellbeing/contact';

$route['login'] = 'wellbeing/login';

$route['signup'] = 'users/signup';

// ################# user management : Users Register Login Logout ######################################

$route['user/register'] = 'users/register';
$route['user/login'] = 'users/login';
$route['logout'] = 'users/logout';

// ################# user management : Users Register Login Logout End ######################################

$route['admin/dashboard'] = 'users/dashboard';
$route['admin/profile'] = 'users/profile';

$route['doctor/dashboard'] = 'users/dashboard';
$route['doctor/profile'] = 'users/profile';

$route['blogger/dashboard'] = 'users/dashboard';
$route['blogger/profile'] = 'users/profile';

$route['patient/dashboard'] = 'users/dashboard';
$route['patient/profile'] = 'users/profile';

$route['picture/add'] = 'users/pictureAdd';


// ###################### user management : Users Dashboard ######################################

// ############################# announcement management ######################################

$route['admin/manage/announcement'] = 'announcements/announcementView';

$route['doctor/manage/announcement'] = 'announcements/view';

$route['announcement/add'] = 'announcements/add';
$route['announcement/edit'] = 'announcements/edit';
$route['announcement/delete'] = 'announcements/delete';
$route['announcement/archive'] = 'announcements/archive';
$route['announcement/unarchive'] = 'announcements/unarchive';

// ############################# announcement management --end-- ######################################

// ############################# request management ######################################

$route['admin/manage/request'] = 'requests/requestView';

$route ['admin/manage/request/view_non'] = 'requests/nonLogin';
$route ['admin/manage/request/view_applications'] = 'requests/application';
$route ['admin/manage/request/view_patients'] = 'requests/patient';
$route ['admin/manage/request/view_doctors'] = 'requests/doctor';
$route ['admin/manage/request/view_bloggers'] = 'requests/blogger';

$route['request/delete'] = 'requests/delete';

$route['request/approve'] = 'requests/approve';
$route['request/approveBlogger'] = 'requests/approveBlogger';
$route['request/approvePatient'] = 'requests/approvePatient';

// ############################# request management --end-- ######################################


// ############################# meeting management ######################################

$route['admin/manage/meeting'] = 'meetings/meetingView';

$route['doctor/manage/meeting'] = 'meetings/view';

$route['patient/manage/meeting'] = 'meetings/viewPatient';

$route['admin/manage/meeting/add'] = 'meetings/addView';

$route['admin/manage/meeting/editView'] = 'meetings/editView';

$route['meeting/add'] = 'meetings/add';
$route['meeting/edit'] = 'meetings/edit';

$route['meeting/archive'] = 'meetings/archive';
$route['meeting/unarchive'] = 'meetings/unarchive';

$route['meeting/change'] = 'meetings/change';
$route['meeting/unchange'] = 'meetings/unchange';

$route['meeting/delete'] = 'meetings/delete';

// ############################# meeting management ######################################

// ############################# meeting management ######################################

$route['doctor/manage/medication'] = 'medications/view';
$route['admin/manage/medication'] = 'medications/all';
$route['doctor/manage/medication/add'] = 'medications/addView';
$route['medication/add'] = 'medications/add';
$route['medication/edit'] = 'medications/edit';
$route['medication/archive'] = 'medications/archive';
$route['medication/unarchive'] = 'medications/unarchive';

$route['medication/delete'] = 'medications/delete';

// ############################# meeting management ######################################

// ############################# journal management ######################################

$route['patient/manage/journal/(:any)'] = 'journals/journalView/$1';

$route['journal/add'] = 'journals/add';
// $route['meeting/archive'] = 'meetings/archive';
$route['journal/edit'] = 'journals/edit';
$route['journal/delete'] = 'journals/delete';

// ############################# journal management ######################################

// ############################# blog management ######################################

$route['admin/manage/blog'] = 'blogs/blogView';

$route['blog/view/(:any)'] = 'blogs/blog/$1';

$route['blog/view/category/(:any)'] = 'blogs/blogCategory/$1';

$route['manage/blog/add'] = 'blogs/add';
$route['blog/edit'] = 'blogs/edit';
$route['blog/delete'] = 'blogs/delete';
$route['blog/archive'] = 'blogs/archive';
$route['blog/unarchive'] = 'blogs/unarchive';



$route['blogger/recentBlogs/(:any)'] = 'blogs/recentBlogs/$1';


// ############################# blog management ######################################


$route['admin/manage/qa'] = 'questions/qAView';
$route['doctor/manage/qa'] = 'questions/qAView';

$route['admin/manage/question/display/(:any)'] = 'questions/manageView/$1';
$route['doctor/manage/question/display/(:any)'] = 'questions/manageView/$1';

$route['manage/question/add'] = 'questions/add';

$route['manage/question/edit'] = 'questions/edit';

$route['question/delete'] = 'questions/delete';

$route['blog/delete'] = 'blogs/delete';
$route['blog/archive'] = 'blogs/archive';
$route['blog/unarchive'] = 'blogs/unarchive';


// ############################# experience management ######################################

$route['admin/manage/experience'] = 'experiences/experienceView';

$route['manage/experience/edit'] = 'experiences/edit';
$route['manage/experience/delete'] = 'experiences/delete';
$route['manage/experience/archive'] = 'experiences/archive';
$route['manage/experience/unarchive'] = 'experiences/unarchive';

// ############################# experience management ######################################


// ############################# category management ######################################

$route['admin/manage/category'] = 'categories/categoryView';
$route['category/add'] = 'categories/add';
$route['category/edit'] = 'categories/edit';

$route['category/archive'] = 'categories/archive';
$route['category/unarchive'] = 'categories/unarchive';

$route['category/delete'] = 'categories/delete';

// $route['admin/manage/category/addView'] = 'categories/addView';


// $route['admin/manage/category/editView/(:any)'] = 'categories/editView/$1';
// $route['admin/manage/category/edit/(:any)'] = 'categories/edit/$1';



// ############################# category management --end-- ######################################

$route['admin/manage/appointment'] = 'appointments/appointmentView';
$route['admin/manage/appointment/add'] = 'appointments/addView';
$route['admin/manage/appointment/edit'] = 'appointments/editView';

$route['doctor/manage/appointment'] = 'appointments/view';

$route['appointment/add'] = 'appointments/add';
$route['appointment/edit'] = 'appointments/edit';
$route['appointment/delete'] = 'appointments/delete';
$route['appointment/archive'] = 'appointments/archive';
$route['appointment/unarchive'] = 'appointments/unarchive';

// ############################# user management ######################################

$route['admin/manage/user'] = 'users/userView';
$route ['admin/manage/user/view_doctors'] = 'users/doctor';
$route ['admin/manage/user/view_patients'] = 'users/patient';
$route ['admin/manage/user/view_bloggers'] = 'users/blogger';

$route ['admin/manage/user/doctor/register'] = 'users/sendApprovalEmail';

$route ['user/sendDetail'] = 'users/sendDetail';

$route ['user/deleteS'] = 'users/deleteStaff';

$route ['user/archiveS'] = 'users/archiveStaff';
$route ['user/unarchiveS'] = 'users/unarchiveStaff';

$route ['user/editDoctor'] = 'users/userEditDoctor';

$route ['user/editBlogger'] = 'users/userEditBlogger';

$route ['user/editPatient'] = 'users/userEditPatient';

$route ['user/deleteP'] = 'users/deletePatient';

$route ['user/archiveP'] = 'users/archivePatient';
$route ['user/unarchiveP'] = 'users/unarchivePatient';

// ############################# user management --end-- ######################################

$route['blogger/manage/blogs/(:any)'] = 'blogs/blogsPosted/$1';
$route['blogger/manage/requests/(:any)'] = 'requests/requested/$1';
$route['blogger/manage/experiences/(:any)'] = 'experiences/added/$1';

$route['sendExperience'] = 'experiences/add';


$route['doctor/manage/blogs/(:any)'] = 'blogs/blogsPosted/$1';
$route['doctor/manage/requests/(:any)'] = 'requests/requested/$1';
$route['doctor/manage/experiences/(:any)'] = 'experiences/added/$1';


// ############################# user management : Patient ######################################


// $route['patient/manage/meeting'] = 'users/dashboard';
$route['patient/manage/request/(:any)'] = 'requests/requested/$1';
$route['patient/manage/experience/(:any)'] = 'experiences/added/$1';
$route['patient/manage/appointment'] = 'appointments/patientView';
$route['patient/manage/medication'] = 'medications/viewPatient';
$route['patient/manage/journal'] = 'users/dashboard';

// ############################# user management : Patient --end-- ######################################

$route['default_controller'] = 'wellbeing';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;





