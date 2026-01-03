Route::get('/', function () {
    return view('dashboard');
});

Route::resource('employees', EmployeeController::class);
