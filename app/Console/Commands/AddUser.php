<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class AddUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:add {name} {password} {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '添加一个用户';


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $name = $this->argument('name');
        $password = $this->argument('password');
        $email = $this->argument('email');

        try {
            User::create([
                'name'     => $name,
                'password' => bcrypt($password),
                'email'    => $email,
            ]);

            $this->info('添加成功');
        } catch (\Exception $exception) {
            $this->error($exception->getMessage());
        }
    }
}
