<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.1.min.js" 
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/gh/agoenxz2186/submitAjax@develop/submit_ajax.js"
    ></script>
<link href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet"> 
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>



<table id='table-kehadiran_siswa' class="datatable table table bondered">
    <thead>
        <tr>
            <th>Kahadiran Guru Id</th>
            <th>Siswa Id</th>
            <th>Status Hadir</th>
        </tr>
    </thead>
</table>

<script>
    $(document). ready(function(){
        $('table#table-kehadiran_siswa').Datatable({
        processing: true,
        serverSide: true,
        ajax:{
            url: "<?=base_url('penggguna all')?>",
        },
        columns: [
            { data: 'id', sortable:false, searchable:false,
            render: (data,type,row,meta)=>{
                return meta.setting._iDisplayStart + meta.row +1;
                }
            },
            { data: 'kehadiran_guru_id',},
            { data: 'siswa_id',},
            { data: 'status_hadir',
                render: (data, tyle, meta, row)=>{
                    if(data === 'Y'){
                        return 'Hadir';
                    }else if( data ==='N'){
                        return 'Tidak';
                    }
                    return data;
                }    
            },
            { data: 'id',
            render: (data, type, meta, row)=>{
                var btnEdit = <button class='btn-edit' data-id='${data}'> Edit </button>;
                var btnHapus = <button class='btn-hapus' data-id='${data}'> Hapus </button>;
                return btnEdit + btnHapus;
                }
            }

            ]
    });
});
</script>