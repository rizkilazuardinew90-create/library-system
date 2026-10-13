<form action="{{ route('books.store') }}" method="POST">
    @csrf

    <input type="text" name="title" placeholder="Judul Buku" required>
    <input type="text" name="author" placeholder="Penulis" required>
    <input type="number" name="year" placeholder="Tahun Terbit" required>
    <input type="number" name="stock" placeholder="Jumlah Stok" required>

    <button type="submit">Tambah</button>