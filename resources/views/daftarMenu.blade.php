<div id="daftarMenu">
    <link rel="stylesheet" href="css/daftarMenu.css">

<section class="py-5 mt-5 text-center container">
    <div class="row">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="DaftarMenu">Daftar Menu</h1>
            <p class="lead text-body-secondary">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit
                enim veritatis minima animi sequi, eveniet repellat.</p>
            <p>
                <a class="btn btn-lg btn-outline-warning filter-button" data-category="all"
                    onclick="toggleButton(this)">Semua</a>
                <a class="btn btn-lg btn-outline-warning filter-button" data-category="makanan"
                    onclick="toggleButton(this)">Makanan</a>
                <a class="btn btn-lg btn-outline-warning my-2 filter-button" data-category="minuman"
                    onclick="toggleButton(this)">Minuman</a>
            </p>
        </div>
    </div>
</section>

<div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
        <!-- Mulai perulangan di sini -->
        <?php
        $menu = [
            [
                "image" => "https://kelas-work.s3.ap-southeast-1.amazonaws.com/bucket-prod-98123hsandknaknd1u3/upload/files/img/blog_cover/blogcover-pql64016df65c0bd.webp",
                "title" => "Mie Ayam Pangsit",
                "category" => "makanan",
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, sequi.",
                "price" => "Rp. 15.000"
            ],
            [
                "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTt2OhOZPS2u8YUpG2MqET9CwKK1LrDYwZGrA&usqp=CAU",
                "title" => "Es Teh Manis",
                "category" => "minuman",
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, sequi.",
                "price" => "Rp. 10.000"
            ],
            [
                "image" => "https://kelas-work.s3.ap-southeast-1.amazonaws.com/bucket-prod-98123hsandknaknd1u3/upload/files/img/blog_cover/blogcover-pql64016df65c0bd.webp",
                "title" => "Nasi Goreng",
                "category" => "makanan",
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, sequi.",
                "price" => "Rp. 10.000"
            ],
            [
                "image" => "https://kelas-work.s3.ap-southeast-1.amazonaws.com/bucket-prod-98123hsandknaknd1u3/upload/files/img/blog_cover/blogcover-pql64016df65c0bd.webp",
                "title" => "Mie Ayam Pangsit",
                "category" => "makanan",
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, sequi.",
                "price" => "Rp. 15.000"
            ],
            [
                "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTt2OhOZPS2u8YUpG2MqET9CwKK1LrDYwZGrA&usqp=CAU",
                "title" => "Es Teh Manis",
                "category" => "minuman",
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, sequi.",
                "price" => "Rp. 10.000"
            ],
            [
                "image" => "https://kelas-work.s3.ap-southeast-1.amazonaws.com/bucket-prod-98123hsandknaknd1u3/upload/files/img/blog_cover/blogcover-pql64016df65c0bd.webp",
                "title" => "Nasi Goreng",
                "category" => "makanan",
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, sequi.",
                "price" => "Rp. 10.000"
            ],
            [
                "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTt2OhOZPS2u8YUpG2MqET9CwKK1LrDYwZGrA&usqp=CAU",
                "title" => "Es Teh Manis",
                "category" => "minuman",
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, sequi.",
                "price" => "Rp. 10.000"
            ],
            [
                "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTt2OhOZPS2u8YUpG2MqET9CwKK1LrDYwZGrA&usqp=CAU",
                "title" => "Es Teh Manis",
                "category" => "minuman",
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, sequi.",
                "price" => "Rp. 10.000"
            ],
            
        ];

        foreach ($menu as $item) {
            $image = $item["image"];
            $title = $item["title"];
            $category = $item["category"];
            $description = $item["description"];
            $price = $item["price"];
        ?>

        <div class="col">
            <div class="card shadow border-0">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225">
                    <image class="image-package" href="{{ $image }}" />
                </svg>
                <div class="card-body">
                    <h4 class="card-title" data-category="<?php echo $category; ?>"><?php echo $title; ?></h4>
                    <p class="card-text"><?php echo $description; ?></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-warning"><?php echo $price; ?></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
}
?>
        <!-- Akhir perulangan -->
    </div>
</div>


<script>
    const filterButtons = document.querySelectorAll('.filter-button');
    const cardTitles = document.querySelectorAll('.card-title');

    filterButtons.forEach((button) => {
        button.addEventListener('click', () => {
            const category = button.getAttribute('data-category');

            cardTitles.forEach((title) => {
                const cardCategory = title.getAttribute('data-category');

                if (category === 'all' || category === cardCategory) {
                    title.closest('.col').style.display = 'block';
                } else {
                    title.closest('.col').style.display = 'none';
                }
            });
        });
    });


    function toggleButton(button) {
        var buttons = document.getElementsByClassName("filter-button");
        for (var i = 0; i < buttons.length; i++) {
            buttons[i].classList.remove("active"); // Menghapus kelas "active" dari semua tombol
        }

        button.classList.add("active"); // Menambahkan kelas "active" pada tombol yang diklik
    }
</script>

</div>