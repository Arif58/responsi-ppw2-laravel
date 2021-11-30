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
                    <thead class=" text-primary">
                      <th>
                        No
                      </th>
                      <th>
                        Foto
                      </th>
                      <th>
                        Nama Kota
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          1
                        </td>
                        <td>
                          Niger
                        </td>
                        <td>
                          Oud-Turnhout
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection
