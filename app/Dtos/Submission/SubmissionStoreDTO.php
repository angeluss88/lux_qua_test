<?php

namespace App\Dtos\Submission;

class SubmissionStoreDTO
{
    public function __construct(
        protected string $name,
        protected string $email,
        protected string $message,
    ) {
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }


}
