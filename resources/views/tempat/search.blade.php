@extends('layout.template')
@section('content')
    <div class="content">

        <div class="row">
          <div class="col-md-2 offset-md-9">
            <a class="btn btn-secondary" href="{{ route('tempat.create') }}"><p>Tambah Tempat</p></a>
          </div>
          <div class="col-md-10 mx-auto">
            <div class="card">
              <div class="card-header mx-auto">
                <h4 class="card-title">Tempat Makan</h4>    
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
                        Foto
                      </th>
                      <th>
                        Aksi
                      </th>
                    </thead>
                    <tbody>
                      @foreach($tmpt_mkn as $tmpt)
                      <tr>
                        <td>
                          {{ ++$no }}
                        </td>
                        <td>
                          {{ $tmpt->places->nama_kota }}
                        </td>
                        <td>
                          {{ $tmpt->nama_tempat }}
                        </td>
                        <td>
                          <img src="{{ asset('storage/'.$tmpt->foto) }}" class="img-fluid mt-3" style="width: 150px; height:80px;">   
                        </td>
                        <td class="d-flex justify-content-center align-items-center flex-wrap" style="padding: 41px 0px;">
                            <div class="me-3">
                                <form action="{{ route('tempat.destroy', $tmpt->id) }}" method="post">
                                @csrf
                                    <button class="btn btn-danger" onClick="return confirm('Yakin mau dihapus?')">
                                      <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                            <div>
                                <a class="btn btn-warning" href="{{ route('tempat.edit', $tmpt->id) }}">
                                  <i class="far fa-edit"></i>
                                </a>
                            </div>                        
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                    <div class="container-fluid">{{ $tmpt_mkn->links() }}</div>
                    <div class="justify-content-center">
                        @if(count($tmpt_mkn))
                            <div class="alert alert-primary">Ditemukan <strong>{{count($tmpt_mkn)}}</strong> data dengan kata: <strong>{{ $cari }}</strong></div>
                        @else
                            <div class="alert alert-danger">Data <strong>{{ $cari }}</strong> tidak ditemukan</div>
                        @endif 
                    </div>
                    <div class="navbar navbar-light">
                      <div class="container-fluid">
                        <form action="{{ route('tempat.search') }}" method="get">
                          @csrf
                          <input type="text" name="kata" class="form-control me-2" placeholder="Cari Tempat ..." aria-label="Search">
                          <button class="btn btn-outline-success" type="submit">Cari</button>
                        </form>
                      </div>
                    </div>
                    
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection
