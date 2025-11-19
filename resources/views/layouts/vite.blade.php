@php
    $directory = public_path('build/assets');

    if (File::isDirectory($directory)) {
        $files = File::allFiles($directory);

        foreach ($files as $file) {
            $extension = $file->getExtension();

            // Sadece .js ve .css uzantılı dosyaları listele
            if ($extension == 'js') {
                $jsFile = $file->getRelativePathname();
            } elseif ($extension == 'css') {
                $cssFile = $file->getRelativePathname();
            }
        }
    }
@endphp
<link rel="stylesheet" type="text/css" href="{{ asset('build/assets/' . $cssFile) }}">
<link rel="application/javascript" href="{{ asset('build/assets/' . $jsFile) }}">
