<!DOCTYPE html>
<html>
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
    <title>Mata Pelajaran</title>
  </head>
  <body class="text-gray-800 antialiased">
    <x-app-layout>
    <main class="profile-page">
      <section class="relative block" style="height: 500px;">
        <div
          class="absolute top-0 w-full h-full bg-center bg-cover"
          style='background-image: url("./img/wall.png");'
        >
          <span
            id="blackOverlay"
            class="w-full h-full absolute opacity-50 bg-black"
          ></span>
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
      </section>
      <section class="relative py-16 bg-gray-300">
        <div class="container mx-auto px-4">
          <div
            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64"
          >
            <div class="px-6">
              <div class="flex flex-wrap justify-center">
                <div
                  class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center"
                >
                  <div class="relative">
                    <img
                      alt="..."
                      src="./img/buku.jpg"
                      class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16"
                      style="max-width: 150px;"
                    />
                  </div>
                </div>
                <div
                  class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center"
                >
                </div>
                <div class="w-full lg:w-4/12 px-4 lg:order-1">
                  <div class="flex justify-center py-4 lg:pt-4 pt-8">
                  </div>
                </div>
            </div>
              <div class="text-center mt-12">
                <h3
                  class="text-4xl font-semibold leading-normal mb-2 text-gray-800 mb-2"
                >
                  Mata Pelajaran
                </h3>
              </div>
            </div>
            <div class="container mt-16 mx-auto px-4 ">
                <div class="flex flex-wrap justify-center">
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
                              <h6 class="text-xl font-semibold">Membaca dan Menulis</h6>
                              <p class="mt-2 mb-4 text-gray-600">
                              Belajar mengeja huruf dan membaca sebuah cerita-cerita yang seru!
                    Menulis huruf abjad tegak maupun sambung hingga menjadi kalimat!
                              </p>
                          </div>
                      </a>
                    </div>
                  </div>
                  <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center ">
                    <div
                      class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
                    >
                      <a href="menghitung">
                          <div class="px-4 py-5 flex-auto">
                              <div
                                  class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400"
                              >
                                  <i class="fas fa-torah"></i></i>
                              </div>
                              <h6 class="text-xl font-semibold">Menghitung</h6>
                              <p class="mt-2 mb-4 text-gray-600">
                                Belajar menghitung angka  supaya bisa menghitung kalian punya uang berapa !
                                Menghitung berapa banyak mobil dan uang yang dimiliki orangtua kalian !
                              </p>
                          </div>
                      </a>
                    </div>
                  </div>

                  <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center ">
                    <div
                      class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
                    >
                    <a href="menggambar">
                      <div class="px-4 py-5 flex-auto">
                        <div
                          class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400"
                        >
                        <i class="far fa-edit"></i>
                        </div>
                        <h6 class="text-xl font-semibold">Menggambar</h6>
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
                    <a href="sopansantun">
                      <div class="px-4 py-5 flex-auto">
                        <div
                          class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-green-400"
                        >
                        <i class="fas fa-chart-line"></i>
                        </div>
                        <h6 class="text-xl font-semibold">Sopan Santun</h6>
                        <p class="mt-2 mb-4 text-gray-600">
                          Berbakti kepada orang tua, menolong teman, membantu orang lain, ayo bertindak sopan santun!
                        </p>
                      </div>
                    </a>
                    </div>
                  </div>
               </div>
          </div>
        </div>
      </section>
    </main>

    </x-app-layout>
  </body>
  <script>
    function toggleNavbar(collapseID) {
      document.getElementById(collapseID).classList.toggle("hidden");
      document.getElementById(collapseID).classList.toggle("block");
    }
  </script>
</html>
