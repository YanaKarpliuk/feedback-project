<?php include 'config/database.php'; ?>
<?php
$sql = 'SELECT * FROM feedback_table';
$result = $conn->query($sql);
?>
<?php include 'inc/header.php' ?>

    <h2>Feedback</h2>

<?php if (empty($result)): ?>
    <p class="lead mt3">There is no feedback</p>
<?php endif; ?>

<?php foreach ($result as $item): ?>
    <div class="card my-3 w-75">
        <div class="card-body text-center">
            <?php echo $item['body']; ?>
            <div class="text-secondary mt2">
                By <?php echo $item['name']; ?>
                on <?php
                $date=date_create($item['date']);
                echo date_format($date, "M j, Y");
                ?>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?php include 'inc/footer.php' ?>