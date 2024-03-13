@extends('layout.layout')
@section('content')
<div class="content-body">
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">{{ $title }}</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">{{ $title }}</a></li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    @foreach ($data_diskon as $d)
                    <form method="POST" action="/setdiskon/update/{{ $d->id }}">
                        @csrf
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">{{ $title }}</h4>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="total_belanja">Total Belanja</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text">Rp.</span>
                                    </div>
                                    <input type="number" class="form-control" name="total_belanja" id="" value="{{ $d->total_belanja }}" placeholder="Total Belanja..." required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="total_belanja">Diskon</label>
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" name="diskon" id="" value="{{ $d->diskon }}" placeholder="Diskon..." required>
                                    <div class="input-group-prepend"><span class="input-group-text">%</span>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Save Changes</button>
                    </div>
                </form>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
