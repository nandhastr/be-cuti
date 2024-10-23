<x-layouts.main.app :title="$title" >
    <div class="card">
        <div class="card-header">
            <a href="#" class="btn btn-outline-primary"><i class="fa-solid fa-circle-plus"></i> Tambah Data</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Departemen/Divis</th>
                        <th>Jabatan</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pegawai as $row )
                  {{ $row }}
                    <tr>
                        <td>1</td>
                        <td>0101</td>
                        <td>Desi Cantik</td>
                        <td>perempuan</td>
                        <td>X</td>
                        <td>X</td>
                        <td>X</td>
                        <td>X</td>
                        <td class="text-red">Edit / Hapus </td>
                    </tr>
                   @endforeach; 
                    <tr>
                        <td>2</td>
                        <td>0202</td>
                        <td>Nanda Suaminya Desi</td>
                        <td>laki laki</td>
                        <td>X</td>
                        <td>X</td>
                        <td>X</td>
                        <td>X</td>
                        <td class="text-red">Edit / Hapus </td>
                    </tr>
                
                    
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    
</x-layouts.main.app>

<script>
    $(function () {
        $("#example1")
          .DataTable({
            responsive: true,
            lengthChange: false,
            autoWidth: false,
            buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
          })
          .buttons()
          .container()
          .appendTo("#example1_wrapper .col-md-6:eq(0)");
        $("#example2").DataTable({
          paging: true,
          lengthChange: false,
          searching: false,
          ordering: true,
          info: true,
          autoWidth: false,
          responsive: true,
        });
      });
</script>