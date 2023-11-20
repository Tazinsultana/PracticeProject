
    <div class="card">
        <div class="d-flex flex-row justify-content-between align-items-center">
            <h5 class="card-header">Floor List</h5>
            <a class="btn btn-md btn-primary h-100 " style="margin-right: 1rem;" href="{{ route('floors.create') }}">Add
                Template</a>
        </div>
        {{-- @if (session('message'))
            <div>
                <div class="alert alert-primary alert-dismissible mx-2" role="alert">
                    {{session('message')}}

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif --}}

        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Note</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                {{-- <tbody class="table-border-bottom-0">
                    @foreach ($floors as $floor)
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                <strong>{{ $loop->iteration }}</strong>
                            </td>
                            <td>{{ $floor->title }}</td>

                            <td><span
                                    class="badge rounded-pill @if ($floor->is_active) bg-success @else bg-danger @endif me-1">{{ $floor->is_active ? 'Active' : 'In-Active' }}</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('floors.edit', $floor->id) }}"><i
                                                class="bx bx-edit-alt me-1"></i>
                                            Edit</a>
                                        <form action="{{ route('floors.destroy', $floor->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="dropdown-item" href="javascript:void(0);"><i
                                                    class="bx bx-trash me-1"></i>
                                                Delete</button>
                                        </form>

                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach


                </tbody> --}}
                </tbody>
            </table>
        </div>
    </div>
@endsection
