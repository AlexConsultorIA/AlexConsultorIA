<?php
// includes/header.php
require_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($siteTitle) ?></title>
    <meta name="description" content="<?= htmlspecialchars($siteDescription) ?>">
    <meta name="author" content="<?= htmlspecialchars($siteAuthor) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body>
<header class="site-header">
    <div class="container header-inner">
        <div class="logo">
            <a href="/"><strong>Alex Consultor IA</strong></a>
        </div>
        <nav class="main-nav">
            <a href="#inicio">Inicio</a>
            <a href="#talleres">Para talleres mecánicos</a>
            <a href="#servicios">Servicios</a>
            <a href="#flujo">Cómo funciona</a>
            <a href="#sobre-mi">Sobre mí</a>
            <a href="#contacto" class="btn-nav">Contacto</a>
        </nav>
    </div>
</header>
<main>
