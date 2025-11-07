<?php
include('master/header.php');

// Define video paths with proper titles and paths
$videos = [
    // [
    //     'path' => 'https://www.youtube.com/embed/xo92ka8IOQY?si=Bf_6OLwiVFPVQd6N',
    //     'title' => 'Academic Activities',
    //     'poster' => '',
    //     'is_youtube' => true
    // ],
    // [
    //     'path' => 'https://www.youtube.com/embed/e15fn-3j9G4?si=gJPB4WJEtOSlRYr9',
    //     'title' => 'Principal Message',
    //     'poster' => '',
    //     'is_youtube' => true
    // ],
    [
        'path' => 'https://www.youtube.com/embed/LyoIZ7K0d9E',
        'title' => 'SFS Investiture Ceremony 2025-2026',
        'poster' => '',
        'is_youtube' => true
    ],
    // [
    //     'path' => 'https://www.youtube.com/embed/5SGAlBi-9DU?si=9RP6XJeKXtBRsu',
    //     'title' => 'Kokborok Dance',
    //     'poster' => '',
    //     'is_youtube' => true
    // ],
    // [
    //     'path' => 'https://www.youtube.com/embed/5VyTzjHJIS4?si=noZGk6CK4Jc4YKXq',
    //      'title' => 'Kokborok Dance',
    //      'poster' => '',
    //      'is_youtube' => true
    //  ],
    [
        'path' => 'https://www.youtube.com/embed/rPOPMeML-LY',
        'title' => 'SFS Investiture Ceremony 2025-2026',
        'poster' => '',
        'is_youtube' => true
    ],
    [
        'path' => 'https://www.youtube.com/embed/BEOYTovdaOc',
        'title' => 'SFS Academic Year 2025-2026 Commencement',
        'poster' => '',
        'is_youtube' => true
    ],
    [
        'path' => 'https://www.youtube.com/embed/XmlXi7McGFE',
        'title' => 'SFS Parents\' on SFS Feast 2025',
        'poster' => '',
        'is_youtube' => true
    ],
    [
        'path' => 'https://www.youtube.com/embed/2J7cM2Mrlzg',
        'title' => 'SFS Kids on SFS Feast Day 2025',
        'poster' => '',
        'is_youtube' => true
    ],
    [
        'path' => 'https://www.youtube.com/embed/vbcyGj2lLLQ',
        'title' => 'Happy Feast 2025 Bangla Dance',
        'poster' => '',
        'is_youtube' => true
    ],
    [
        'path' => 'https://www.youtube.com/embed/KsUhz9-_GDg',
        'title' => 'SFS Feast Day',
        'poster' => '',
        'is_youtube' => true
    ],
    [
        'path' => 'https://www.youtube.com/embed/HybJmnxFWXU',
        'title' => 'SFS Feast 2025 Cum Golden Jubilee Celebration',
        'poster' => '',
        'is_youtube' => true
    ],
    [
        'path' => 'https://www.youtube.com/embed/raoHYDz5y2o',
        'title' => 'SFS School,Burburia where talents bloom, values grow and culture comes alive!',
        'poster' => '',
        'is_youtube' => true
    ],
    [
        'path' => 'https://www.youtube.com/embed/kCriYyrY2cw',
        'title' => 'SFS SCHOOL,BURBURIA where culture meets creativity, and hearts dance together in harmony.',
        'poster' => '',
        'is_youtube' => true
    ]

];

// Function to check if video exists and is readable
function videoExists($path) {
    return file_exists($path) && is_readable($path);
}
?>

<!-- Breadcrumb -->
<div class="breadcrumbs overlay" style="background-image:url('images/school_img/img16.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <h2 style="font-size:2.5rem; font-weight:700;">Video Gallery</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="bread-list">
                    <li><a href="index.php">Home<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="video.php">Video</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Video Section -->
<section class="video-section py-5" style="background: linear-gradient(rgba(26, 42, 108, 0.6), rgb(178 31 31 / 22%),  rgba(102, 74, 14, 0.6));">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2 class="section-title">School Video </h2>
                <p class="section-subtitle">Watch our School Activities and Events</p>
            </div>
        </div>
        <div class="row">
            <?php foreach ($videos as $video): ?>
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="video-item">
                        <?php if (isset($video['is_youtube']) && $video['is_youtube']): ?>
                            <div class="video-wrapper">
                                <iframe 
                                    width="100%" 
                                    height="315" 
                                    src="<?php echo htmlspecialchars($video['path']); ?>" 
                                    title="<?php echo htmlspecialchars($video['title']); ?>"
                                    frameborder="0" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                    allowfullscreen
                                    class="rounded shadow"
                                ></iframe>
                            </div>
                        <?php elseif (videoExists($video['path'])): ?>
                            <div class="video-wrapper">
                                <video 
                                    controls 
                                    width="100%" 
                                    class="rounded shadow" 
                                    preload="metadata"
                                    controlsList="nodownload"
                                    playsinline
                                >
                                    <source src="<?php echo htmlspecialchars($video['path']); ?>" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        <?php else: ?>
                            <div class="alert alert-warning">
                                <i class="fa fa-exclamation-triangle"></i>
                                Video file not found or not accessible
                            </div>
                        <?php endif; ?>
                        <h4 class="video-title mt-3"><?php echo htmlspecialchars($video['title']); ?></h4>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
.video-section {
    background-color: #f8f9fa;
    padding: 60px 0;
}

.video-item {
    position: relative;
    overflow: hidden;
    margin-bottom: 30px;
}

.video-wrapper {
    position: relative;
    padding-top: 56.25%; /* 16:9 Aspect Ratio */
    background: #000;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.video-wrapper video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: contain;
    background: #000;
}

/* Add specific styling for YouTube iframes */
.video-wrapper iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: none;
    padding: 0;
    margin: 0;
}

.video-title {
    font-size: 1.1rem;
    color: #333;
    margin: 15px 0;
    text-align: center;
    font-weight: 500;
}

.section-title {
    color: white;
    margin-bottom: 15px;
    font-weight: bold;
    /* font-size: 2.2rem; */
}

.section-subtitle {
    color: white;
    margin-bottom: 30px;
    font-size: 1.1rem;
}

.alert {
    text-align: center;
    margin: 20px 0;
    padding: 15px;
}

@media (max-width: 768px) {
    .video-section {
        padding: 40px 0;
    }
    
    .video-title {
        font-size: 1rem;
    }

    .section-title {
        font-size: 1.8rem;
    }

    .section-subtitle {
        font-size: 1rem;
    }
}
</style>

<?php 
include('master/footer.php');
?>
