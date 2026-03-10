<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="/css/output.css">
</head>

<body class="min-h-screen flex flex-col bg-gray-100">
    <header class="bg-gray-600 text-white">
        <div class="flex justify-between container mx-auto p-4">
            <a href="/students" class="font-bold text-xl">Sistem Sekolah</a>
            <a href="/students/create" class="bg-white text-gray-500 px-4 py-2 rounded-lg">+ Tambah Siswa</a>
        </div>
    </header>

    <main class="grow container mx-auto">
        <div class="mt-8">
            <!--card header start-->
            <div class="bg-white shadow rounded-lg p-4">
                <h1 class="text-xl font-bold">Daftar Siswa</h1>
                <p>Menampilkan daftar siswa yang terdaftar</p>
            </div>
            <!--card header end-->
            
            <!--card content start-->
            <div class="bg-white shadow rounded-lg p-4">

            </div>
        </div>      
    </main>
        
    <footer class="bg-gray-600 text-white p-4">
        <div class="text-center">
            &copy <?= date('y')?> - Sistem Sekolah SMK Kristen Immanuel
        </div>
    </footer>
</body>
</html>