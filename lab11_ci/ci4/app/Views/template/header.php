<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?? 'Website Saya'; ?></title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

<div class="container">

<header class="header">
    <h1><?= $title ?? 'Website Saya'; ?></h1>
</header>

<nav class="navbar">
    <div class="nav-left">
        <a href="/">Home</a>
        <a href="/page/artikel">Artikel</a>
        <a href="/page/about">About</a>
        <a href="/page/contact">Kontak</a>
    </div>

    <div class="nav-right">
        <?php if(session()->get('login')): ?>
            <a href="/admin" class="btn-nav">Dashboard</a>
            <a href="/logout" class="btn-logout">Logout</a>
        <?php else: ?>
            <a href="/login" class="btn-nav">Login</a>
        <?php endif; ?>
    </div>
</nav>

<hr>