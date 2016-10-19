<?php
/**
 * Created by PhpStorm.
 * User: dlange
 * Date: 2016-09-26
 * Time: 16:35
 */

class Activity {
    public $id;
    public $subject;
    public $time;
    public $salesman;
    public $company;
    public $type;
    private $status;
    public $note;

    function __construct($id, $subject, $time, $salesman, $company, $type, $status,$note)
    {
        $this->id = $id;
        $this->subject = $subject;
        $this->time = $time;
        $this->salesman = $salesman;
        $this->company = $company;
        $this->type = $type;
        $this->status = $this->setStatus($status);
        $this->note = $note;
    }


    public function asHtmlTableRow() {
        $html = "<tr>";

        $html .= "<td>$this->time</td>";
        $html .= "<td>$this->subject</td>";
        $html .= "<td>{$this->company->name}</td>";
        $html .= "<td>$this->type</td>";
        $html .= "<td>$this->status</td>";
        $html .= "<td>{$this->salesman->name}</td>";

        $html .="</tr>";

        return $html;
    }

    public function asXml() {
        $xml = "<activity><id>$this->id</id> ".
                "<subject>$this->subject</subject> ".
                "<time>$this->time</time> ".
                "<salesman>{$this->salesman->name}</salesman> ".
                "<company>{$this->company->name}</company> ".
                "<status>$this->status</status> ".
                "<note>$this->note</note> ".
                "</activity>";

        return $xml;
    }

    function __clone()
    {
        $this->salesman = clone  $this->salesman;
        $this->company = clone $this->company;
    }

    function __sleep()
    {
        return array('id','subject','time','type','status','note','salesman');
    }

    function __wakeup()
    {
        echo 'Pozyskaj zasoby clasy: '. self::class;
    }

    public function getStatus() {
        if ($this->status == 1) {
            return ActivityStatus::OPEN;
        }
        if ($this->status == 2) {
            return ActivityStatus::IN_PROGRESS;
        }
        if ($this->status == 3) {
            return ActivityStatus::CLOSED;
        }

    }

    public function setStatus($newStatus) {
        if ($newStatus == ActivityStatus::OPEN) {
            return 1;
        }
        if ($newStatus == ActivityStatus::IN_PROGRESS) {
            return 2;
        }
        if ($newStatus == ActivityStatus::CLOSED) {
            return 3;
        }
    }
}

class ActivityType {
    const PHONE = 'telefon';
    const MEETING = 'spotkanie';
    const EMAIL = 'wiadomość';
}

class ActivityStatus {
    const IN_PROGRESS = 'w trakcie';
    const OPEN = 'zaplanowane';
    const CLOSED = 'zakończone';
}