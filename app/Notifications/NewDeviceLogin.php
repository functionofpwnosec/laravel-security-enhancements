<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewDeviceLogin extends Notification
{
    use Queueable;

    protected $ipAddress;

    public function __construct($ipAddress)
    {
        $this->ipAddress = $ipAddress;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->greeting('Hello!')
            ->line('A login was detected from a new device.')
            ->line('IP Address: ' . $this->ipAddress)
            ->line('If this was you, you can ignore this message. If not, please secure your account.');
    }
}
