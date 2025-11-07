

<style>
.social-sidebar {
  position: fixed;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  display: flex;
  flex-direction: column;
  z-index: 999;
}

.social-icon {
  display: block;
  margin: 5px 0;
  background-color: #004080;
  color: white;
  text-align: center;
  padding: 12px 0;
  width: 45px;
  font-size: 18px;
  border-radius: 0 5px 5px 0;
  transition: transform 0.3s ease, background-color 0.3s ease;
  text-decoration: none;
}

.social-icon:hover {
  transform: translateX(10px);
  background-color: #0066cc;
}

.facebook { background-color: #3b5998; }
.twitter  { background-color: #00acee; }
.instagram { background-color: #e4405f; }
.youtube { background-color: #ff0000; }
    
</style>


<!-- Social Media Sidebar -->
<div class="social-sidebar d-none d-md-block">
  <a href="https://facebook.com" target="_blank" class="social-icon facebook">
    <i class="fab fa-facebook-f"></i>
  </a>
  <a href="https://twitter.com" target="_blank" class="social-icon twitter">
    <i class="fab fa-twitter"></i>
  </a>
  <a href="https://instagram.com" target="_blank" class="social-icon instagram">
    <i class="fab fa-instagram"></i>
  </a>
  <a href="https://youtube.com" target="_blank" class="social-icon youtube">
    <i class="fab fa-youtube"></i>
  </a>
</div>
