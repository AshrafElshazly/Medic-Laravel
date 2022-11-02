<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Models\Client;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class AuthCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auth:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Admin & Client Account';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('23225897')
        ]);

        Client::create([
            'name' => 'client',
            'email' => 'client@gmail.com',
            'image' => 'ashraf.jpg',
            'phone' => '01015178920',
            'password' => Hash::make('23225897'),
        ]);
        
        $this->into('User & Client Was Created');
        return true;
    }
}
