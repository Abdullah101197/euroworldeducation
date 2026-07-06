<?php
// migrate_views.php
// This script extracts the header/footer from index.html and generates Blade templates.

$backupDir = __DIR__ . '/static_backup';
$viewsDir = __DIR__ . '/resources/views';

// Create directories
@mkdir("$viewsDir/layouts", 0777, true);
@mkdir("$viewsDir/pages", 0777, true);

// Get index.html
$indexContent = file_get_contents("$backupDir/index.html");
// In case it's UTF-16LE from PowerShell
if (substr($indexContent, 0, 2) === "\xFF\xFE") {
    $indexContent = mb_convert_encoding(substr($indexContent, 2), 'UTF-8', 'UTF-16LE');
}
// Also remove null bytes just in case
$indexContent = str_replace("\0", "", $indexContent);

// Find the header and footer boundaries
$headerEndPos = strpos($indexContent, '<!-- Hero Section -->');
if ($headerEndPos === false) {
    $headerEndPos = strpos($indexContent, '</header>') + 9;
}
$footerStartPos = strpos($indexContent, '<!-- Footer');
if ($footerStartPos === false) {
    $footerStartPos = strpos($indexContent, '<footer');
}

$header = substr($indexContent, 0, $headerEndPos);
$footer = substr($indexContent, $footerStartPos);

// Replace asset links in header/footer to use asset()
$header = str_replace('href="styles.css"', 'href="{{ asset(\'styles.css\') }}"', $header);
$footer = str_replace('src="main.js"', 'src="{{ asset(\'main.js\') }}"', $footer);
$footer = str_replace('src="assets/', 'src="{{ asset(\'assets/', $footer);
$footer = str_replace('.png"', '.png\') }}"', $footer);
$footer = str_replace('.jpg"', '.jpg\') }}"', $footer);

// Add @yield('content') and build main.blade.php
$mainBlade = $header . "\n\n    <main>\n        @yield('content')\n    </main>\n\n" . $footer;

// Fix links in layout (e.g. index.html -> {{ route('home') }})
$mainBlade = str_replace('href="index.html"', 'href="{{ route(\'home\') }}"', $mainBlade);
$mainBlade = str_replace('href="about.html"', 'href="{{ route(\'about\') }}"', $mainBlade);
$mainBlade = str_replace('href="services.html"', 'href="{{ route(\'services\') }}"', $mainBlade);
$mainBlade = str_replace('href="destinations.html"', 'href="{{ route(\'destinations\') }}"', $mainBlade);
$mainBlade = str_replace('href="scholarships.html"', 'href="{{ route(\'scholarships\') }}"', $mainBlade);
$mainBlade = str_replace('href="success-stories.html"', 'href="{{ route(\'success-stories\') }}"', $mainBlade);
$mainBlade = str_replace('href="blog.html"', 'href="{{ route(\'blog\') }}"', $mainBlade);
$mainBlade = str_replace('href="contact.html"', 'href="{{ route(\'contact\') }}"', $mainBlade);

// Also replace dynamic SEO tags to use yields
$mainBlade = preg_replace('/<title>.*?<\/title>/s', '<title>@yield(\'title\', \'Euro World Education\')</title>', $mainBlade);
$mainBlade = preg_replace('/<meta name="description" content=".*?">/s', '<meta name="description" content="@yield(\'description\', \'Study abroad with Euro World Education\')">', $mainBlade);

file_put_contents("$viewsDir/layouts/main.blade.php", $mainBlade);

// Process each HTML file
$files = glob("$backupDir/*.html");
foreach ($files as $file) {
    $filename = basename($file, '.html');
    
    $content = file_get_contents($file);
    if (substr($content, 0, 2) === "\xFF\xFE") {
        $content = mb_convert_encoding(substr($content, 2), 'UTF-8', 'UTF-16LE');
    }
    $content = str_replace("\0", "", $content);

    // Extract title and description
    preg_match('/<title>(.*?)<\/title>/s', $content, $titleMatches);
    preg_match('/<meta name="description" content="(.*?)">/s', $content, $descMatches);
    $title = $titleMatches[1] ?? 'Euro World Education';
    $desc = $descMatches[1] ?? '';

    // Extract body between header and footer
    $bodyStart = strpos($content, '<!-- Hero Section -->');
    if ($bodyStart === false) {
        $bodyStart = strpos($content, '</header>') + 9;
    }
    $bodyEnd = strpos($content, '<!-- Footer');
    if ($bodyEnd === false) {
        $bodyEnd = strpos($content, '<footer');
    }
    
    // If it's contact.html, we need to find "<!-- Contact Hero -->" or similar
    if ($filename === 'contact') {
        $bodyStart = strpos($content, '<!-- Contact Hero -->');
    } elseif ($filename === 'about') {
        $bodyStart = strpos($content, '<!-- About Hero -->');
    } elseif ($filename === 'services') {
        $bodyStart = strpos($content, '<!-- Services Hero -->');
    } elseif ($filename === 'destinations') {
        $bodyStart = strpos($content, '<!-- Destinations Hero -->');
    } elseif ($filename === 'scholarships') {
        $bodyStart = strpos($content, '<!-- Scholarships Hero -->');
    } elseif ($filename === 'success-stories') {
        $bodyStart = strpos($content, '<!-- Success Hero -->');
    } elseif ($filename === 'blog') {
        $bodyStart = strpos($content, '<!-- Blog Hero -->');
    }
    
    if ($bodyStart === false) $bodyStart = strpos($content, '</header>') + 9;

    $body = substr($content, $bodyStart, $bodyEnd - $bodyStart);

    // Replace assets in body
    $body = str_replace('src="assets/', 'src="{{ asset(\'assets/', $body);
    $body = str_replace('.png"', '.png\') }}"', $body);
    $body = str_replace('.jpg"', '.jpg\') }}"', $body);
    
    // Convert links
    $body = str_replace('href="index.html"', 'href="{{ route(\'home\') }}"', $body);
    $body = str_replace('href="about.html"', 'href="{{ route(\'about\') }}"', $body);
    $body = str_replace('href="services.html"', 'href="{{ route(\'services\') }}"', $body);
    $body = str_replace('href="destinations.html"', 'href="{{ route(\'destinations\') }}"', $body);
    $body = str_replace('href="scholarships.html"', 'href="{{ route(\'scholarships\') }}"', $body);
    $body = str_replace('href="success-stories.html"', 'href="{{ route(\'success-stories\') }}"', $body);
    $body = str_replace('href="blog.html"', 'href="{{ route(\'blog\') }}"', $body);
    $body = str_replace('href="contact.html"', 'href="{{ route(\'contact\') }}"', $body);

    // If contact, update form action
    if ($filename === 'contact') {
        $body = str_replace('action="process-form.php"', 'action="{{ route(\'contact.submit\') }}"', $body);
        // Add CSRF token
        $body = str_replace('method="POST"', 'method="POST">'."\n                        @csrf", $body);
    }

    $blade = "@extends('layouts.main')\n\n";
    $blade .= "@section('title', '" . addslashes(trim($title)) . "')\n";
    $blade .= "@section('description', '" . addslashes(trim($desc)) . "')\n\n";
    $blade .= "@section('content')\n";
    $blade .= $body . "\n";
    $blade .= "@endsection\n";

    file_put_contents("$viewsDir/pages/$filename.blade.php", $blade);
}

echo "Migration complete!";
