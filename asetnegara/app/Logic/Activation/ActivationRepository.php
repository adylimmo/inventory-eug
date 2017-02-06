<?php

namespace App\Logic\Activation;

use App\Models\Activation;
use App\Models\User;
use App\Notifications\SendActivationEmail;

class ActivationRepository
{

    public function createTokenAndSendEmail(User $user)
    {

        if ($user->activated) { //if user changed activated email to new one

            $user->update([
                'activated' => false
            ]);

        }

        // Create new Activation record for this user/email
        $activation = new Activation;
        $activation->user_id = $user->id;
        $activation->token = str_random(64);
        $activation->save();

        // Send activation email notification
        $user->notify(new SendActivationEmail($activation->token));


    }

}