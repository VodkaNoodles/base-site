<?php
// paper.php
// For now, we'll just use a GET parameter to identify which paper to display
$paperId = $_GET['id'] ?? 1; // default to 1 if not set

// In a real scenario, you'd query a database. For now, let's use a static array.
$papers = [
    1 => [
        'title' => 'Visual Knowledge Discovery and Machine Learning',
        'author' => 'Boris Kovalerchuk',
        'abstract' => 'This book explores the intersection of visual knowledge discovery and machine learning.',
        'date' => '2018-01-01',
        'media' => [
            'ppt' => 'https://example.com/ppt1',
            'video' => 'https://example.com/video1',
            'podcast'
