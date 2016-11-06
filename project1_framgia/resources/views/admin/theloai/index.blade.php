@extends('admin.layout.index')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sach the loai</h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Ten</th>
                        <th>Ten khong dau</th>
                        <th>Delete</th>
                        <th>Edit</th>    
                    </tr>
                </thead>
                <tbody>
                    <?php $stt = 1; ?>
                    @foreach ($list as $item)
                    <tr class="odd gradeX" align="center">
                       <td>{{ $stt++ }}</td>
                       <td>{{ $item->Ten }}</td>
                       <td>{{ $item->TenKhongDau }}</td>
                       <td class="center"><a href="#"><i class="fa fa-trash-o  fa-fw"></i> Delete</a></td>
                       <td class="center">
                          <a href="{{ route('theloai.edit', $item->id) }}"><i class="fa fa-pencil fa-fw"></i>Edit</a>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
      </div>
      {{ $list->links() }}
      <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</div>
@stop