<button href ="{{ route('borrow.return', $model) }}" class="btn btn-info" id="return">Pengembalian</button>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>
    $('button#return').on('click', function(e){
        e.stopImmediatePropagation();
        
        var href = $(this).attr('href');
        
        Swal.fire({
        title: 'yakin sudah dikembalikan?',
        text: 'pastikan data sudah benar',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Iya, Betul!'
        }).then((result) => {
         if (result.value) {

            document.getElementById('returnForm').action = href;
            document.getElementById('returnForm').submit();
        
            Swal.fire(
            'Dikembalikan',
            'buku berhasil dikembalikan',
            'success'
              )
            }
        })
    })
</script>

