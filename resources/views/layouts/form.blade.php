<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Slope Risk Management System</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
        rel="stylesheet" />

</head>

<body class="font-sans antialiased bg-stone-100">
    <main>
        {{ $slot }}
    </main>

    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js">
    </script>
    <script
        src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.js">
    </script>
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>

    <script>
        // get a collection of elements with class filepond
        const inputElements = document.querySelectorAll('input.filestyle');

        // loop over input elements
        Array.from(inputElements).forEach(inputElement => {
        FilePond.registerPlugin(FilePondPluginImagePreview,FilePondPluginFileValidateSize,FilePondPluginImageExifOrientation);
        FilePond.create(inputElement);
        FilePond.setOptions({
            server: {
                process: '/temp-upload',
                revert: '/temp-delete',
                headers: {
                    'X-CSRF-TOKEN': '{{csrf_token()}}'
                },
            },
        });
        })
    </script>
</body>

</html>