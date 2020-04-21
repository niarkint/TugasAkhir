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
                        <button class="btn btn-sm btn-danger" onclick="pegawai.delete(${value.id_pegawai})"><i class="fas fa-trash"></i> hapus</button>
                </tr>
                    `);
            });
            $("head link[rel='stylesheet']").last().after("<link rel='stylesheet' href='" + base_url + "assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css' type='text/css' media='screen'>");

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
            url: base_url + 'C_pegawai/getDataById/' + id,
            type: 'get',
            success: function(res) {
                alert('berhasil');
                pegawai.fetch_data();
            },
            error: function(res) {
                alert(res)
            }
        })
    },
    delete: function(id) {
        $.ajax({
            url: base_url + 'C_pegawai/deleteDataById/' + id,
            type: 'get',
            success: function(res) {
                alert('berhasil');
                pegawai.fetch_data();
            },
            error: function(res) {
                alert(res)
            }
        })
    },
    fetch_data: function() {
        var dataTable = $('#datatable').DataTable();
        dataTable.clear();
        dataTable.destroy();
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
                        <button class="btn btn-sm btn-danger" onclick="pegawai.delete(${value.id_pegawai})"><i class="fas fa-trash"></i> hapus</button>
                </tr>
                    `);
                });

                $("head link[rel='stylesheet']").last().after("<link rel='stylesheet' href='" + base_url + "assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css' type='text/css' media='screen'>");

                $('body').append(
                    '<script src="' + base_url + 'assets/plugins/datatables/jquery.dataTables.js")></script>',
                    '<script src="' + base_url + 'assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js")></script>'
                )
            }
        })
    }
}

$('#form_input').submit(function(e) {
    e.preventDefault();
    $.ajax({
        url: base_url + 'C_pegawai/save',
        type: 'post',
        data: $('#form_input').serialize(),
        success: function(res) {
            alert('berhasil');
            pegawai.fetch_data();
        }
    })
});