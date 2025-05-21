<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Biodata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .header-img { max-width: 200px; border-radius: 50%; }
        .nav-link { color: white !important; }
        .card-project img, .card-product img { height: 150px; object-fit: cover; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">FAWZIUK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#products">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="text-center mb-4">
            <h1>Hi! I am Fawzi Sayed</h1>
            <h2>Web Developer</h2>
            <img src="https://picsum.photos/200" alt="Profile" class="header-img mb-3">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam nemo beatae perspiciatis.</p>
            <button class="btn btn-primary">Download CV</button>
        </div>

        <div class="row mb-4" id="about">
            <h2 class="text-primary">About Me</h2>
            <p>A brief introduction about myself</p>
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Full Name</h5>
                            <p class="card-text">[Nama Anda]</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Education</h5>
                            <p class="card-text">[Pendidikan Anda]</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Contact</h5>
                            <p class="card-text">[Kontak Anda]</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Hobby</h5>
                            <p class="card-text">[Hobi Anda]</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Experience</h5>
                            <p class="card-text">[Pengalaman Anda]</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Alamat</h5>
                            <p class="card-text">[Alamat Anda]</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="projects">
            <h2 class="text-primary">My Projects</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card card-project">
                        <img src="https://picsum.photos/300" class="card-img-top" alt="Project 1">
                        <div class="card-body">
                            <p class="card-text">A-Calling Landing Page</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-project">
                        <img src="https://picsum.photos/300" class="card-img-top" alt="Project 2">
                        <div class="card-body">
                            <p class="card-text">Business Landing Page</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-project">
                        <img src="https://picsum.photos/300" class="card-img-top" alt="Project 3">
                        <div class="card-body">
                            <p class="card-text">Ecomm Web Page</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Produk -->
        <div class="row mt-5" id="products">
            <h2 class="text-primary">Our Products</h2>
            <div class="mb-3">
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addProductModal">Add Product</button>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php
                // Read: Mengambil data produk dari database
                $stmt = $pdo->query("SELECT * FROM products");
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo '
                    <div class="col">
                        <div class="card card-product">
                            <img src="https://picsum.photos/300" class="card-img-top" alt="' . htmlspecialchars($row['nama_produk']) . '">
                            <div class="card-body">
                                <h5 class="card-title">' . htmlspecialchars($row['nama_produk']) . '</h5>
                                <p class="card-text">' . htmlspecialchars($row['deskripsi']) . '</p>
                                <p class="card-text"><strong>Rp ' . number_format($row['harga'], 0, ',', '.') . '</strong></p>
                                <p class="card-text">Stock: ' . htmlspecialchars($row['stok']) . '</p>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editProductModal" onclick="setEditModal(' . $row['id'] . ', \'' . htmlspecialchars($row['nama_produk']) . '\', ' . $row['harga'] . ', \'' . htmlspecialchars($row['deskripsi']) . '\', ' . $row['stok'] . ')">Edit</button>
                                <a href="delete.php?id=' . $row['id'] . '" class="btn btn-danger" onclick="return confirm(\'Are you sure you want to delete this product?\')">Delete</a>
                            </div>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Modal untuk Tambah Produk -->
    <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="create.php" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addProductModalLabel">Add Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama_produk" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Price</label>
                            <input type="number" class="form-control" id="harga" name="harga" required>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Description</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="stok" class="form-label">Stock</label>
                            <input type="number" class="form-control" id="stok" name="stok" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal untuk Edit Produk -->
    <div class="modal fade" id="editProductModal" tabindex="-1" aria-labelledby="editProductModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="update.php" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editProductModalLabel">Edit Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="edit_id" name="id">
                        <div class="mb-3">
                            <label for="edit_nama_produk" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="edit_nama_produk" name="nama_produk" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_harga" class="form-label">Price</label>
                            <input type="number" class="form-control" id="edit_harga" name="harga" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_deskripsi" class="form-label">Description</label>
                            <textarea class="form-control" id="edit_deskripsi" name="deskripsi" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="edit_stok" class="form-label">Stock</label>
                            <input type="number" class="form-control" id="edit_stok" name="stok" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Fungsi untuk mengisi modal edit
        function setEditModal(id, nama_produk, harga, deskripsi, stok) {
            document.getElementById('edit_id').value = id;
            document.getElementById('edit_nama_produk').value = nama_produk;
            document.getElementById('edit_harga').value = harga;
            document.getElementById('edit_deskripsi').value = deskripsi;
            document.getElementById('edit_stok').value = stok;
        }

        // Modal untuk proyek
        document.querySelectorAll('.card-project').forEach(card => {
            card.addEventListener('click', () => {
                new bootstrap.Modal(document.getElementById('exampleModal')).show();
            });
        });
    </script>
</body>
</html>