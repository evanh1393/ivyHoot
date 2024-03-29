<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ContactComp; 
use App\Livewire\ContactFormComp;


Route::get('/', ContactComp::class);

Route::get('/contacts', ContactComp::class);
Route::get('/contact-form', ContactFormComp::class);


// custom stuff

/* Route::get('/ping', function (Request $request) {
    $connection = DB::connection('mongodb');
    $msg = 'MongoDB is accessible!';
    try {
        $connection->command(['ping' => 1]);
    }
    catch (\Exception $e) {
        $msg = 'MongoDB is not accessible. Error: ' . $e->getMessage();
    }
    return ['msg' => $msg];
}); */

/* use App\Models\Contact;
use App\Models\Program;

Route::get('/mongoPG', function (Request $request) {
    $filePath = public_path('data/ProgramUsers.csv');

    if (($handle = fopen($filePath, 'r')) !== FALSE) {
        fgetcsv($handle); // Skip the header row

        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            [$programName, $cid] = $data;
            $cid = (int) $cid; // Ensure $cid is an integer

            try {
                $contact = Contact::where('cid', $cid)->first();

                if ($contact) {
                    if ($program) {
                        // Initialize 'contacts' as an array if it's null
                        $conProgs = $contacts->programs ?? [];

                        // Check if the contact is already in the program's contacts
                        if (!in_array($contact->programName, $conProgs)) {
                            $conProgs[] = $programName; // Add contact _id to the array
                            $contacts->programs = $conProgs; // Update the program's contacts
                            $program->save(); // Save the updated program
                        }
                    }
                }
            } catch (\Exception $e) {
                \Log::error("Error processing CID: $cid with Program: $programName - " . $e->getMessage());
                continue; // Continue to the next row on error
            }
        }

        fclose($handle);
    }
}); */