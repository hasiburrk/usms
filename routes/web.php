<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.users.login-from');
});
//user type start
Route::get('/user-type',[
    'uses'=>'UserTypeController@index',
    'as'=>'user-type'
]);
Route::post('/user-type-add',[
    'uses'=>'UserTypeController@userTypeAdd',
    'as'=>'user-type-add'
]);
Route::get('/user-type-list',[
    'uses'=>'UserTypeController@userTypeList',
    'as'=>'user-type-list'
]);
Route::get('/user-type-unpublish',[
    'uses'=>'UserTypeController@userTypeUnpublish',
    'as'=>'user-type-unpublish'
]);
Route::get('/user-type-publish',[
    'uses'=>'UserTypeController@userTypePublish',
    'as'=>'user-type-publish'
]);
Route::post('/user-type-update',[
    'uses'=>'UserTypeController@userTypeUpdate',
    'as'=>'user-type-update'
]);

Route::get('/user-type-delete',[
    'uses'=>'UserTypeController@userTypeDelete',
    'as'=>'user-type-delete'
]);
Route::get('/bring-department',[
    'uses'=>'UserTypeController@bringDepartment',
    'as'=>'bring-department'
]);


//user type end


Route::get('/user-registration',[
'uses'=>'UserRegistrationController@showRegistrationForm',
'as'=>'user-registration'
])->middleware('auth');

Route::post('/user-registration',[
    'uses'=>'UserRegistrationController@userSave',
    'as'=>'user-save'
    ]);

    Route::get('/user-list',[
        'uses'=>'UserRegistrationController@userList',
        'as'=>'user-list'
        ])->middleware('auth');

     Route::get('/user-profile/{userId}',[
        'uses'=>'UserRegistrationController@userProfile',
        'as'=>'user-profile'
         ])->middleware('auth');

        Route::get('/change-user-info/{id}',[
        'uses'=>'UserRegistrationController@changeUserInfo',
        'as'=>'change-user-info'
         ])->middleware('auth');

         Route::post('/user-info-update',[
            'uses'=>'UserRegistrationController@userInfoUpdate',
            'as'=>'user-info-update'
         ])->middleware('auth');

        Route::get('/change-user-avatar/{id}',[
        'uses'=>'UserRegistrationController@changeUserAvatar',
        'as'=>'change-user-avatar'
        ])->middleware('auth');

        Route::post('/update-user-photo',[
            'uses'=>'UserRegistrationController@updateUserPhoto',
            'as'=>'update-user-photo'
         ])->middleware('auth');

        Route::get('/change-user-password/{id}',[
            'uses'=>'UserRegistrationController@changeUserPassword',
            'as'=>'change-user-password'
        ])->middleware('auth');

        Route::post('/user-password-update',[
            'uses'=>'UserRegistrationController@userPasswordUpdate',
            'as'=>'user-password-update'
        ])->middleware('auth');

        //genearal section
        Route::get('/add-header-footer',[
            'uses'=>'HomePageController@addHeaderFooterForm',
            'as'=>'add-header-footer'
        ]);

        Route::post('/add-header-footer',[
            'uses'=>'HomePageController@headerAndFooterSave',
            'as'=>'header-and-footer-save'
        ]);

        Route::get('/manage-header-footer/{id}',[
            'uses'=>'HomePageController@manageHeaderFooter',
            'as'=>'manage-header-footer'
        ]);

        Route::post('/header-and-footer-update',[
            'uses'=>'HomePageController@headerAndFooterUpdate',
            'as'=>'header-and-footer-update'
        ]);

        // genearal section end

        // slider section start
        Route::get('/add-slide',[
            'uses'=>'SliderController@addSlide',
            'as'=>'add-slide'
        ]);

        Route::post('/add-slide',[
            'uses'=>'SliderController@uploadSlide',
            'as'=>'upload-slide'
        ]);

        Route::get('/manage-slide',[
            'uses'=>'SliderController@manageSlide',
            'as'=>'manage-slide'
        ]);

        Route::get('/slide-unpublished/{id}',[
            'uses'=>'SliderController@slideUnpublished',
            'as'=>'slide-unpublished'
        ]);

        Route::get('/slide-published/{id}',[
            'uses'=>'SliderController@slidePublished',
            'as'=>'slide-published'
        ]);

        Route::get('/photo-gallery',[
            'uses'=>'SliderController@photoGallery',
            'as'=>'photo-gallery'
        ]);

        Route::get('/slide-edit/{id}',[
            'uses'=>'SliderController@slideEdit',
            'as'=>'slide-edit'
        ]);

        Route::post('/update-slide',[
            'uses'=>'SliderController@updateSlide',
            'as'=>'update-slide'
        ]);

        Route::get('/slide-delete/{id}',[
            'uses'=>'SliderController@slideDelete',
            'as'=>'slide-delete'
        ]);


        // slider section end

        // Faculty Management Start

        Route::get('/add-faculty',[
             'uses'=>'FacultyManagementController@addFaculty',
             'as'=>'add-faculty'
        ]);

        Route::post('/faculty-save',[
            'uses'=>'FacultyManagementController@facultySave',
            'as'=>'faculty-save'
        ]);
        Route::get('/faculty-list',[
            'uses'=>'FacultyManagementController@facultyList',
            'as'=>'faculty-list'
        ]);
        Route::get('/faculty-unpublished/{id}',[
            'uses'=>'FacultyManagementController@facultyUnpublished',
            'as'=>'faculty-unpublished'
        ]);

        Route::get('/faculty-published/{id}',[
            'uses'=>'FacultyManagementController@facultyPublished',
            'as'=>'faculty-published'
        ]);

        Route::get('/faculty-edit/{id}',[
            'uses'=>'FacultyManagementController@facultyEditForm',
            'as'=>'faculty-edit'
        ]);

        Route::post('/faculty-update',[
            'uses'=>'FacultyManagementController@facultyUpdate',
            'as'=>'faculty-update'
        ]);

        Route::get('/faculty-delete/{id}',[
            'uses'=>'FacultyManagementController@facultyDelete',
            'as'=>'faculty-delete'
        ]);

        // Faculty Management End

        // Department Management start

        Route::get('/add-department',[
            'uses'=>'DepartmentController@addDepartment',
            'as'=>'add-department'
       ]);
       Route::post('/department-save',[
        'uses'=>'DepartmentController@departmentSave',
        'as'=>'department-save'
       ]);
       Route::get('/department-list',[
        'uses'=>'DepartmentController@departmentList',
        'as'=>'department-list'
       ]);
       Route::get('/department-list-by-ajax',[
        'uses'=>'DepartmentController@departmentListByAjax',
        'as'=>'department-list-by-ajax'
       ]);

       Route::get('/department-unpublished',[
        'uses'=>'DepartmentController@departmentUnpublished',
        'as'=>'department-unpublished'
    ]);

    Route::get('/department-published',[
        'uses'=>'DepartmentController@departmentPublished',
        'as'=>'department-published'
    ]);

    Route::get('/department-delete',[
        'uses'=>'DepartmentController@departmentDelete',
        'as'=>'department-delete'
    ]);

    Route::get('/department-edit/{id}',[
        'uses'=>'DepartmentController@departmentEdit',
        'as'=>'department-edit'
    ]);

    Route::post('/department-update',[
        'uses'=>'DepartmentController@departmentUpdate',
        'as'=>'department-update'
    ]);

  // Department Management End

  // Session Management Start

  Route::get('/add-session',[
    'uses'=>'SessionController@addSession',
    'as'=>'add-session'
  ]);

  Route::post('/session-save',[
    'uses'=>'SessionController@sessionSave',
    'as'=>'session-save'
  ]);
  Route::get('/session-list',[
    'uses'=>'SessionController@sessionList',
    'as'=>'session-list'
]);

Route::get('/session-unpublished/{id}',[
    'uses'=>'SessionController@sessionUnpublished',
    'as'=>'session-unpublished'
]);

Route::get('/session-published/{id}',[
    'uses'=>'SessionController@sessionPublished',
    'as'=>'session-published'
]);

Route::get('/session-edit/{id}',[
    'uses'=>'SessionController@sessionEditForm',
    'as'=>'session-edit'
]);

Route::post('/session-update',[
    'uses'=>'SessionController@sessionUpdate',
    'as'=>'session-update'
]);

Route::get('/session-delete/{id}',[
    'uses'=>'SessionController@sessionDelete',
    'as'=>'session-delete'
]);

  // Session Management End

  // Level Management Start
  Route::get('/add-level-term',[
    'uses'=>'LevelController@addLevelTerm',
    'as'=>'add-level-term'
  ]);
  Route::post('/level-term-save',[
    'uses'=>'LevelController@levelTermSave',
    'as'=>'level-term-save'
  ]);
  Route::get('/level-term-list',[
    'uses'=>'LevelController@levelTermList',
    'as'=>'level-term-list'
  ]);
  Route::get('/level-term-unpublished/{id}',[
    'uses'=>'LevelController@leveltermUnpublished',
    'as'=>'levelterm-unpublished'
]);

Route::get('/level-term-published/{id}',[
    'uses'=>'LevelController@leveltermPublished',
    'as'=>'levelterm-published'
]);

Route::get('/level-term-edit/{id}',[
    'uses'=>'LevelController@leveltermEditForm',
    'as'=>'levelterm-edit'
]);

Route::post('/level-term-update',[
    'uses'=>'LevelController@leveltermUpdate',
    'as'=>'level-term-update'
]);

Route::get('/level-term-delete/{id}',[
    'uses'=>'LevelController@leveltermDelete',
    'as'=>'levelterm-delete'
]);


  // Level Management End

  // Course Management start
Route::get('/add-course',[
    'uses'=>'CourseController@addCourse',
    'as'=>'add-course'
  ]);
  Route::get('/faculty-wise-department',[
    'uses'=>'CourseController@facultyWiseDepartment',
    'as'=>'faculty-wise-department'
  ]);
  Route::post('/course-save',[
    'uses'=>'CourseController@courseSave',
    'as'=>'course-save'
  ]);
  Route::get('/course-list',[
    'uses'=>'CourseController@courseList',
    'as'=>'course-list'
  ]);
  Route::get('/course-list-by-ajax',[
    'uses'=>'CourseController@courseListByAjax',
    'as'=>'course-list-by-ajax'
]);

Route::get('/course-delete/{id}',[
    'uses'=>'CourseController@courseDelete',
    'as'=>'course-delete'
]);

Route::get('/course-edit/{id}',[
    'uses'=>'CourseController@courseEdit',
    'as'=>'course-edit'
]);

Route::post('/course-update',[
    'uses'=>'CourseController@courseUpdate',
    'as'=>'course-update'
]);

// Course Management End

// Ruotine Management start

Route::get('/add-routine',[
    'uses'=>'RoutineController@addRoutineForm',
    'as'=>'add-routine'
]);
Route::get('/routine',[
    'uses'=>'RoutineController@Routine',
    'as'=>'routine'
]);
Route::get('/levelterm-wise-course',[
    'uses'=>'RoutineController@leveltermWiseCourse',
    'as'=>'levelterm-wise-course'
]);

// Ruotine Management End

// student Management Start

Route::get('/student-registration',[
    'uses'=>'StudentController@studentRegistration',
    'as'=>'student-registration'
]);

Route::post('/student-save',[
    'uses'=>'StudentController@studentSave',
    'as'=>'student-save'
]);

Route::get('/student-list',[
    'uses'=>'StudentController@studentList',
    'as'=>'student-list'
]);

Route::get('/dept-wise-student',[
    'uses'=>'StudentController@deptWiseStudent',
    'as'=>'dept-wise-student'
]);

Route::get('/student-list-by-ajax',[
    'uses'=>'StudentController@studentListByAjax',
    'as'=>'student-list-by-ajax'
]);
Route::get('/session-wise-student',[
    'uses'=>'StudentController@sessionWiseStudent',
    'as'=>'session-wise-student'
]);
Route::get('/session-wise-student-list',[
    'uses'=>'StudentController@sessionWiseStudentList',
    'as'=>'session-wise-student-list'
]);

Route::get('/student-details/{id}',[
    'uses'=>'StudentController@studentDetails',
    'as'=>'student-details'
]);


Route::get('/student-info-update/{id}',[
    'uses'=>'StudentController@studentInfoUpdateForm',
    'as'=>'student-info-update'
]);
Route::post('/student-info-updated',[
    'uses'=>'StudentController@studentInfoUpdate',
    'as'=>'student-info-updated'
]);

Route::get('student-login', 'StudentController@login');
Route::post('student-login', 'StudentController@logged_in');


Route::get('/dept-wise-student-list/{userId}',[
    'uses'=>'StudentController@deptWiseStudentList',
    'as'=>'dept-wise-student-list'
]);

Route::get('/student-delete/{id}',[
    'uses'=>'StudentController@studentDelete',
    'as'=>'student-delete'
]);


// student Management End

//Result Management Start

Route::get('/add-marks',[
    'uses'=>'ResultController@addMarks',
    'as'=>'add-marks'
]);
Route::get('/course-marks/{course_id}',[
    'uses'=>'ResultController@courseMarks',
    'as'=>'course-marks'
]);

Route::get('/student-marks',[
    'uses'=>'ResultController@studentMarks',
    'as'=>'student-marks'
]);

//Result Management End

//Course Assign Teacher start
Route::get('/course-assign/{userId}',[
    'uses'=>'CouseAssignController@courseAssign',
    'as'=>'course-assign'
]);
Route::post('course-assign-save',[
    'uses'=>'CouseAssignController@courseAssignSave',
    'as'=>'course-assign-save'
]);

Route::get('/course-list-by-levelterm',[
    'uses'=>'CouseAssignController@courseListByLevelterm',
    'as'=>'course-list-by-levelterm'
]);

Route::get('/course-assign-list/{userId}',[
    'uses'=>'CouseAssignController@courseAssignList',
    'as'=>'course-assign-list'
]);
//Course Assign Teacher end

// Teacher management start


Route::get('/course-list-by-chairman/{userId}',[
    'uses'=>'TeacherController@courseListByChairman',
    'as'=>'course-list-by-chairman'
]);

Route::get('/teacher-wise-course-list/{userId}',[
    'uses'=>'TeacherController@teacherWiseCourseList',
    'as'=>'teacher-wise-course-list'
]);
// Teacher management end




Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/student-dashboard', 'StudentController@dashboard');
