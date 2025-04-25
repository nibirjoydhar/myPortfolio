<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
});


//send to controller
// Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

// Route::get('/test-mail', function () {
//     try {
//         \Mail::raw('Test email from Laravel', function ($message) {
//             $message->to('nibirjoydhar@gmail.com')
//                     ->subject('Test Email');
//         });
//         return 'Test email sent!';
//     } catch (\Exception $e) {
//         \Log::error('Test email failed: ' . $e->getMessage());
//         return 'Error: ' . $e->getMessage();
//     }
// });