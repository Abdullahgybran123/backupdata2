

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('layouts/_flash')
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle" id="dataTable">

                                        <form action="{{ route('supplier.destroy', $data->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-outline-danger"
                                                onclick="return confirm('Apakah Anda Yakin?')">Delete
                                            </button>
                                        </form>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>