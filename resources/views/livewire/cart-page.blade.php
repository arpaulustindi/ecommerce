<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <div class="container px-4 mx-auto">
      <h1 class="mb-4 text-2xl font-semibold">Keranjang Belanja</h1>
      <div class="flex flex-col gap-4 md:flex-row">
        <div class="md:w-3/4">
          <div class="p-6 mb-4 overflow-x-auto bg-white rounded-lg shadow-md">
            <table class="w-full">
              <thead>
                <tr>
                  <th class="font-semibold text-left">Produk</th>
                  <th class="font-semibold text-left">Harga</th>
                  <th class="font-semibold text-left">Jumlah</th>
                  <th class="font-semibold text-left">Total</th>
                  <th class="font-semibold text-left">Hapus</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-4">
                    <div class="flex items-center">
                      <img class="w-16 h-16 mr-4" src="https://via.placeholder.com/150" alt="Product image">
                      <span class="font-semibold">Nama Produk</span>
                    </div>
                  </td>
                  <td class="py-4">Rp 50.000</td>
                  <td class="py-4">
                    <div class="flex items-center">
                      <button class="px-4 py-2 mr-2 border rounded-md">-</button>
                      <span class="w-8 text-center">1</span>
                      <button class="px-4 py-2 ml-2 border rounded-md">+</button>
                    </div>
                  </td>
                  <td class="py-4">Rp 50.000</td>
                  <td><button class="px-3 py-1 border-2 rounded-lg bg-slate-300 border-slate-400 hover:bg-red-500 hover:text-white hover:border-red-700">Hapus</button></td>
                </tr>
                <!-- More product rows -->
              </tbody>
            </table>
          </div>
        </div>
        <div class="md:w-1/4">
          <div class="p-6 bg-white rounded-lg shadow-md">
            <h2 class="mb-4 text-lg font-semibold">Total</h2>
            <div class="flex justify-between mb-2">
              <span>Subtotal</span>
              <span>Rp 50.000</span>
            </div>
            <div class="flex justify-between mb-2">
              <span>Pajak</span>
              <span>Rp 0</span>
            </div>
            <div class="flex justify-between mb-2">
              <span>Pengiriman</span>
              <span>Rp 10.000</span>
            </div>
            <hr class="my-2">
            <div class="flex justify-between mb-2">
              <span class="font-semibold">Total</span>
              <span class="font-semibold">Rp 60.000/span>
            </div>
            <button class="w-full px-4 py-2 mt-4 text-white bg-blue-500 rounded-lg">Selesaikan</button>
          </div>
        </div>
      </div>
    </div>
</div>
