<?php 
include('master/header.php');
//include('master/navbar.php');
//include('socialicon.php');
?>
	
		<!-- Breadcrumb -->
		<div class="breadcrumbs overlay" style="background-image:url('images/school_img/img16.jpg')">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12">
						<h2 style="font-size:2.5rem; font-weight:700;">Gallery</h2>
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<ul class="bread-list">
							<li><a href="index.php">Home<i class="fa fa-angle-right"></i></a></li>
							<li><a href="#">Photo</a></li>
						</ul> 
					</div>
				</div>
			</div>
		</div>
		<!--/ End Breadcrumb -->
		
		<!-- Gallery Section -->
<section class="gallery-section py-5">
    <div class="gallery-container">
        <h1>School Photo Gallery</h1>
        <div class="folder-grid">

        <!-- album 1 -->
            <div class="folder-item" onclick="openFolder('First Childrens Day 2022-2023', [
                'images/FirstChildrensDay/img1.jpg',
                'images/FirstChildrensDay/img2.jpg',
                'images/FirstChildrensDay/img3.jpg',
                'images/FirstChildrensDay/img4.jpg'
            ])">
                <img src="images/cover/childrensda.jpeg" alt="First Childrens Day">
                <div class="event-name">2022-2023</div>
                <div class="event-name">First Children's Day</div>
            </div>

            <!-- album 2 -->
            
            <div class="folder-item" onclick="openFolder('First Parents Meeting 2022-2023', [
                'images/FirstParentsMeeting/img1.jpg',
                'images/FirstParentsMeeting/img2.jpg',
                'images/FirstParentsMeeting/img3.jpg',
                'images/FirstParentsMeeting/img4.jpg'
            ])">
                <img src="images/cover/firstparentsmeerin.jpeg" alt="First Parents Meeting">
                <div class="event-name">2022-2023</div>
                <div class="event-name">First Parents' Meeting</div>
            </div>

            <!-- album 3 -->
            
            <div class="folder-item" onclick="openFolder('First Teachers Day 2022-2023', [
                'images/FirstTeachersDay/img4.jpg',
                'images/FirstTeachersDay/img7.jpg',
                'images/FirstTeachersDay/img8.jpg',
                'images/FirstTeachersDay/img12.jpg',
                'images/FirstTeachersDay/img13.jpg',
                'images/FirstTeachersDay/img14.jpg',
                
            ])">
                <img src="images/cover/1stteachersda.jpeg" alt="First Teachers Day">
                <div class="event-name">2022-2023</div>
                <div class="event-name">First Teacher Day</div>
            </div>

            <!-- album 4 -->
            <div class="folder-item" onclick="openFolder('Mermier Drawing Competition 2022-2023', [
                'images/MermieDrawingPrize/img1.jpg'
            ])">
                <img src="images/MermieDrawingPrize/img1.jpg" alt="Mermier Drawing Competition">
                <div class="event-name">2022-2023</div>
                <div class="event-name">Mermier Drawing Competition Prize Distribution</div>
            </div>

            <!-- album 5 -->
            
            <div class="folder-item" onclick="openFolder('74th Van Mahotsav Celebration 2023-2024', [
                'images/VanMahotsavCelebration/img3.jpg',
                'images/VanMahotsavCelebration/img4.jpg',
                'images/VanMahotsavCelebration/img5.jpg',
                'images/VanMahotsavCelebration/img6.jpg',
                'images/VanMahotsavCelebration/img7.jpg',
                'images/VanMahotsavCelebration/img10.jpg',
                'images/VanMahotsavCelebration/img14.jpg',
                'images/VanMahotsavCelebration/img17.jpg',
                'images/VanMahotsavCelebration/img19.jpg'
                ])">
                <img src="images/cover/vanmatsa.jpeg" alt=" 74thVan Mahotsav Celebration">
                <div class="event-name">2023-2024</div>    
                <div class="event-name">74th Van Mahotsav Celebration</div>
            </div>

            <!-- album 6 -->
            
            <div class="folder-item" onclick="openFolder('Annual Sports 2023-2024', [
                'images/anualcom/img1.jpg', //1
                'images/anualcom/img2.jpg', //2
                'images/anualcom/img3.jpg', //3
                'images/anualcom/img4.jpg', //4
                'images/anualcom/img5.jpg', //5
                'images/anualcom/img10.jpg', //10
                'images/anualcom/img11.jpg', //11
                'images/anualcom/img12.jpg', //12
                'images/anualcom/img14.jpg', //14
                'images/anualcom/img15.jpg', //15
                'images/anualcom/img17.jpg', //17
                'images/anualcom/img18.jpg', //18
                'images/anualcom/img19.jpg', //19
                'images/anualcom/img20.jpg', //20
                'images/anualcom/img21.jpg', //21
                'images/anualcom/img22.jpg', //22
                'images/anualcom/img23.jpg', //23
                'images/anualcom/img24.jpg', //24
                'images/anualcom/img25.jpg', //25
                'images/anualcom/img27.jpg', //27
                'images/anualcom/img28.jpg', //28
                'images/anualcom/img30.jpg', //30
                'images/anualcom/img31.jpg'  //31
                ])">
                <img src="images/cover/annualsport.jpeg" alt="Annual Sports">
                <div class="event-name">2023-2024</div>    
                <div class="event-name">Annual Sports</div>
            </div>

            <!-- album 7 -->

            <div class="folder-item" onclick="openFolder('Birthday Celebration 2023-2024', [
                'images/birthdaycom/img1.jpg',
                'images/birthdaycom/img2.jpg',
                'images/birthdaycom/img7.jpg',
                'images/birthdaycom/img10.jpg',
                'images/birthdaycom/img16.jpg' 
                ])">
                <img src="images/cover/birthdaycelebratio.jpeg" alt="Birthday Celebration">
                <div class="event-name">2023-2024</div>    
                <div class="event-name">Birthday Celebration</div>
            </div>

            <!-- album 8 -->
            
            <div class="folder-item" onclick="openFolder('Motivational Class by Mr.Jash Debbarma (SDFO) 2023-2024', [
                'images/byMrJashDebbarma/img1.jpg',
                'images/byMrJashDebbarma/img2.jpg',
                'images/byMrJashDebbarma/img3.jpg',
                'images/byMrJashDebbarma/img4.jpg',
                'images/byMrJashDebbarma/img5.jpg'
               
            ])">
                <img src="images/cover/byjdsrd.jpeg" alt="Motivational Class">
                <div class="event-name">2023-2024</div>    
                <div class="event-name">Motivational Class by Mr.Jash Debbarma (SDFO)</div>
            </div>

                <!-- album 9 -->    

            <div class="folder-item" onclick="openFolder('Independence Day Celebration 2023-2024', [
                'images/IndependenceDayCelebration/img1.jpg',
                'images/IndependenceDayCelebration/img2.jpg',
                'images/IndependenceDayCelebration/img3.jpg',
                'images/IndependenceDayCelebration/img5.jpg',
                'images/IndependenceDayCelebration/img7.jpg'
               
            ])">
                <img src="images/cover/independencecel.jpeg" alt="Independence Day Celebration">
                <div class="event-name">2023-2024</div>    
                <div class="event-name">Independence Day Celebration</div>
            </div>

            <!-- album 10 -->
            
            <div class="folder-item" onclick="openFolder('School Building Inauguration 2023-2024', [
                'images/Schoolbuilding/img1.jpg',
                'images/Schoolbuilding/img2.jpg',
                'images/Schoolbuilding/img4.jpg',
                'images/Schoolbuilding/img5.jpg',
                'images/Schoolbuilding/img8.jpg',
                'images/Schoolbuilding/img13.jpg',
                'images/Schoolbuilding/img15.jpg',
                'images/Schoolbuilding/img16.jpg',
                'images/Schoolbuilding/img19.jpg',
                'images/Schoolbuilding/img22.jpg'
                ])">
                <img src="images/cover/schoolbuildingina.jpeg" alt="School building Inauguration">
                <div class="event-name">2023-2024</div>    
                <div class="event-name">School Building Inauguration</div>
            </div>


            <!-- album 11 -->
            
            <div class="folder-item" onclick="openFolder('Teachers Day Celebration 2024-2025', [
                'images/TeachersDay/img1.jpg',
                'images/TeachersDay/img6.jpg',
                'images/TeachersDay/img7.jpg',
                'images/TeachersDay/img8.jpg',
                'images/TeachersDay/img10.jpg',
                'images/TeachersDay/img12.jpg'
                ])">
                <img src="images/cover/teachersda.jpeg" alt="Teachers Day">
                <div class="event-name">2024-2025</div>    
                <div class="event-name">Teacher's Day Celebration</div>
            </div>

            

            <!-- album 12 -->
            
            <div class="folder-item" onclick="openFolder('Result Day 2024-2025', [
                'images/Resultday/img1.jpg',
                'images/Resultday/img3.jpg',
                'images/Resultday/img4.jpg',
                'images/Resultday/img5.jpg',
                'images/Resultday/img6.jpg',
                'images/Resultday/img7.jpg',
                'images/Resultday/img8.jpg',
                'images/Resultday/img9.jpg',
                'images/Resultday/img10.jpg',
                'images/Resultday/img11.jpg'
                ])">
                <img src="images/cover/resultda.jpeg" alt="Result day">
                <div class="event-name">2024-2025</div>    
                <div class="event-name">Result Day</div>
            </div>

            <!-- album 13 -->
            
                <div class="folder-item" onclick="openFolder('Inauguration of New Academic Year 2025-2026', [
                'images/Inaugurationnewacademic/img1.jpg',
                'images/Inaugurationnewacademic/img2.jpg',
                'images/Inaugurationnewacademic/img3.jpg',
                'images/Inaugurationnewacademic/img4.jpg',
                'images/Inaugurationnewacademic/img5.jpg',
                'images/Inaugurationnewacademic/img6.jpg',
                'images/Inaugurationnewacademic/img7.jpg',
                'images/Inaugurationnewacademic/img11.jpg'
                ])">
                <img src="images/cover/newinauguration2.jpeg" alt="Inauguration of New Academic Year">
                <div class="event-name">2025-2026</div>    
                <div class="event-name">Inauguration of New Academic Year</div>
            </div>


            <!-- album 14 -->
            <div class="folder-item" onclick="openFolder('Anti Drugs Campaign 2025-26', [
                'images/Amarpurphotos1/ANTI- DRUGS-CAMPAIGN-2025-26/1.jpg',
                'images/Amarpurphotos1/ANTI- DRUGS-CAMPAIGN-2025-26/2.jpg',
                'images/Amarpurphotos1/ANTI- DRUGS-CAMPAIGN-2025-26/3.jpg',
                'images/Amarpurphotos1/ANTI- DRUGS-CAMPAIGN-2025-26/5.jpg',
                'images/Amarpurphotos1/ANTI- DRUGS-CAMPAIGN-2025-26/6.jpg'
                ])">
                <img src="images/Amarpurphotos1/amarpur1.jpg" alt="ANTI DRUGS Campaign 2025-26">
                <div class="event-name">2025-2026</div>    
                <div class="event-name">Anti Drugs Campaign</div>
            </div>

            <!-- album 15 -->
            <div class="folder-item" onclick="openFolder('Independence Day Celebration 2025-26', [
                'images/Amarpurphotos1/INDEPENDENCE-DAY-2025-26/1.jpg',
                'images/Amarpurphotos1/INDEPENDENCE-DAY-2025-26/2.jpg',
                'images/Amarpurphotos1/INDEPENDENCE-DAY-2025-26/3.jpg',
                'images/Amarpurphotos1/INDEPENDENCE-DAY-2025-26/4.jpg',
                'images/Amarpurphotos1/INDEPENDENCE-DAY-2025-26/5.jpg',
                'images/Amarpurphotos1/INDEPENDENCE-DAY-2025-26/6.jpg',
                'images/Amarpurphotos1/INDEPENDENCE-DAY-2025-26/7.jpg',
                'images/Amarpurphotos1/INDEPENDENCE-DAY-2025-26/9.jpg',
                'images/Amarpurphotos1/INDEPENDENCE-DAY-2025-26/8.jpg',
                'images/Amarpurphotos1/INDEPENDENCE-DAY-2025-26/10.jpg',
                'images/Amarpurphotos1/INDEPENDENCE-DAY-2025-26/11.jpg'
                ])">
                <img src="images/Amarpurphotos1/amarapur2.jpg" alt="INDEPENDENCE DAY 2025-26">
                <div class="event-name">2025-2026</div>    
                <div class="event-name">Independence Day Celebration </div>
            </div>

             <!-- album 16 -->
            <div class="folder-item" onclick="openFolder('International Yoga Day 2025-26', [
                'images/Amarpurphotos1/INTERNATIONAL-YOGA-DAY-2025-26/1.jpg',
                'images/Amarpurphotos1/INTERNATIONAL-YOGA-DAY-2025-26/2.jpg'
                ])">
                <img src="images/Amarpurphotos1/amrapur3.jpg" alt="INTERNATIONAL YOGA DAY 2025-26">
                <div class="event-name">2025-2026</div>    
                <div class="event-name">International Yoga Day  </div>
            </div>

              
            <!-- album 17 -->
            <div class="folder-item" onclick="openFolder('Parents\' Representative Meeting 2025-26', [
                'images/Amarpurphotos1/PARENTS-REPRESENTATIVES-MEETING/1.jpg',
                'images/Amarpurphotos1/PARENTS-REPRESENTATIVES-MEETING/2.jpg'
                ])">
                <img src="images/Amarpurphotos1/amrapur4.jpg" alt="Parent's Representative Meeting 2025-26">
                <div class="event-name">2025-2026</div>    
                <div class="event-name">Parents' Representative Meeting  </div>
            </div>

             <!-- album 18 -->
            <div class="folder-item" onclick="openFolder('Principal\'s Birthday Celebration 2025-26', [
                'images/Amarpurphotos1/PRINCIPAL-BIRTHDAY-2025-26/1.jpg',
                'images/Amarpurphotos1/PRINCIPAL-BIRTHDAY-2025-26/2.jpg',
                'images/Amarpurphotos1/PRINCIPAL-BIRTHDAY-2025-26/3.jpg',
                'images/Amarpurphotos1/PRINCIPAL-BIRTHDAY-2025-26/4.jpg',
                'images/Amarpurphotos1/PRINCIPAL-BIRTHDAY-2025-26/5.jpg',
                'images/Amarpurphotos1/PRINCIPAL-BIRTHDAY-2025-26/6.jpg',
                'images/Amarpurphotos1/PRINCIPAL-BIRTHDAY-2025-26/7.jpg',
                'images/Amarpurphotos1/PRINCIPAL-BIRTHDAY-2025-26/8.jpg',
                'images/Amarpurphotos1/PRINCIPAL-BIRTHDAY-2025-26/9.jpg',
                'images/Amarpurphotos1/PRINCIPAL-BIRTHDAY-2025-26/10.jpg',
                'images/Amarpurphotos1/PRINCIPAL-BIRTHDAY-2025-26/11.jpg',
                'images/Amarpurphotos1/PRINCIPAL-BIRTHDAY-2025-26/12.jpg'
                ])">
                <img src="images/Amarpurphotos1/amrapur5.jpg" alt="PRINCIPAL BIRTHDAY 2025-26">
                <div class="event-name">2025-2026</div>    
                <div class="event-name">Principal's Birthday Celebration</div>
            </div>

             <!-- album 19 -->
             <div class="folder-item" onclick="openFolder('Parent-Teacher Association 2025-26', [
                'images/Amarpurphotos1/PTA-2025-26/1.jpg',
                'images/Amarpurphotos1/PTA-2025-26/2.jpg',
                'images/Amarpurphotos1/PTA-2025-26/3.jpg',
                'images/Amarpurphotos1/PTA-2025-26/4.jpg',
                'images/Amarpurphotos1/PTA-2025-26/5.jpg',
                'images/Amarpurphotos1/PTA-2025-26/7.jpg',
                'images/Amarpurphotos1/PTA-2025-26/8.jpg',
                'images/Amarpurphotos1/PTA-2025-26/9.jpg',
                'images/Amarpurphotos1/PTA-2025-26/10.jpg'
                ])">
                <img src="images/Amarpurphotos1/amrapur6.jpg" alt="Parent-Teacher Association 2025-26">
                <div class="event-name">2025-2026</div>    
                <div class="event-name">Parent-Teacher Association</div>
            </div>

             <!-- album 20 -->
             <div class="folder-item" onclick="openFolder('SFS Investiture 2025-26', [
                'images/Amarpurphotos1/SFS-INVESTITURE-2025-26/1.jpg',
                'images/Amarpurphotos1/SFS-INVESTITURE-2025-26/2.jpg',
                'images/Amarpurphotos1/SFS-INVESTITURE-2025-26/3.jpg',
                'images/Amarpurphotos1/SFS-INVESTITURE-2025-26/4.jpg',
                'images/Amarpurphotos1/SFS-INVESTITURE-2025-26/5.jpg',
                'images/Amarpurphotos1/SFS-INVESTITURE-2025-26/6.jpg',
                'images/Amarpurphotos1/SFS-INVESTITURE-2025-26/7.jpg'
                ])">
                <img src="images/Amarpurphotos1/amrapur7.jpg" alt="SFS Investiture 2025-26">
                <div class="event-name">2025-2026</div>    
                <div class="event-name">SFS Investiture 2025-26</div>
            </div>

            <!-- album 21 -->
            <div class="folder-item" onclick="openFolder('Teacher\'s Day Celebration 2025-26 ', [
                'images/Amarpurphotos1/TEACHERS-DAY-2025-26/1.jpg',
                'images/Amarpurphotos1/TEACHERS-DAY-2025-26/2.jpg',
                'images/Amarpurphotos1/TEACHERS-DAY-2025-26/3.jpg',
                'images/Amarpurphotos1/TEACHERS-DAY-2025-26/4.jpg',
                'images/Amarpurphotos1/TEACHERS-DAY-2025-26/5.jpg'
                ])">
                <img src="images/Amarpurphotos1/amrapur8.jpg" alt="SFS Investiture 2025-26">
                <div class="event-name">2025-2026</div>    
                <div class="event-name">Teacher's Day Celebration </div>
            </div>
        </div>
    </div>

    <!-- Folder Modal -->
    <div class="modal" id="folderModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 id="eventTitle"></h2>
                <button class="close" onclick="closeFolder()">&times;</button>
            </div>
            <div class="modal-images" id="modalImages"></div>
        </div>
    </div>

    <!-- Fullscreen Image Modal -->
    <div class="fullscreen-modal" id="fullscreenModal">
        <span class="fullscreen-close" onclick="closeFullscreen()">&times;</span>
        <button class="nav-button prev" onclick="navigateImage(-1)">&#10094;</button>
        <div class="fullscreen-content">
            <img id="fullscreenImage" src="" alt="Fullscreen Image">
        </div>
        <button class="nav-button next" onclick="navigateImage(1)">&#10095;</button>
    </div>
</section>

<!-- Initialize folders -->
<script>
    let currentImages = [];
    let currentIndex = 0;

    function openFolder(eventName, images) {
        const modal = document.getElementById('folderModal');
        const eventTitle = document.getElementById('eventTitle');
        const modalImages = document.getElementById('modalImages');
        
        // Set event title
        eventTitle.textContent = eventName;
        
        // Clear previous images
        modalImages.innerHTML = '';
        
        // Add images
        images.forEach((src, index) => {
            const img = document.createElement('img');
            img.src = src;
            img.alt = `${eventName} Image ${index + 1}`;
            img.loading = 'lazy';
            img.onclick = () => openFullscreen(src, images, index);
            modalImages.appendChild(img);
        });
        
        // Show modal and disable background
        document.body.classList.add('modal-open');
        modal.classList.add('active');
        modal.style.display = 'block';

        // Add escape key listener
        document.addEventListener('keydown', handleEscapeKey);
    }

    function closeFolder() {
        const modal = document.getElementById('folderModal');
        document.body.classList.remove('modal-open');
        modal.classList.remove('active');
        modal.style.display = 'none';
        
        // Remove escape key listener
        document.removeEventListener('keydown', handleEscapeKey);
    }

    function openFullscreen(src, images, index) {
        const modal = document.getElementById('fullscreenModal');
        const fullscreenImage = document.getElementById('fullscreenImage');
        
        fullscreenImage.src = src;
        currentImages = images;
        currentIndex = index;
        
        modal.style.display = 'flex';
        document.body.classList.add('modal-open');
        modal.classList.add('active');
    }

    function closeFullscreen() {
        const modal = document.getElementById('fullscreenModal');
        document.body.classList.remove('modal-open');
        modal.classList.remove('active');
        modal.style.display = 'none';
        currentImages = [];
        currentIndex = 0;
    }

    function navigateImage(direction) {
        currentIndex = (currentIndex + direction + currentImages.length) % currentImages.length;
        const fullscreenImage = document.getElementById('fullscreenImage');
        fullscreenImage.src = currentImages[currentIndex];
    }

    function handleEscapeKey(event) {
        if (event.key === 'Escape') {
            closeFolder();
            closeFullscreen();
        }
    }

    // Close modals when clicking outside
    window.onclick = function(event) {
        const folderModal = document.getElementById('folderModal');
        const fullscreenModal = document.getElementById('fullscreenModal');
        
        if (event.target === folderModal) {
            closeFolder();
        }
        if (event.target === fullscreenModal) {
            closeFullscreen();
        }
    }

   // Initialize event listeners when the page loads
   document.addEventListener('DOMContentLoaded', function() {
        // Throttled touchmove event listener
        const throttledPreventScroll = throttle(function(e) {
            if (document.body.classList.contains('modal-open')) {
                e.preventDefault();
            }
        }, 100);

        document.body.addEventListener('touchmove', throttledPreventScroll, { passive: false });
    });
</script>

<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
        }

        .gallery-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
            color: #111;
            margin-bottom: 30px;
            font-size: clamp(1.8rem, 5vw, 2.5rem);
            font-weight: bold;
        }

        .folder-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            padding: 10px;
        }

        .folder-item {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            cursor: pointer;
            background: white;

            
        }

        .folder-item:hover {
            transform: scale(1.05);
        }

        .folder-item::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.4), transparent);
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: 1;
        }

        .folder-item:hover::before {
            opacity: 1;
        }

        .folder-item img {
            width: 100%;
            height: 276px !important;
            object-fit: cover;
            display: block;
        }

        .folder-item .event-name {
            padding: 10px;
            text-align: center;
            color: #333;
            font-weight: bold;
            background: rgba(255, 255, 255, 0.9);
            font-size: clamp(0.9rem, 3vw, 1rem);
            position: relative;
            z-index: 2;
            border-top: 1px solid #ddd;
            font-family: 'Georgia', serif;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            font-size: 1.0rem !important;
        }

        .folder-item .event-name i {
            font-size: 1.0rem;
            color: #111;
            transition: transform 0.3s ease, color 0.3s ease;
        }

        .folder-item:hover .event-name {
            color: #fff;
            background: #333;
            font-size: 1.0rem;
        }

        .folder-item:hover .event-name i {
            transform: scale(1.2);
            color: #fff;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: rgba(0, 0, 0, 0.95);
            z-index: 9999;
            overflow-y: auto;
            padding: 20px;
            backdrop-filter: blur(5px);
        }

        .modal-content {
            max-width: 1200px;
            width: 95%;
            margin: 20px auto;
            background: white;
            border-radius: 8px;
            padding: 20px;
            position: relative;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            animation: modalFadeIn 0.3s ease;
        }

        @keyframes modalFadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid #eee;
            position: sticky;
            top: 0;
            background: white;
            z-index: 1000;
        }

        .modal-content h2 {
            color: #333;
            margin: 0;
            font-size: clamp(1.2rem, 4vw, 1.8rem);
            font-weight: 600;
            padding-right: 20px;
        }

        .modal-images {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 20px;
            max-height: calc(100vh - 200px);
            overflow-y: auto;
            padding: 10px;
            padding-right: 15px;
            will-change: scroll-position; /* Optimize scrolling performance */
        }

        .modal-images img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 8px;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .close {
            color: #333;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            padding: 5px 15px;
            border-radius: 5px;
            background: #ffc107;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            line-height: 1;
            position: relative;
            z-index: 1001;
        }

        .close:hover {
            color: white;
            background: #ff4444;
        }

        /* Fullscreen styles */
        .fullscreen-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: rgba(0, 0, 0, 0.95);
            z-index: 10000;
            justify-content: center;
            align-items: center;
        }

        .fullscreen-content {
            position: relative;
            width: 90%;
            height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .fullscreen-content img {
            max-width: 100%;
            max-height: 90vh;
            object-fit: contain;
            border-radius: 8px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
        }

        .fullscreen-close {
            position: fixed;
            top: 20px;
            right: 20px;
            color: white;
            font-size: 40px;
            cursor: pointer;
            z-index: 10001;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .fullscreen-close:hover {
            background: #ff4444;
            transform: rotate(90deg);
        }

        .nav-button {
            position: fixed;
            top: 50%;
            transform: translateY(-50%);
            background: #ffc107;
            border: none;
            color: white;
            font-size: 2rem;
            padding: 3px;
            cursor: pointer;
            border-radius: 0%;
            transition: all 0.3s ease;
            z-index: 10001;
        }

        .nav-button:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .prev {
            left: 20px;
        }

        .next {
            right: 20px;
        }

        @media (max-width: 992px) {
            .modal-images {
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }
            
            .modal-images img {
                height: 250px;
            }
        }

        @media (max-width: 576px) {
            .modal-images {
                grid-template-columns: 1fr;
                gap: 15px;
            }

            .modal-images img {
                height: 200px;
            }

            .modal-content {
                padding: 15px;
                margin: 10px;
            }

            .nav-button {
                padding: 15px;
                font-size: 1.5rem;
            }
        }

        /* Prevent background interaction */
        body.modal-open {
            overflow: hidden;
            pointer-events: none;
        }

        .modal.active {
            pointer-events: all;
        }

        .modal-content {
            pointer-events: all;
        }

        /* Custom Scrollbar */
        .modal-images::-webkit-scrollbar {
            width: 10px;
        }

        .modal-images::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 5px;
        }

        .modal-images::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 5px;
            border: 2px solid #f1f1f1;
        }

        .modal-images::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        @media (min-width: 1200px) {
            .folder-grid {
                grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
                gap: 30px;
            }

            .folder-item img {
                height: 220px;
            }

            .folder-item .event-name {
                font-size: 1.2rem;
            }

            .modal-content {
                max-width: 1400px;
                padding: 30px;
            }

            .modal-images {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 20px;
            }

            .modal-images img {
                height: 160px;
            }

            .modal-content h2 {
                font-size: 2rem;
            }
        }

        @media (max-width: 768px) {
            .folder-grid {
                grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            }

            .folder-item img {
                height: 160px;
            }

            .modal-images {
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }

            .modal-images img {
                height: 200px;
            }
        }

        @media (max-width: 480px) {
            .folder-grid {
                grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
            }

            .folder-item img {
                height: 140px;
            }

            .modal-images {
                grid-template-columns: 1fr;
                gap: 10px;
            }

            .modal-images img {
                height: 180px;
            }

            .modal-content {
                padding: 15px;
                margin: 10px;
            }
        }
    </style>
<?php 
include('master/footer.php');
?>