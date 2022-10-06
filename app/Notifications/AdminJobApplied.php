<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Url;

class AdminJobApplied extends Notification
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
                    ->subject($this->application->applicant->user->fullName().' has applied for role of '. $this->application->job->title.' in '.$this->application->job->recruiter->company_name.'!')
                    ->greeting('Hi ' .config('app.name', 'GSRA Jobs') .' Admin!')
                    ->line('This is to inform you that '.$this->application->applicant->user->fullName() .' has applied for role of '. $this->application->job->title.' in '.$this->application->job->recruiter->company_name.'.')
                    ->action('View Application', url('/'))->success()
                    ->line('You can also do a follow-up on the recruitment team for this job application.');
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
