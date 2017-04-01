<?php

namespace AddEvent;

use DateTime;

class Event {
    public $startTime;
    public $endTime;
    public $title;
    public $allDay;
    public $url;
    public $created;
    public $edited;
    public $id;
    public $location;
    public $attendees;
    public $attachments;
    public $reminders;

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
     * @param mixed $attendees
     */
    public function setAttendees(array $attendees)
    {
        $this->attendees = $attendees;
    }

    /**
     * @param mixed $attachments
     */
    public function setAttachments(array $attachments)
    {
        $this->attachments = $attachments;
    }

    /**
     * @param mixed $reminders
     */
    public function setReminders(array $reminders)
    {
        $this->reminders = $reminders;
    }



}
