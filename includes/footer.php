<?php // includes/footer.php ?>
</main>
<footer class="site-footer">
    <div class="container footer-inner">
        <p>&copy; <?= date('Y') ?> Alex Consultor IA. Todos los derechos reservados.</p>
        <p>
            <a href="mailto:<?= htmlspecialchars($contactEmail) ?>"><?= htmlspecialchars($contactEmail) ?></a> ·
            <a href="<?= htmlspecialchars($whatsappLink) ?>" target="_blank" rel="noopener">WhatsApp</a>
        </p>
    </div>
</footer>
</body>
</html>
