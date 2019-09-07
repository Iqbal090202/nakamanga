@extends('/backend/layouts/t_index')

@section('isi')
    
    <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Komik - <strong>UBAH DATA</strong> - <a href="https://www.malasngoding.com/category/laravel" target="_blank">www.nakamanga.com</a>
                </div>
                <div class="card-body">
                    <a href="/komik" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                <form method="post" action="/komik/update/{{ $komik->id }}">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Judul Komik</label>
                            <input type="text" name="judul_komik" class="form-control" placeholder="Judul komik .." value="{{ $komik->judul_komik }}">

                            @if($errors->has('judul_komik'))
                                <div class="text-danger">
                                    {{ $errors->first('judul_komik')}}
                                </div>
                            @endif
						</div>

                        <div class="form-group">
                            <label>Sinopsis</label>
                            <textarea name="sinopsis" class="form-control" placeholder="Sinopsis ..">{{ $komik->sinopsis }}</textarea>

                            @if($errors->has('sinopsis'))
                                <div class="text-danger">
                                    {{ $errors->first('sinopsis')}}
                                </div>
                            @endif
                        </div>
						
						<div class="form-group">
                            <label>Author</label>
                            <input type="text" name="author" class="form-control" placeholder="Author .." value="{{ $komik->author }}">

                            @if($errors->has('author'))
                                <div class="text-danger">
                                    {{ $errors->first('author')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Tahun</label>
                            <input type="year" name="tahun" class="form-control" placeholder="Tahun .." value="{{ $komik->tahun }}">

                            @if($errors->has('tahun'))
                                <div class="text-danger">
                                    {{ $errors->first('tahun')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>

@endsection