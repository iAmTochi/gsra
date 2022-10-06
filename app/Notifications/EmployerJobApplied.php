<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EmployerJobApplied extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(public  $application)
    {

    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject($this->application->job->title  .' candidate - ' . $this->application->applicant->user->fullName() . ' applied on ' .config('app.name', 'GSRA Jobs'))
                    ->greeting('Hello '. $this->application->job->recruiter->first_name )
                    ->line('This is to inform you that '.$this->application->applicant->user->fullName() .' has applied for your '. $this->application->job->title .' job.')
                    ->action('Send a message', url('/'))->success()
                    ->line('Show interest with a message to keep this applicant active!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
