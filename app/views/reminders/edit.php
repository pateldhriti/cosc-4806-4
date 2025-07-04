<?php require_once 'app/views/templates/header.php'; ?>
<div class="container">
    <h2>Edit Reminder</h2>
    <form method="POST" action="/reminders/edit/<?= $data['note']['id'] ?>">
        <div class="mb-3">
            <input type="text" name="subject" class="form-control" value="<?= htmlspecialchars($data['note']['subject']) ?>" required>
        </div>
        <button type="submit" class="btn btn-warning">Update</button>
        <a href="/reminders" class="btn btn-secondary">Cancel</a>
    </form>
</div>
<?php require_once 'app/views/templates/footer.php'; ?>
