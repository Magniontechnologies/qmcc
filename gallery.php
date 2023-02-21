  <?php include ("header.php"); ?>
  <!-- :: Breadcrumb Header -->
  <div data-aos="fade-right" data-aos-duration="1000">
        <section class="breadcrumb-header style-2" id="page" style="background-image: url(assets/images/header/gallery.jpg)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="banner">
                            <h1>Gallery</h1>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><i class="fas fa-angle-right"></i></li>
                                <li>Gallery</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
		
  <section class="gallery min-vh-100">
     <div class="container-lg">
        <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
           <div class="col">
              <img src="assets/images/blog/1.jpg" class="gallery-item" alt="gallery">
           </div>
           <div class="col">
              <img src="assets/images/blog/2.jpg" class="gallery-item" alt="gallery">
           </div>
           <div class="col">
              <img src="assets/images/blog/3.jpg" class="gallery-item" alt="gallery">
           </div>
           <div class="col">
              <img src="assets/images/blog/4.jpg" class="gallery-item" alt="gallery">
           </div>
           <div class="col">
              <img src="assets/images/blog/5.jpg" class="gallery-item" alt="gallery">
           </div>
           <div class="col">
              <img src="assets/images/blog/6.jpg" class="gallery-item" alt="gallery">
           </div>
           <div class="col">
              <img src="assets/images/blog/7.jpg" class="gallery-item" alt="gallery">
           </div>
           <div class="col">
              <img src="assets/images/blog/8.jpg" class="gallery-item" alt="gallery">
           </div>
           <div class="col">
              <img src="assets/images/blog/8.jpg" class="gallery-item" alt="gallery">
           </div>
        </div>
     </div>
  </section>

<!-- Modal -->
<div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <img src="assets/images/blog/1.jpg" class="modal-img" alt="modal img">
      </div>
    </div>
  </div>
</div>


<?php include ("footer.php"); ?>

