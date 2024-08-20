<div>

    <div class="w-full h-screen px-4 py-10 mx-auto bg-gradient-to-r from-blue-200 to-cyan-200 sm:px-6 lg:px-8">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
          <!-- Grid -->
          <div class="grid gap-4 md:grid-cols-2 md:gap-8 xl:gap-20 md:items-center">
            <div>
              <h1 class="block text-3xl font-bold text-gray-800 sm:text-4xl lg:text-6xl lg:leading-tight dark:text-white">Pembelian Produk Hasil Karya Warga Binaan <span class="text-blue-600">Lapas Tahuna</span></h1>
              <p class="mt-3 text-lg text-gray-800 dark:text-gray-400">Beli berbagai macam produk kerajinan hasil karya warga binaan lapas seperti kerajinan tangan, produk tekstil, produk kayu, makanan olahan, dan masih banyak lagi</p>



            </div>
            <!-- End Col -->

            <div class="relative ms-4">
              <img class="w-full rounded-md" src="https://png.pngtree.com/png-clipart/20220930/original/pngtree-mobile-shopping-concept-a-man-and-woman-buy-things-in-the-png-image_8644437.png" alt="Image Description">
              <div class="absolute inset-0 -z-[1] bg-gradient-to-tr from-gray-200 via-white/0 to-white/0 w-full h-full rounded-md mt-4 -mb-4 me-4 -ms-4 lg:mt-6 lg:-mb-6 lg:me-6 lg:-ms-6 dark:from-slate-800 dark:via-slate-900/0 dark:to-slate-900/0"></div>

              <!-- SVG-->
              <div class="absolute bottom-0 start-0">
                <svg class="w-2/3 h-auto text-white ms-auto dark:text-slate-900" width="630" height="451" viewBox="0 0 630 451" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="531" y="352" width="99" height="99" fill="currentColor" />
                  <rect x="140" y="352" width="106" height="99" fill="currentColor" />
                  <rect x="482" y="402" width="64" height="49" fill="currentColor" />
                  <rect x="433" y="402" width="63" height="49" fill="currentColor" />
                  <rect x="384" y="352" width="49" height="50" fill="currentColor" />
                  <rect x="531" y="328" width="50" height="50" fill="currentColor" />
                  <rect x="99" y="303" width="49" height="58" fill="currentColor" />
                  <rect x="99" y="352" width="49" height="50" fill="currentColor" />
                  <rect x="99" y="392" width="49" height="59" fill="currentColor" />
                  <rect x="44" y="402" width="66" height="49" fill="currentColor" />
                  <rect x="234" y="402" width="62" height="49" fill="currentColor" />
                  <rect x="334" y="303" width="50" height="49" fill="currentColor" />
                  <rect x="581" width="49" height="49" fill="currentColor" />
                  <rect x="581" width="49" height="64" fill="currentColor" />
                  <rect x="482" y="123" width="49" height="49" fill="currentColor" />
                  <rect x="507" y="124" width="49" height="24" fill="currentColor" />
                  <rect x="531" y="49" width="99" height="99" fill="currentColor" />
                </svg>
              </div>
              <!-- End SVG-->
            </div>
            <!-- End Col -->
          </div>
          <!-- End Grid -->
        </div>
    </div>


    {{-- Brand Section Start --}}

    <section class="py-20">
        <div class="max-w-xl mx-auto">
          <div class="text-center ">
            <div class="relative flex flex-col items-center">
              <h1 class="text-5xl font-bold dark:text-gray-200"> Cari <span class="text-blue-500"> Brand
                </span> </h1>
              <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
                <div class="flex-1 h-2 bg-blue-200">
                </div>
                <div class="flex-1 h-2 bg-blue-400">
                </div>
                <div class="flex-1 h-2 bg-blue-600">
                </div>
              </div>
            </div>
            <p class="mb-12 text-base text-center text-gray-500">
              Cari berbagai macam brand dari Warga Binaan
            </p>
          </div>
        </div>
        <div class="justify-center max-w-6xl px-4 py-4 mx-auto lg:py-0">
          <div class="grid grid-cols-1 gap-6 lg:grid-cols-4 md:grid-cols-2">

            @foreach ($brands as $brand)

              <div class="bg-white rounded-lg shadow-md dark:bg-gray-800" wire:key="{{ $brand->id }}">
                <a href="/products?selected_brands[0]={{ $brand->id }}" class="">
                  <img src="{{ url('storage', $brand->image) }}" alt="{{ $brand->name }}" class="object-cover w-full h-64 rounded-t-lg">
                </a>
                <div class="p-5 text-center">
                  <a href="" class="text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-300">
                    {{ $brand->name }}
                  </a>
                </div>
              </div>

            @endforeach

          </div>
        </div>
    </section>

    {{-- Brand Section End --}}



    {{-- Category Section Start --}}

    <div class="py-20 bg-orange-200">
        <div class="max-w-xl mx-auto">
          <div class="text-center ">
            <div class="relative flex flex-col items-center">
              <h1 class="text-5xl font-bold dark:text-gray-200"> Cari <span class="text-blue-500"> Kategori
                </span> </h1>
              <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
                <div class="flex-1 h-2 bg-blue-200">
                </div>
                <div class="flex-1 h-2 bg-blue-400">
                </div>
                <div class="flex-1 h-2 bg-blue-600">
                </div>
              </div>
            </div>
            <p class="mb-12 text-base text-center text-gray-500">
              Cari kategori
            </p>
          </div>
        </div>

        <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
          <div class="grid gap-3 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 sm:gap-6">

            @foreach ($categories as $category)

              <a class="flex flex-col transition bg-white border shadow-sm group rounded-xl hover:shadow-md dark:bg-slate-900 dark:border-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/products?selected_categories[0]={{ $category->id }}" wire:key="{{ $category->name }}">
                <div class="p-4 md:p-5">
                  <div class="flex items-center justify-between">
                    <div class="flex items-center">
                      <img class="h-[2.375rem] w-[2.375rem] rounded-full" src="{{ url('storage', $category->image) }}" alt="{{ $category->name }}">
                      <div class="ms-3">
                        <h3 class="font-semibold text-gray-800 group-hover:text-blue-600 dark:group-hover:text-gray-400 dark:text-gray-200">
                          {{ $category->name }}
                        </h3>
                      </div>
                    </div>
                    <div class="ps-3">
                      <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                      </svg>
                    </div>
                  </div>
                </div>
              </a>

            @endforeach

          </div>
        </div>

    </div>

    {{-- Category Section End --}}


    {{-- Reviews Section Start --}}



    {{-- Reviews Section End --}}

</div>
