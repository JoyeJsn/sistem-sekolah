<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
    <link rel="stylesheet" href="/css/output.css">
</head>

<body class="min-h-screen flex flex-col bg-gray-100">
<header class="bg-gray-600 text-white">
    <div class="flex items-center justify-between container mx-auto p-4">
        <a href="/students" class="font-bold text-xl">Sistem Sekolah</a>
        <a href="/students/create" class="bg-white text-black px-4 py-2 rounded-lg">+ Tambah Siswa</a>
    </div>
</header>
    <!-- Main Content -->
    <main class="grow container mx-auto">
        <div class="mt-8 space-y-4">
            <!--Card Header start-->
            <div class="bg-white shadow rounded-lg p-4">
                <h1 class="text-2xl font-bold ">Tambah Siswa</h1>
                <p>Menambahkan siswa ke dalam sistem sekolah</p>
            </div>
            <!--Card Header End-->
            <!--Card Content start-->
            <div class="bg-white shadow rounded-lg p-4">
                <form action="" class="p-4 grid grid-cols-2 gap-4">
                    <div class="space-y-2">
                        <label for="name" class="block font-bold">Nama</label>
                        <input class="w-full border rounded-lg py-2 px-4" type="text" name="name" id="name" 
                            placeholder="Masukkan nama">
                    </div>
                    <div class="space-y-2">
                        <label for="name" class="block font-bold">NIS</label>
                        <input class="w-full border rounded-lg py-2 px-4" type="text" name="nis" id="nis" 
                            placeholder="Masukkan NIS">
                    </div>
                    <div class="space-y-2">
                        <label for="name" class="block font-bold">Kelas</label>
                        <input class="w-full border rounded-lg py-2 px-4" type="text" name="kelas" id="kelas" 
                            placeholder="Masukkan Kelas">
                    </div>
                    <div class="space-y-2">
                        <label for="name" class="block font-bold">No Telepon</label>
                        <input class="w-full border rounded-lg py-2 px-4" type="text" name="phone_number" id="phone_number" 
                            placeholder="Masukkan No Telepon">
                    </div>
                </form>
            </div>
            <!--Card Content End-->
        </div>
    </main>
    <!-- End of Main Content -->
<!-- Footer -->
 <footer class="bg-gray-800 text-white">
    <div class="text-center p-4">
        &copy <?= date('Y')?> - Sistem Sekolah SMK Kristen Immanuel
    </div>
 </footer>
 <!-- End of Footer -->
</body>
</html>