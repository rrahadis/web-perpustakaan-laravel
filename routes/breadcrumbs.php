<?php

// Author
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Beranda', route('dashboard'));
});

Breadcrumbs::for('author.index', function ($trail) {
    $trail->push('Beranda', route('dashboard'));
    $trail->push('Penulis', route('author.index'));
});

Breadcrumbs::for('author.create', function ($trail) {
    $trail->push('Beranda', route('dashboard'));
    $trail->push('Penulis', route('author.index'));
    $trail->push('Tambah Penulis', route('author.create'));
});

Breadcrumbs::for('author.edit', function ($trail, $author) {
    $trail->push('Beranda', route('dashboard'));
    $trail->push('Penulis', route('author.index'));
    $trail->push('Ubah Penulis', route('author.edit', $author));
});

// Book
Breadcrumbs::for('book.index', function ($trail) {
    $trail->push('Beranda', route('dashboard'));
    $trail->push('Buku', route('book.index'));
});

Breadcrumbs::for('book.create', function ($trail) {
    $trail->push('Beranda', route('dashboard'));
    $trail->push('Buku', route('book.index'));
    $trail->push('Tambah Buku', route('book.create'));
});

Breadcrumbs::for('book.edit', function ($trail, $book) {
    $trail->push('Beranda', route('dashboard'));
    $trail->push('Buku', route('book.index'));
    $trail->push('Ubah Buku', route('book.edit', $book));
});

//borrow
Breadcrumbs::for('borrow.index', function ($trail) {
    $trail->push('Beranda', route('dashboard'));
    $trail->push('Peminjaman', route('borrow.index'));
});

//topbook
Breadcrumbs::for('report.top-book', function ($trail) {
    $trail->push('Beranda', route('dashboard'));
});

//topbook
Breadcrumbs::for('report.top-user', function ($trail) {
    $trail->push('Beranda', route('dashboard'));
});
?>