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

    public function create_reminder($user_id, $subject) {
        $db = db_connect();
        $stmt = $db->prepare("INSERT INTO notes (user_id, subject, created_at, completed, deleted) 
                              VALUES (:user_id, :subject, NOW(), 0, 0)");
        return $stmt->execute([
            'user_id' => $user_id,
            'subject' => $subject
        ]);
    }


    public function update_reminder ($reminder_id, $new_subject) {
        $db = db_connect();
        $stmt = $db->prepare("update notes set subject = :subject where id = :id");
        return $stmt->execute([
        'subject' => $new_subject,
        'id' => $reminder_id
         ]);    

    }

    public function get_reminder_by_id($id) {
        $db = db_connect();
        $stmt = $db->prepare("SELECT * FROM notes WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}
?>