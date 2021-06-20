<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="./assets/img/favicon.ico" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="./assets/img/apple-icon.png"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css"
    />
    <title>SIPETAK</title>


  </head>
  <body>
    <x-app-layout>
        <div
        class="relative pt-16 pb-32 flex content-center items-center justify-center"
        style="min-height: 75vh;"
      >
        <div
          class="absolute top-0 w-full h-full bg-center bg-cover"
          style='background-image: url("https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1267&amp;q=80");'
        >
          <span
            id="blackOverlay"
            class="w-full h-full absolute opacity-75 bg-black"
          ></span>
        </div>
        <div class="container relative mx-auto">
          <div class="items-center flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
              <div class="pr-12">
                <h1 class="text-white font-semibold text-5xl">
                  SIPETAK
                </h1>
                <p class="mt-4 text-lg text-gray-300">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut interdum ac massa sit amet venenatis.
                    Quisque dolor ex, venenatis sed posuere a, pharetra porta lectus. Sed eget urna egestas, suscipit nulla in, pellentesque eros.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div
          class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
          style="height: 70px;"
        >
          <svg
            class="absolute bottom-0 overflow-hidden"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none"
            version="1.1"
            viewBox="0 0 2560 100"
            x="0"
            y="0"
          >
            <polygon
              class="text-gray-300 fill-current"
              points="2560 0 2560 100 0 100"
            ></polygon>
          </svg>
        </div>
      </div>
      <section class="pb-20 bg-gray-300 -mt-24">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap">
            <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
              >
                <a href="matapelajaran">
                    <div class="px-4 py-5 flex-auto">
                        <div
                            class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400"
                        >
                            <i class="fas fa-torah"></i></i>
                        </div>
                        <h6 class="text-xl font-semibold">Mata Pelajaran</h6>
                        <p class="mt-2 mb-4 text-gray-600">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut interdum ac massa sit amet venenatis.
                            Quisque dolor ex, venenatis sed posuere a, pharetra porta lectus. Sed eget urna egestas, suscipit nulla in, pellentesque eros.
                        </p>
                    </div>
                </a>
              </div>
            </div>
            <div class="w-full md:w-4/12 px-4 text-center">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
              >
              <a href="tugas">
                <div class="px-4 py-5 flex-auto">
                  <div
                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400"
                  >
                  <i class="far fa-edit"></i>
                  </div>
                  <h6 class="text-xl font-semibold">Tugas</h6>
                  <p class="mt-2 mb-4 text-gray-600">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut interdum ac massa sit amet venenatis.
                    Quisque dolor ex, venenatis sed posuere a, pharetra porta lectus. Sed eget urna egestas, suscipit nulla in, pellentesque eros.
                  </p>
                </div>
              </a>
              </div>
            </div>
            <div class="pt-6 w-full md:w-4/12 px-4 text-center">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
              >
              <a href="perkembangan">
                <div class="px-4 py-5 flex-auto">
                  <div
                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-green-400"
                  >
                  <i class="fas fa-chart-line"></i>
                  </div>
                  <h6 class="text-xl font-semibold">Perkembangan Siswa</h6>
                  <p class="mt-2 mb-4 text-gray-600">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut interdum ac massa sit amet venenatis.
                    Quisque dolor ex, venenatis sed posuere a, pharetra porta lectus. Sed eget urna egestas, suscipit nulla in, pellentesque eros.
                  </p>
                </div>
              </a>
              </div>
            </div>
         </div>
        </section>

    </x-app-layout>
    </body>
</html>
