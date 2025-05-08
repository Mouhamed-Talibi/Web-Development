<?php

    namespace App\Mail;

    use App\Models\Profile;
    use Illuminate\Bus\Queueable;
    use Illuminate\Contracts\Queue\ShouldQueue;
    use Illuminate\Mail\Mailables\Attachment;
    use Illuminate\Mail\Mailable;
    use Illuminate\Mail\Mailables\Content;
    use Illuminate\Mail\Mailables\Envelope;
    use Illuminate\Queue\SerializesModels;

    class testMail extends Mailable
    {
        use Queueable, SerializesModels;

        /**
         * Create a new message instance.
         */
        public function __construct(private readonly Profile $profile)
        {
        }

        /**
         * Get the message envelope.
         */
        public function envelope(): Envelope
        {
            return new Envelope(
                subject: 'Profile Confirmation',
            );
        }

        /**
         * Get the message content definition.
         */
        public function content(): Content
        {
            $id = $this->profile->id;
            $date = $this->profile->created_at;
            $link = url('') . "/verify_email/" . base64_encode($date. "///$id");    

            return new Content(
                view: 'emails.inscription',
                with: [
                    'name' => $this->profile->firstName,
                    'email' => $this->profile->email,
                    'link' => $link,
                ]
            );
        }

        /**
         * Get the attachments for the message.
         *
         * @return array<int, \Illuminate\Mail\Mailables\Attachment>
         */
        public function attachments(): array
        {
            return [
                
            ];
        }
    }
