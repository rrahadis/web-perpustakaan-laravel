<a href ="{{ route('book.edit', $model) }}" class="btn btn-warning">Edit</a>
<button href ="{{ route('book.destroy', $model) }}" class="btn btn-danger" id="delete">Delete</button>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>
    $('button#delete').on('click', function(e){
        e.stopImmediatePropagation();
        
        var href = $(this).attr('href');
        
        Swal.fire({
        title: 'yakin untuk hapus?',
        text: 'data yang dihapus tidak bisa dikembalikan!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Iya, hapus saja!'
        }).then((result) => {
         if (result.value) {

            document.getElementById('deleteForm').action = href;
            document.getElementById('deleteForm').submit();
        
            Swal.fire(
            'Terhapus',
            'data kamu berhasil di hapus!',
            'success'
              )
            }
        })
    })
</script>
