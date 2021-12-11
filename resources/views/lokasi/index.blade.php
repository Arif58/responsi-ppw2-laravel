@extends('layout.template')
@section('content')
    <div class="content">
        <div class="row">
          <div class="col-md-2 offset-md-9">
            <a class="btn btn-secondary" href="{{ route('lokasi.create') }}"><p>Tambah Lokasi</p></a>
          </div>
          <div class="col-md-10 mx-auto">
            <div class="card">
              <div class="card-header mx-auto">
                <h4 class="card-title"> Lokasi</h4>
                  
                
              </div>
              <div class="card-body text-center">
                <div class="table-responsive">
                  <table class="table">
                    <thead class="text-primary">
                      <th>
                        No
                      </th>
                      <th>
                        Foto
                      </th>
                      <th>
                        Nama Kota
                      </th>
                      <th>
                        Aksi
                      </th>
                    </thead>
                    <tbody>
                      @foreach($location as $loc)
                      <tr>
                        <td>
                          {{ ++$no }}
                        </td>
                        <td>
                          <img src="{{ asset('storage/'.$loc->foto) }}" class="img-fluid mt-3" style="width: 150px; height:80px;">   
                        </td>
                        <td>
                          {{ $loc->nama_kota}}
                        </td>
                        <td class="d-flex justify-content-center align-items-center flex-wrap" style="padding: 41px 0px;">
                            <div class="me-3">
                                <form action="{{ route('lokasi.destroy', $loc->id) }}" method="post">
                                @csrf
                                    <button class="btn btn-danger" onClick="return confirm('Yakin mau dihapus?')">
                                      <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                            <div>
                                <a class="btn btn-warning" href="{{ route('lokasi.edit', $loc->id) }}">
                                  <i class="far fa-edit"></i>
                                </a>
                            </div>                        
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                    <div>{{ $location->links() }}</div>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection
