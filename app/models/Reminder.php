<?php

class Reminder {

    public function __construct() {}

    public function get_all_reminders () {
        $db = db_connect();
        $stmt = $db->prepare("select * from notes WHERE deleted = 0;");
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }

    public function update_reminder ($reminder_id, $new_subject) {
        $db = db_connect();
        $stmt = $db->prepare("update notes set subject = :subject where id = :id");
        return $stmt->execute([
        'subject' => $new_subject,
        'id' => $reminder_id
         ]);    
        
    }
}
?>
