<?php

namespace AddEvent;

use DateTime;

class Event {
    public $startTime;
    public $endTime;
    public $title;
    public $allDay = false;
    public $url;
    public $created;
    public $edited;
    public $id;
    public $location;
    public $attendees = [];
    public $attachments = [];
    public $reminders = [];

    /**
     * Event constructor.
     * @param $startTime
     * @param $endTime
     * @param $title
     */
    public function __construct(DateTime $startTime, DateTime $endTime, string $title)
    {
        $this->startTime = $startTime;
        $this->endTime = $endTime;
        $this->title = $title;
        $this->created = new DateTime();
        $this->edited = new DateTime();
    }

    /**
     * @param DateTime $startTime
     */
    public function setStartTime(DateTime $startTime)
    {
        $this->startTime = $startTime;
    }

    /**
     * @param DateTime $endTime
     */
    public function setEndTime(DateTime $endTime)
    {
        $this->endTime = $endTime;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * @param mixed $allDay
     */
    public function setAllDay(bool $allDay)
    {
        $this->allDay = $allDay;
    }

    /**
     * @param mixed $url
     */
    public function setUrl(string $url)
    {
        $this->url = $url;
    }

    /**
     * @param mixed $created
     */
    public function setCreated(DateTime $created)
    {
        $this->created = $created;
    }

    /**
     * @param mixed $edited
     */
    public function setEdited(DateTime $edited)
    {
        $this->edited = $edited;
    }

    /**
     * @param mixed $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $location
     */
    public function setLocation(string $location)
    {
        $this->location = $location;
    }

    /**
     * @param Attendee $attendee
     */
    public function addAttendee(Attendee $attendee)
    {
        $this->attendees[] = $attendee;
    }

    /**
     * @param Attachment $attachment
     */
    public function addAttachement(Attachment $attachment)
    {
        $this->attachments[] = $attachment;
    }

    /**
     * @param Reminder $reminder
     */
    public function addReminder(Reminder $reminder)
    {
        $this->reminders[] = $reminder;
    }

}
