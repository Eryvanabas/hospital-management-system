<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Patient;
use App\Models\Appointment;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Users
        $admin = User::create([
            'name'=>'Admin','email'=>'admin@example.com','password'=>bcrypt('password'),'role'=>'admin'
        ]);

        $staff1 = User::create([
            'name'=>'Staff 1','email'=>'staff1@example.com','password'=>bcrypt('password'),'role'=>'staff'
        ]);

        $staff2 = User::create([
            'name'=>'Staff 2','email'=>'staff2@example.com','password'=>bcrypt('password'),'role'=>'staff'
        ]);

        // Doctors
        $doctors = [];
        for($i=1;$i<=5;$i++){
            $doctors[] = User::create([
                'name'=>'Doctor '.$i,
                'email'=>'doctor'.$i.'@example.com',
                'password'=>bcrypt('password'),
                'role'=>'doctor'
            ]);
        }

        // Patients
        $patients = [];
        for($i=1;$i<=10;$i++){
            $patients[] = Patient::create([
                'name'=>'Patient '.$i,
                'age'=>rand(20,60),
                'phone'=>'077'.rand(1000000,9999999),
                'doctor_id'=>$doctors[array_rand($doctors)]->id
            ]);
        }

        // Appointments
        for($i=0;$i<20;$i++){
            $patient = $patients[array_rand($patients)];
            Appointment::create([
                'patient_id'=>$patient->id,
                'doctor_id'=>$patient->doctor_id,
                'appointment_date'=>date('Y-m-d', strtotime('+'.rand(0,10).' days')),
                'status'=>['Pending','Completed','Cancelled'][rand(0,2)]
            ]);
        }
    }
}
