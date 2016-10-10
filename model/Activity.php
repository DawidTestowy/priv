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
    public $status;
    public $note;

    function __construct($id, $subject, $time, $salesman, $company, $type, $status,$note)
    {
        $this->id = $id;
        $this->subject = $subject;
        $this->time = $time;
        $this->salesman = $salesman;
        $this->company = $company;
        $this->type = $type;
        $this->status = $status;
        $this->note = $note;
    }

    public function getInfo() {
        echo '<tr>';
        foreach($this as $tab) {
            if ($tab == null) {
                echo "<td bgcolor='red'>brak notatki a to nie fajnie</td>";
            } else {
                echo "<td>$tab</td>";
            }
        }
        echo '</tr>';
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