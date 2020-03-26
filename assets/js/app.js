$(document).ready(function() {
    $('#tbProduk').DataTable({
        "columns": [
            { "width": "5%" },
            { "width": "10%" },
            null,
            null,
            { "width": "11%" },
            { "width": "8%" },
        ]
    });
});

// Confirm sebelum hapus produk
function del($url) {
    swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'Warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
            location.href = '/' + $url;
        }
    })
}
