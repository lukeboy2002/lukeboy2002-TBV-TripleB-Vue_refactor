<?php

namespace App\Actions\Jetstream;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UpdateUserProfilePhoto
{
    public function update($user, array $input)
    {
        Validator::make($input, [
            'photo' => ['required', 'image', 'max:1024'],
        ])->validateWithBag('updateProfileInformation');

        if ($user->profile_photo_path) {
            Storage::disk('public')->delete($user->profile_photo_path);
        }

        $user->update([
            'profile_photo_path' => $input['photo']->store('profile-photos', 'public'),
        ]);
    }
}
