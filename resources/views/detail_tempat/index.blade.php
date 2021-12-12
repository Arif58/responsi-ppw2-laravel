@extends('layout.template')
@section('content')
    <div class="content">
        <div class="row">
          <div class="col-md-2 offset-md-9">
            <a class="btn btn-secondary" href="{{ route('detail.create') }}"><p>Tambah Detail</p></a>
          </div>
          <div class="col-md-10 mx-auto">
            <div class="card">
              <div class="card-header mx-auto">
                <h4 class="card-title">Detail Tempat</h4>
                  
                
              </div>
              <div class="card-body text-center">
                <div class="table-responsive">
                  <table class="table">
                    <thead class="text-primary">
                      <th>
                        No
                      </th>
                      <th>
                        Kota
                      </th>
                      <th>
                        Nama Tempat
                      </th>
                      <th>
                        Aksi
                      </th>
                    </thead>
                    <tbody>
                      @foreach($detail as $data)
                      <tr>
                        <td>
                            {{ ++$no }}
                        </td>
                        <td>
                          {{ $data->loct->nama_kota }}
                        </td>
                        <td>
                            {{ $data->details->nama_tempat }}   
                        </td>
                        <td class="d-flex justify-content-center align-items-center flex-wrap" style="padding: 41px 0px;">
                            <div  class="me-2">
                                <a class="btn btn-warning" href="{{ route('detail.view', $data->id) }}">
                                  <i class="far fa-eye"></i>
                                </a>
                            </div>
                            <div class="me-2">
                                <form action="{{ route('detail.destroy', $data->id) }}" method="post">
                                @csrf
                                    <button class="btn btn-danger" onClick="return confirm('Yakin mau dihapus?')">
                                      <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                            <div>
                                <a class="btn btn-warning" href="{{ route('detail.edit', $data->id) }}">
                                  <i class="far fa-edit"></i>
                                </a>
                            </div>                        
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                    <div class="container-fluid">{{ $detail->links() }}</div>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection