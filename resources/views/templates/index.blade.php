<!dOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <title>Templates</title>
</head>

<body>

    <div class="container my-4">
        <div class="row">
            <div class="col-8">
                <h1 class="my-3">Template List</h1>

                <div style="display:flex;justify-content:end">
                    <a href="{{ route('templates.create') }}" class="btn btn-primary">Add</a>

                </div>

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
                            @foreach ($templates as $template)
                                <tr>
                                    <th scope="row"> <strong>{{ $loop->iteration }}</strong></th>
                                    <td>{{ $template->note }}</td>
                                    <td><span
                                            class="badge rounded-pill @if ($template->is_active) bg-success @else bg-danger @endif me-1">{{ $template->is_active ? 'Active' : 'In-Active' }}</span>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('templates.edit', $template->id) }}">
                                            Edit</a>
                                        <a class="btn btn-danger"
                                            href="{{ route('templates.destroy', $template->id) }}"> Delete</a>


                                        @method('delete')

                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>




                </div>
            </div>



        </div>
    </div>

</body>

</html>
