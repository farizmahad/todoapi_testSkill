<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Store - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background:linear-gradient(rgba(47, 23, 15, 0.65), rgba(47, 23, 15, 0.65)), url('assets/img/bg.jpg');">
    <section class="page-section cta">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-11 col-md-12 col-lg-12 col-xl-12 mx-auto">
                    <div class="cta-inner text-center rounded p-3">
                        <h2 class="section-heading mb-5"><span class="section-heading-upper">Come On In</span><span class="section-heading-lower">To-do list</span></h2>
                        <form action="/todo/save" method="post">
                            {{ csrf_field() }}
                            <div class="form-row mb-xl-0 mb-lg-0 mb-md-0 mb-sm-0 mb-3">
                                <div class="col-md-4 col-lg-3 col-xl-3">
                                    <div>
                                        <div class="form-group">
                                            <textarea class="form-control form-control-lg text-size" name="nameTodo" placeholder="Isi To-Do"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3 col-xl-1">
                                    <div class="text-right text-sm-right text-md-left text-lg-left text-xl-left"><button class="btn btn-primary btn-sm text-size" type="submit">Tambah</button></div>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive text-size">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>To-Do</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;?>
                                    @foreach($todo as $m) 
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$m->todo}}</td>
                                        <td>
                                            @if($m->status =='Undone')
                                                <button class="btn btn-danger btn-sm text-size mr-1" type="button">{{$m->status}}</button></td>
                                            @else
                                                <button class="btn btn-success btn-sm text-size mr-1" type="button">{{$m->status}}</button></td>
                                            @endif
                                        
                                        <td>
                                            @if($m->status =='Undone') 
                                                <a href="/todo/update_done/{{ $m->id }}" class="btn btn-info btn-sm mr-1"> <i class="fas fa-check text-size"></i> </a>
                                            @else
                                                <a href="/todo/update_undone/{{ $m->id }}" class="btn btn-danger btn-sm mr-1"> <i class="fas fa-check text-size"></i> </a>
                                            @endif
                                            
                                            <!-- <button class="btn btn-success btn-sm mr-1 edit_button" type="button" data-toggle="modal" data-target="#editTodo"
                                            
                                            data-id="<//?php echo $m->id;?>"
                                            data-todo="<//?php echo $m->todo;?>"
                                            data-status="<//?php echo $m->status;?>">
                                            
                                            <i class="fas fa-pencil-alt text-size"></i></button> -->

                                            <!-- <a href="/todo/update_open/{{ $m->id }}" class="btn btn-success btn-sm mr-1"> <i class="fas fa-pencil-alt text-size"></i> </a> -->
                            
                                            <a href="/todo/delete/{{ $m->id }}" class="btn btn-danger btn-sm mr-1"> <i class="fas fa-trash-alt text-size"></i> </a>
                                        </td>
                                    </tr>
                                    <tr></tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" role="dialog" tabindex="-1" id="editTodo">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit To-Do</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <form action="/todo/ubah" method="post"> 
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div>
                            <div class="form-group"><label>To-Do</label><textarea class="form-control todo" name="nameTodo" placeholder="Isi To-Do"></textarea></div>
                            <div class="form-group"><input type="text" class="form-control id" name="id"></div>
                            <div class="form-group"><input type="text" class="form-control status" name="status"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-light btn-sm text-size" type="button" data-dismiss="modal">Tutup</button>
                        <button class="btn btn-primary btn-sm text-size" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/current-day.js"></script>

    <script></script>
    <script >
        $(document).on( "click", '.edit_button',function(e) {
            var id= $(this).data('id');
            var todo = $(this).data('todo');
            var status = $(this).data('status');
            
            $(".id").val(id);
            $(".todo").val(todo);
            $(".status").val(status);
        });
        
            
    </script>
</body>

</html>