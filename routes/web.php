<?php

use Illuminate\Support\Facades\Route;

//Login Controller 
use App\Http\Controllers\EventController;

use App\Http\Controllers\loginController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\AbsenceController;
use App\Http\Controllers\bigControllerProf;
use App\Http\Controllers\logoutControlller;

// Register Controllers

use App\Http\Controllers\subjectsController;
use App\Http\Controllers\UserNoteController;
use App\Http\Controllers\EventProfController;
use App\Http\Controllers\indexProfController;


//Subjects Controller
use App\Http\Controllers\bigControllerStudent;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\TeachersubjController;
use App\Http\Controllers\indexStudentController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\TeacherNotesController;
use App\Http\Controllers\UserRegisterController;
use App\Http\Controllers\TeacherRegisterController;


Route::get('/', function () {
    return view('welcome');
});

// Login Routes
Route::group(['middleware' => 'guest'], function () {

    
    Route::get('/login', function () {
        return view('login');
    })->name("login");
    Route::post('/login', [LoginController::class, 'LoginPost'])->name('login.post');
    Route::get('/register', [UserRegisterController::class, 'showRegistrationForm'])->name('Sregister');
    Route::post('/register', [UserRegisterController::class, 'registerPost']);
    Route::get('/teacher/register', [TeacherRegisterController::class, 'showRegistrationForm'])->name('Tregister');
    Route::post('/teacher/register', [TeacherRegisterController::class, 'registerPost']);
    Route::get('/teacher/register2/{feildID}', [TeacherRegisterController::class, 'ShowModules'])->name('T2register');
    Route::post('/teacher/register2/{param}', [TeacherRegisterController::class, 'sendModules'])->name("sendModules");
});


// Students Routes
Route::group(['middleware' => 'auth:web'], function () {
    Route::get('/student', function () {
        return view('student.index');
    })->name('student');
    Route::post('/student', [indexStudentController::class,'indexStudent'])->name('student.index');
    Route::get('/student', [indexStudentController::class,'indexStudent'])->name('index');
    Route::get('/student/profile', [bigControllerStudent::class,'profile'])->name('student.profile');
    Route::get('/student/annonce', [NotificationController::class,'notify'])->name('annonce');
    Route::get('/student/calendrie', [bigControllerStudent::class,'calendrie'])->name('calendrie');
    Route::get('/student/profs', [bigControllerStudent::class,'profs'])->name('our.profs');
    Route::get('/evaluations', [EvaluationController::class, 'index'])->name('student.evaluation');
    Route::get('/evaluations/create', [EvaluationController::class, 'create'])->name('student.evaluation.create');
    Route::post('/evaluations', [EvaluationController::class, 'store'])->name('evaluations.store');
    Route::post('/evaluations/hide', [EvaluationController::class, 'hide'])->name('evaluations.hide');
    Route::get('/user/calendar', [EventController::class, 'userCalendar'])->name('user.calendar');
    Route::get('/student/events/list', [EventController::class, 'listEvent'])->name('events.list');
    Route::get('/student/video', [bigControllerStudent::class,'video'])->name('student.video');
    Route::get('/user/notes', [UserNoteController::class, 'showNotes'])->name('form');
    Route::post('/fetch-users-by-filliere-and-teacher', [bigControllerStudent::class, 'fetchUsersByFilliereAndTeacher'])->name('fetchUsersByFilliereAndTeacher');
    Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications.index');
    Route::post('/notifications/store', [NotificationController::class, 'store'])->name('notifications.store');
    Route::post('/notifications/markAsDeleted', [NotificationController::class, 'markAsDeleted'])->name('notifications.markAsDeleted');
    Route::get('/notifications/{id}/edit', [NotificationController::class, 'edit'])->name('notifications.edit');
    Route::put('/notifications/{id}', [NotificationController::class, 'update'])->name('notifications.update');
    Route::delete('/notifications/{id}', [NotificationController::class, 'destroy'])->name('notifications.destroy');
    Route::get('/student/our_github', [bigControllerStudent::class,'github'])->name('student.github');
    Route::post('/student-logout', [logoutControlller::class, 'StudentLogout'])->name('student.logout');
    
    // gestion des cours
    Route::get('/student/cours-student', [subjectsController::class, 'filieres'])->name("cours-student");
    Route::get('/student/cours-student/{file}', [subjectsController::class, 'download'])->name('file.download');
    
    // archive-student
    Route::get('/student/archive-courses', [subjectsController::class, 'ArchiveCourses'])->name("archive-student");
   
    // gestion des compte rendu 
    Route::get('/student/reports', [ReportController::class, 'showUploadForm'])->name('reports.upload.form');
    Route::post('/student/reports/{module}', [ReportController::class, 'uploadReport'])->name('reports.upload');
});


// Profs Routes
Route::group(['middleware' => 'auth:teacher'], function () {

    Route::get('/profs', function () {
        return view('profs.index');
    })->name('teacher');
    Route::post('/profs', [indexProfController::class,'indexProf'])->name('profs.index');
    Route::get('/profs', [indexProfController::class,'indexProf'])->name('index2');
    Route::get('/profs/profile', [bigControllerProf::class,'profile'])->name('profs.profile');
    
    //Route::get('/profs/abscence', [bigControllerProf::class,'abscence'])->name('profs.abscence');
    Route::get('/notifications', [NotificationController::class, 'index'])->name('profs.annonce');
    Route::post('/notifications', [NotificationController::class, 'store'])->name('notifications.store');
    Route::post('/notifications/markAsDeleted', [NotificationController::class, 'markAsDeleted'])->name('notifications.markAsDeleted');
    Route::get('/teacher/notes', [TeacherNotesController::class, 'showNotesPage'])->name('datatable');
    Route::get('/teacher/students/{filliereId}', [TeacherNotesController::class, 'getStudentsByFilliere'])->name('teacher.students');
    Route::post('/teacher/notes', [TeacherNotesController::class, 'sendNotes'])->name('sendNotes');
    Route::post('/teacher/notes/fetch-users', [TeacherNotesController::class, 'getUsersByFilliere'])->name('fetchUsersByFilliere');
    Route::get('/profs/evaluations', [EvaluationController::class, 'index2'])->name('profs.evaluation');
    Route::get('/profs/calendrie', [bigControllerProf::class,'calendrie'])->name('profs.calendrie');
    Route::get('/profs/students', [bigControllerProf::class,'students'])->name('students');
    Route::post('/store-student', [bigControllerProf::class, 'storeStudent'])->name('second.store');
    Route::get('/profs/profs', [bigControllerProf::class,'profs'])->name('profs');
    Route::get('events/list', [EventProfController::class, 'listEvent'])->name('calendrie');
    Route::resource('events', EventProfController::class);
    Route::get('/profs/video', [bigControllerProf::class,'video'])->name('video');
    Route::get('/profs/our_github', [bigControllerProf::class,'github'])->name('profs.github');
    Route::post('/teacher-logout', [logoutControlller::class, 'teacherLogout'])->name('teacher.logout');
    Route::get('/profs/infoEtudiant', [bigControllerProf::class,'AfficherListeEtudiant'])->name('listeEtudiant');
    Route::get('/profs/ajouterEtudiant', [bigControllerProf::class,'create'])->name('createEtudiant');
    Route::post('/profs/ajouterEtudiant/store', [bigControllerProf::class,'storeStudent'])->name('storeEtudiant');
    Route::delete('/profs/etudiant/{user}', [bigControllerProf::class,'destroy']) ->name('destroyStudent');
    Route::get('/profs/editStudent', [bigControllerProf::class,'editStudent'])->name('editStudent');
    Route::put('/profs/update/{user}', [bigControllerProf::class, 'update'])->name('updateStudent');
    Route::get('/profs/import-form', [bigControllerProf::class, 'import'])->name('import');
    Route::post('/profs/importStudents', [bigControllerProf::class, 'importStudents'])->name('importStudents');
    
    // gestion des cours
    Route::get('/profs/cours-prof', [TeachersubjController::class, 'manageSubject'])->name("cours-prof");
    Route::post('/upload', [TeachersubjController::class, 'uploadFile'])->name('file.upload');
    Route::get('/profs/cours-prof/{file}', [TeachersubjController::class, 'download'])->name('file.download.teacher');        
    Route::delete('/profs/cours-prof/delete-file/{file}', [TeachersubjController::class, 'deleteFile'])->name('file.delete');
    
    //gestion des cours archivés
    Route::get('/profs/archive-courses', [TeachersubjController::class, 'archivedCourses'])->name("archive-prof");
    Route::get('/profs/cours-prof/Arcive-file/{file}', [TeachersubjController::class, 'archiveFile'])->name('file.archive');
    Route::get('/profs/cours-prof/Unarchive-file/{file}', [TeachersubjController::class, 'unarchiveFile'])->name('file.unarchive');
   
    // gestion des compte rendu 
    Route::get('/profs/set-deadlines', [ReportController::class, 'showSetDeadlinesForm'])->name('reports.set.deadlines');
    Route::post('/profs/modules/{module}/set-deadline', [ReportController::class, 'setDeadline'])->name('modules.set.deadline');
    Route::get('/profs/reports', [ReportController::class, 'showReportsForTeacher'])->name('reports.index');
    Route::delete('/profs/reports/delete/{report}', [ReportController::class, 'deleteReport'])->name('reports.delete');
    Route::delete('/profs/reports/delete/{report}', [ReportController::class, 'deleteReport'])->name('reports.delete');
    Route::get('/profs/reports/download/{report}', [ReportController::class, 'downloadReport'])->name('reports.download');
    Route::delete('/profs/modules/{module}/delete-reports', [ReportController::class, 'deleteAllReports'])->name('reports.deleteAll');
    // gestion des abscence 
    Route::get('/profs/absence', [AbsenceController::class, 'index'])->name('absences.index');
    Route::post('/profs/absences', [AbsenceController::class, 'store'])->name('absences.store');

});






