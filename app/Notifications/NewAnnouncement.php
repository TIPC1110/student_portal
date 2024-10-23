<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\WebPush\WebPushMessage;
use NotificationChannels\WebPush\WebPushChannel;

class NewAnnouncement extends Notification
{
    use Queueable;

    private $announcement;

    public function __construct($announcement)
    {
        $this->announcement = $announcement;
    }

    public function via($notifiable)
    {
        return [WebPushChannel::class]; 
    }

    public function toWebPush($notifiable, $notification)
    {
        return (new WebPushMessage)
            ->title('New Announcement!')
            ->icon('/notification-icon.png') 
            ->body($this->announcement->title)
            ->action('View Announcement', 'view_announcement') 
            ->data(['id' => $this->announcement->id]);
    }
}