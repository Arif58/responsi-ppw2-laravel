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
                        Foto
                      </th>
                      <th>
                        Nama Tempat
                      </th>
                      <th>
                        No Telpon
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
                          <img src="{{ asset('storage/'.$tmpt->foto) }}" class="img-fluid mt-3" style="width: 150px; height:80px;">   
                        </td>
                        <td>
                          {{ $tmpt->nama_tempat }}
                        </td>
                        <td>
                          {{ $tmpt->no_telp }}
                        </td>
                        <td class="d-flex justify-content-center align-items-center flex-wrap" style="padding: 41px 0px;">
                            <div class="me-3">
                                <form action="#" method="post">
                                @csrf
                                    <button class="btn btn-danger" onClick="return confirm('Yakin mau dihapus?')">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                            <div>
                                <a class="btn btn-warning" href="#">
                                    Edit
                                </a>
                            </div>                        
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection
