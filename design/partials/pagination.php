<?php
function renderPaginationLink($url, $page, $label, $isActive = false) {
    if ($isActive) {
        return sprintf('<a href="#" class="active">%s</a>', $label);
    }
    return sprintf('<a href="%s?page=%d">%s</a>', $url, $page, $label);
}
?>

<div class="pagination">
    <?php if ($currentPage > 1): ?>
        <?= renderPaginationLink($config['url'], $currentPage - 1, '&laquo; Prev') ?>
    <?php endif; ?>

    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <?= renderPaginationLink($config['url'], $i, $i, $i == $currentPage) ?>
    <?php endfor; ?>

    <?php if ($currentPage < $totalPages): ?>
        <?= renderPaginationLink($config['url'], $currentPage + 1, 'Next &raquo;') ?>
    <?php endif; ?>
</div>