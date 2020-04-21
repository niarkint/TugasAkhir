$(document).ready(function() {
    $.ajax({
        url: base_url + 'C_pegawai/getDataAll',
        type: 'get',
        success: function(res) {
            var responseJson = JSON.parse(res);
            $.each(responseJson, function(index, value) {
                $('#datatable tbody').append(`
                <tr>
                    <td>` + value.nama_pegawai + `</td>
                    <td>` + value.jabatan + `</td>
                    <td>` + value.username + `</td>
                    <td>` + value.no_telp + `</td>
                    <td>` + value.alamat + `</td>
                    <td>
                        <button class="btn btn-sm btn-warning" onclick="pegawai.edit(${value.id_pegawai})"><i class="fas fa-edit"></i> Edit</button>
                        <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> hapus</button>
                </tr>
                    `);
            });

            $('body').append(
                '<script src="' + base_url + 'assets/plugins/datatables/jquery.dataTables.js")></script>',
                '<script src="' + base_url + 'assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js")></script>'
            )
        }
    })
})

var pegawai = {
    edit: function(id) {
        $.ajax({

        })
    },
    delete: function(id) {

    }
}