@extends('partials.layout');

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DaisyUI Login Form Example</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.5/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
<div class="h-screen overflow-hidden">
    <div class="w-full p-6 m-auto bg-dark rounded-md shadow-md lg:max-w-lg">
        <h1 class="text-3xl font-semibold text-center text-white-700">New Article</h1>
        <form action="{{route('articles.store')}}" method="POST">
            @csrf
        <form class="space-y-4">
            <div>
                <label class="label">
                    <span class="text-base label-text">Title</span>
                </label>
                <input name="title" type="text" placeholder="Article Title" class="w-full input input-accent input-primary @error('title') input-error @enderror"/>
                @error('title')
                <label class="label">
                    <span class="label-text-alt text-error">{{$message}}</span>
                </label>
                @enderror
            </div>
            <div>
                <label class="label">
                    <span class="text-base label-text">Content</span>
                </label>
                <textarea name="body" placeholder="Content here" class="textarea input-accent input-primary textarea-lg w-full max-w-lg @error('body') input-error @enderror "></textarea>
                @error('body')
                <label class="label">
                    <span class="label-text-alt text-error">{{$message}}</span>
                </label>
                @enderror

            </div>
            <br>
            <div>
                <button class="btn btn-outline btn-accent w-full max-w-lg">CREATE</button>
            </div>
        </form>
        </form>
    </div>
</div>
@endsection
</body>

</html>
