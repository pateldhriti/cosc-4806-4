<?php

class Reminder {

    public function __construct() {}

    public function get_all_reminders () {
        $db = db_connect();
        $stmt = $db->prepare("select * from reminders;");
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }

    public function update_reminder ($reminder_id) {
        $db = db_connect();
        //do update statement
    }
}
?>
