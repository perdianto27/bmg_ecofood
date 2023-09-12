@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Data Artikel') }}</div>

                <div class="card-body">
                <button type="button" id="btnAdd" onclick="add()" class="btn btn-primary">Tambah</button>
                <br>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <br>
                    <table id="table" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Thumbnail</th>
                        <th>Tag</th>
                        <th>Penulis</th>
                        <th>Kategori</th>
                        <th>Date</th>
                        <th></th>
                      </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title"></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body form">
          <form action="#" id="form" class="form-horizontal">
            <div class="form-body">
             <div class="form-group">
                <label class="control-label col-md-3">Judul</label>
                <div class="col-md-12">
                <input type="hidden" name="id" class="form-control" id="id" >
                <input type="text" name="judul" class="form-control" id="judul" required="required">
                    <span class="help-block"></span>
                </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-md-3">Isi</label>
                  <div class="col-md-12">
                    <textarea name="isi" id="isi"></textarea>
                    <span class="help-block"></span>
                  </div>
              </div>              
              <div class="form-group">
                  <label class="control-label col-md-3">Thumbnail</label>
                  <div class="col-md-12">
                    <div class="input-group date">
                    <input type="text" id="thumbnail" name="thumbnail" class="form-control">
                    <span class="help-block"></span>
                    </div>
                  </div>
                    <span class="help-block"></span>
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-md-3">Penulis</label>
                  <div class="col-md-8">
                    <input type="text" name="penulis" class="form-control" id="penulis" required="required">
                    <span class="help-block"></span>
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-md-3">Tag</label>
                  <div class="col-md-8">
                      <input type="text" name="tag" class="form-control" id="tag" required="required">
                      <span class="help-block"></span>
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-md-3">Kategori</label>
                  <div class="col-md-8">
                  <input type="text" name="kategori" class="form-control" id="kategori" required="required">
                      <span class="help-block"></span>
                  </div>
              </div>                                                 
                    
            </div>
          </form>
      <div class="modal-footer">
        <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
@endsection
@section('js')
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script type="text/javascript">
  let save_method;//for save method string
  let table;
  $(document).ready(() => {
    //ckeditor
    if (CKEDITOR.instances.content) {
      CKEDITOR.instances.content.destroy();
    }
    CKEDITOR.replace('isi');
    //datatables
    const today = '{{ date("d-m-Y") }}';
    table = $('#table').DataTable({
      "scrollY":"300px",
      "scrollX": true,
      "scrollCollapse": true,
      // "paging": true,
      // dom: 'Bfrtip',
      // "lengthChange": false,
      // "searching": true,
      // "ordering": true,
      // "info": true,
      // "autoWidth": true,
      // "responsive": true,      
      "processing": true, //Feature control the processing indicator.
      "serverSide": true, //Feature control DataTables' server-side processing mode.
      // "order": [], //Initial no order.
      // "iDisplayLength": 10, //display length
       // "bFilter": false,
      // Load data for the table's content from an Ajax source
      "ajax": {
        "url": "{{ route('artikel-ajax-list')}}",
        "type": "POST",
        "dataType": "json",
        "data":{ _token: "{{csrf_token()}}"}
      },
      // "lengthMenu": [
      //   [10, 25, 50, -1],
      //   [10, 25, 50, 'All']
			// ],
      // "pageLength": 10,
      //Set column definition initialisation properties.
      "columnDefs": [
      {
         "targets": [ 5, 7 , 8, -1 ], //last column
         "orderable": false, //set not orderable
         "width": 130
      },
      { "width": 300, "targets": [ 1, 4 ]},
      { "width": 500, "targets": [ 2, 3 ]}
      ],
      "fnDrawCallback": function(nRow, aData, iDisplayIndex){
        $('#table tbody tr').hover(function() {
          $(this).addClass('highlight');
        }, function() {
          $(this).removeClass('highlight');
        });
      }

    });
  });

  function add()
  {
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Add Data'); // Set Title to Bootstrap modal title
  } 

  function edit(id)
  {
    if (CKEDITOR.instances.isi) {
      CKEDITOR.instances.isi.destroy();
    }
    CKEDITOR.replace('isi');
    let url = "{{route('artikel-ajax-edit', ':id')}}";
    url = url.replace(':id', id);
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    // $('#typecot').attr('readonly', true);
    //Ajax Load data from ajax
    $.ajax({
      url : url,
      type: "GET",
      dataType: "JSON",
      success: function(data)
      {
        $('[name="id"]').val(data.id);
        $('[name="judul"]').val(data.judul_artikel);
        CKEDITOR.instances.isi.setData(data.isi_artikel);
        $('[name="thumbnail"]').val(data.thumbnail_artikel);
        $('[name="tag"]').val(data.tag_artikel);
        $('[name="kategori"]').val(data.kategori_artikel);
        $('[name="penulis"]').val(data.penulis);
        $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
        $('.modal-title').text('Edit Data'); // Set title to Bootstrap modal title

      },
      error: function (jqXHR, textStatus, errorThrown)
      {
        Swal('Error get data from ajax');
      }
    });
  }

  function reload_table()
  {
    table.ajax.reload(null,false); //reload datatable ajax 
  }

  function save()
  {
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 
    let url;

    if(save_method == 'add') {
        url = "{{ route('artikel-ajax-create')}}";
    } else {
        url = "{{ route('artikel-ajax-update')}}";
    }

    const isi = CKEDITOR.instances.isi.getData();
    let values = $('#form').serialize()
    values += "&isi=" + isi;
    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: values + "&_token={{ csrf_token() }}",
        dataType: "JSON",
        success: function(response)
        {

            if(response.status === 200) //if success close modal and reload ajax table
            {
              $('#modal_form').modal('hide');
              Swal.fire({
                icon: response.status_desc,
                title: "Sukses",
                text: 'Berhasil disimpan',
              })
              reload_table();
            }else{
              Swal.fire({
                icon: response.status_desc,
                title: "Gagal",
                text: 'Silahkan coba lagi',
              })
            }
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 

        }
    });
  }

  function delete_by_id(id)
  {
    let url = "{{route('artikel-ajax-destroy', ':id')}}";
    url = url.replace(':id', id);
    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : url,
            type: "GET",
            dataType: "JSON",
            success: function(response)
            {
                //if success reload ajax table
                $('#modal_form').modal('hide');
                if(response.status === 200) //if success close modal and reload ajax table
                {
                  $('#modal_form').modal('hide');
                  Swal.fire({
                    icon: response.status_desc,
                    title: "Sukses",
                    text: 'Berhasil dihapus',
                  })
                  reload_table();
                }else{
                  Swal.fire({
                    icon: response.status_desc,
                    title: "Gagal",
                    text: 'Silahkan coba lagi',
                  })
                }
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

    }
  }
</script>
@endsection