<?php include 'inc/header.php' ?>

<?php
$feedback = [
    [
        'id' => 1,
        'name' => 'yana',
        'email' => 'email',
        'body' => 'body'
    ]
]
?>

    <h2>Feedback</h2>

<?php if (empty($feedback)): ?>
    <p class="lead mt3">There is no feedback</p>
<?php endif; ?>

<?php foreach ($feedback as $item): ?>
    <div class="card my-3 w-75">
        <div class="card-body text-center">
            <?php echo $item['body']; ?>
            <div class="text-secondary mt2">
                By <?php echo $item['name']; ?>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?php include 'inc/footer.php' ?>