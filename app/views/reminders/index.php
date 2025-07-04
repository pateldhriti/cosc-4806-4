<?php require_once 'app/views/templates/header.php'; ?>
<div class="container">
    <div class="page-header" id="banner">  
        <div class="row">
            <div class="col-lg-12">
                <h1>Reminders</h1>
                <a href="/reminders/create" class="btn btn-primary mb-3">+ Add Reminder</a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <ul class="list-group">
                <?php foreach ($data['reminders'] as $note): ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= htmlspecialchars($note['subject']) ?>
                        <div>
                            <a href="/reminders/edit/<?= $note['id'] ?>" class="btn btn-sm btn-warning me-1">Edit</a>
                            <a href="/reminders/delete/<?= $note['id'] ?>" class="btn btn-sm btn-danger"
                               onclick="return confirm('Are you sure you want to delete this reminder?');">Delete</a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<?php require_once 'app/views/templates/footer.php'; ?>
