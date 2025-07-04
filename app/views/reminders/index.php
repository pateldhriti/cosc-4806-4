<?php require_once 'app/views/templates/header.php'; ?>
<div class="container">
    <div class="page-header" id="banner">  
        <div class="row">
           <div class="col-lg-12">
                <h1>Reminders</h1>
           </div>
        </div>
    </div>

    <ul>
        <?php foreach ($data['reminders'] as $note): ?>
            <li><?= htmlspecialchars($note['subject']) ?></li>
        <?php endforeach; ?>
    </ul>

    <?php require_once 'app/views/templates/footer.php'; 

?>