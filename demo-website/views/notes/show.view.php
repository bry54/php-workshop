<?php require 'views/partials/head.php' ?>

<?php require 'views/partials/nav.php' ?>

<?php require 'views/partials/banner.php' ?>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <?= htmlspecialchars($note['body']) ?>

            <p>
            <a href="/notes" class="text-blue pt-20"> Go back... </a>
            </p>
        </div>
    </main>

<?php require 'views/partials/footer.php' ?>