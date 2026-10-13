<form action="{{ route('books.update', $book) }}"
method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="title" value="{{ $book->title }}" placeholder="Judul Buku" required>
    <input type="text" name="author" value="{{ $book->author }}" placeholder="Penulis" required>
    <input type="number" name="year" value="{{ $book->year }}" placeholder="Tahun Terbit" required>
    <input type="number" name="stock" value="{{ $book->stock }}" placeholder="Jumlah Stok" required>

    <button type="submit">Update</button>

</form>