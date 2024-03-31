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

use App\Models\Contact;
use App\Models\Program;

/* $programList = [
1	Test
2	Corporate
3	CAMO
4	FDA CTP
5	Seymour Johnson AFB A&FRC
    'Barksdale AFB A&FRC' => 6, 	
    'USAO WD NC' => 7,	
    'Whiteman AFB A&FRC' => 8,	
    'Scott AFB' => 10,	
    'CAMO (ZAI)' => 11,	
] */
/* Route::get('/mongoPG', function (Request $request) {
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
});  */

Route::get('/ipAdd', function (Request $request) {
    // The IP address you want to allow access from
    $ipAddress = "212.102.33.117/32"; // Use CIDR notation

    // The ID of the security group you want to modify
    $securityGroupId = "sg-06bbe8a495ee75f33";

    // The AWS CLI command to update the security group
    $command = "aws ec2 authorize-security-group-ingress --group-id {$securityGroupId} --protocol tcp --port 443 --cidr {$ipAddress}";

    // Execute the command
    $output = shell_exec($command);
    
    // Check for errors or success
    if ($output === null) {
        echo "Error executing command or command returned with no output.";
    } else {
        echo "Command executed successfully: {$output}";
    }
});