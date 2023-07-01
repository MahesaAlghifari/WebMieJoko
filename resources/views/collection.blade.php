 <!-- collection -->
 <section id="collection" class="py-5">
     <div class="container">

         <div class="row g-0">
             <div class="d-flex flex-wrap justify-content-center mt-5 filter-button-group">
                 <button type="button" class="btn m-2 text-dark active-filter-btn" data-filter="*">All</button>
                 <button type="button" class="btn m-2 text-dark" data-filter=".makanan">Makanan</button>
                 <button type="button" class="btn m-2 text-dark" data-filter=".minuman">Minuman</button>
             </div>

             <div class="collection-list mt-4 row gx-0 gy-3">
                 <div class="col-md-6 col-lg-4 col-xl-4 p-2 makanan">
                     <div class="card shadow border-0">
                         <svg class="bd-placeholder-img card-img-top" width="100%" height="225">
                             <image class="image-package" href="image/MieAyam.jpg" />
                         </svg>
                         <div class="card-body">
                             <h4>Mie Ayam Pangsit</h4>
                             <p class="card-category">Makanan</p> <!-- Tambahkan elemen p dengan class card-category -->
                             </p>
                             <div class="d-flex justify-content-between align-items-center">
                                 <div class="btn-group">
                                     <button type="button" class="btn btn-sm btn-outline-warning">Rp. 15.000</button>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

                 
                 <div class="col-md-6 col-lg-4 col-xl-4 p-2 makanan">
                     <div class="card shadow border-0">
                         <svg class="bd-placeholder-img card-img-top" width="100%" height="225">
                             <image class="image-package" href="image/MieAyam.jpg" />
                         </svg>
                         <div class="card-body">
                             <h4>Mie Ayam Pangsit</h4>
                             <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque,
                                 sequi.
                             </p>
                             <div class="d-flex justify-content-between align-items-center">
                                 <div class="btn-group">
                                     <button type="button" class="btn btn-sm btn-outline-warning">Rp. 15.000</button>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-md-6 col-lg-4 col-xl-4 p-2 minuman">
                     <div class="card shadow border-0">
                         <svg class="bd-placeholder-img card-img-top" width="100%" height="225">
                             <image class="image-package" href="image/MieAyam.jpg" />
                         </svg>
                         <div class="card-body">
                             <h4>Mie Ayam Pangsit</h4>
                             <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque,
                                 sequi.
                             </p>
                             <div class="d-flex justify-content-between align-items-center">
                                 <div class="btn-group">
                                     <button type="button" class="btn btn-sm btn-outline-warning">Rp. 15.000</button>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-md-6 col-lg-4 col-xl-4 p-2 makanan">
                    <div class="card shadow border-0">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225">
                            <image class="image-package" href="image/MieAyam.jpg" />
                        </svg>
                        <div class="card-body">
                            <h4>Mie Ayam Pangsit</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque,
                                sequi.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-warning">Rp. 15.000</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-4 p-2 minuman">
                    <div class="card shadow border-0">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225">
                            <image class="image-package" href="image/MieAyam.jpg" />
                        </svg>
                        <div class="card-body">
                            <h4>Mie Ayam Pangsit</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque,
                                sequi.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-warning">Rp. 15.000</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-4 p-2 makanan">
                    <div class="card shadow border-0">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225">
                            <image class="image-package" href="image/MieAyam.jpg" />
                        </svg>
                        <div class="card-body">
                            <h4>Mie Ayam Pangsit</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque,
                                sequi.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-warning">Rp. 15.000</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- end of collection -->
 <script>
    document.addEventListener('DOMContentLoaded', () => {
      // Mengambil semua tombol filter
      const filterButtons = document.querySelectorAll('.btn-warning, .btn-outline-warning');
  
      // Mengambil semua elemen card
      const cards = document.querySelectorAll('.card');
  
      // Menambahkan event listener pada setiap tombol filter
      filterButtons.forEach(button => {
        button.addEventListener('click', () => {
          // Menghapus class "active" dari semua tombol filter
          filterButtons.forEach(btn => btn.classList.remove('active'));
  
          // Menambahkan class "active" pada tombol yang diklik
          button.classList.add('active');
  
          // Mengambil kategori dari tombol yang diklik
          const category = button.textContent.toLowerCase();
  
          // Menampilkan atau menyembunyikan card berdasarkan kategori
          cards.forEach(card => {
            const cardCategory = card.querySelector('.card-category').textContent.toLowerCase();
  
            if (category === 'all' || cardCategory === category) {
              card.style.display = 'block';
            } else {
              card.style.display = 'none';
            }
          });
        });
      });
    });
  </script>
  