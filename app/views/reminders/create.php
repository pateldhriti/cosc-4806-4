<?php require_once 'app/views/templates/header.php'; ?>
<div class="container">
    <h2>Create Reminder</h2>
    <form method="POST" action="/reminders/create">
        <div class="mb-3">
            <input type="text" name="subject" class="form-control" placeholder="Enter reminder" required>
        </div>
        <button type="submit" class="btn btn-success">Create</button>
        <a href="/reminders" class="btn btn-secondary">Back</a>
    </form>
</div>
<?php require_once 'app/views/templates/footer.php'; ?>
