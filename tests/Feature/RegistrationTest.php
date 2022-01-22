<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Livewire\Livewire;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    function registration_page_contains_livewire_component()
    {
        $this->get('/register')->assertSeeLivewire('auth.register');
    }

    public function can_register()
    {
        Livewire::test('auth.register')
        ->set('email','jelly@gmail.com')
        ->set('password','secret')
        ->set('passwordConfirmation','secret')
        ->call('register')
        ->assertRedirect('/');

        $this->assertTrue(User::whereEmail('jelly@gmail.com')->exists());

        $this->assertEquals('jelly@gmail.com',auth()->user()->email);
    }

    public function email_is_required()
    {
        Livewire::test('auth.register')
        ->set('email','')
        ->set('password','secret')
        ->set('passwordConfirmation','secret')
        ->call('register')
        ->assertHasErrors(['email' => 'required']);
   }

    public function email_is_valid_email()
   {
       Livewire::test('auth.register')
       ->set('email','jelly@gmail.com')
       ->set('password','secret')
       ->set('passwordConfirmation','secret')
       ->call('register')
       ->assertHasErrors(['email' => 'email']);
  }

  public function email_hasnt_been_taken_already()
  {
      User::create([
          'email'=>'jelly@gmail.com',
          'password'=> Hash::make('password')
      ]);

      Livewire::test('auth.register')
      ->set('email','jelly@gmail.com')
      ->set('password','secret')
      ->set('passwordConfirmation','secret')
      ->call('register')
      ->assertHasErrors(['email' => 'unique']);
 }

 public function see_email_hasnt_already_been_taken_validation_message_as_user_types()
 {
     User::create([
         'email'=>'jelly@gmail.com',
         'password'=> Hash::make('password')
     ]);

     Livewire::test('auth.register')
     ->set('email','jelliore@gmail.com')
     ->assertHasNoErrors();
}

 public function password_is_required()
 {
     Livewire::test('auth.register')
     ->set('email','jelly@gmail.com')
     ->set('password','')
     ->set('passwordConfirmation','secret')
     ->call('register')
     ->assertHasErrors(['password' => 'required']);
}

public function password_is_minimum_of_six_characters()
{
    Livewire::test('auth.register')
    ->set('email','jelly@gmail.com')
    ->set('password','secret')
    ->set('passwordConfirmation','secret')
    ->call('register')
    ->assertHasErrors(['password' => 'min']);
}

public function password_matches_password_confirmation()
{
    Livewire::test('auth.register')
    ->set('email','jelly@gmail.com')
    ->set('password','secret')
    ->set('passwordConfirmation','not-secret')
    ->call('register')
    ->assertHasErrors(['password' => 'same']);
}


}
