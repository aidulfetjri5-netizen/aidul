<x-layout>
  <x-slot:title>About Us</x-slot:title>

  <div class="max-w-5xl mx-auto py-10 px-6">
    <!-- About Platform -->
    <section class="mb-12">
      <h1 class="text-3xl font-bold text-gray-800 mb-4">About Our Platform</h1>
      <p class="text-gray-600 leading-relaxed">
        Website ini adalah platform untuk membaca dan menulis artikel. 
        Kami percaya bahwa berbagi pengetahuan akan membantu memperluas wawasan semua orang. 
        User bisa menikmati konten dari berbagai author, dan author bisa berbagi ide, pengalaman, dan ilmu.
      </p>
    </section>

    <!-- About User -->
    <section class="mb-12">
      <h2 class="text-2xl font-semibold text-blue-600 mb-3">For Users</h2>
      <div class="bg-white rounded-lg shadow p-6 space-y-3">
        <p class="text-gray-600">
          Sebagai <span class="font-medium">User</span>, kamu dapat:
        </p>
        <ul class="list-disc list-inside text-gray-600 space-y-2">
          <li>Membaca artikel terbaru dari berbagai author.</li>
          <li>Menemukan wawasan baru di berbagai bidang.</li>
        </ul>
      </div>
    </section>

    <!-- About Author -->
    <section>
      <h2 class="text-2xl font-semibold text-green-600 mb-3">For Authors</h2>
      <div class="bg-white rounded-lg shadow p-6 space-y-3">
        <p class="text-gray-600">
          Sebagai <span class="font-medium">Author</span>, kamu dapat:
        </p>
        <ul class="list-disc list-inside text-gray-600 space-y-2">
          <li>Membuat dan mempublikasikan artikel sendiri.</li>
          <li>Berbagi pengalaman, ide, atau ilmu dengan pembaca.</li>
          <li>Membangun reputasi sebagai penulis di komunitas.</li>
        </ul>
        <p class="text-gray-600">
          Selain author, <span class="font-medium">Admin</span> juga bertugas mengelola artikel dan user, 
          tapi tetap bisa menulis layaknya author.
        </p>
      </div>
    </section>
  </div>
</x-layout>
