<!dOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Templates</title>
</head>

<body>

    <div class="container my-4">
        <div class="row">
            <div class="col-8">
                <h1 class="my-3"> Edit Template List</h1>

                <div style="display:flex;justify-content:end">
                    <a href="{{ route('templates.index') }}" class="btn btn-primary">List</a>

                </div>
                @if ($errors->has('message'))
                    <div class="error">{{ $errors->first('message') }}</div>
                @endif



                <form action="{{ route('templates.update', $template->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <x-forms.input title="Template Note" name="note" type="text" placeholder="Hi Mr..."
                            :value="$template->note" />

                    </div>

                    <div class="mb-3 form-check">
                        <x-forms.checkbox title="Is Active ? " name="is_active" :checked="$template->is_active" />

                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</body>

</html>
