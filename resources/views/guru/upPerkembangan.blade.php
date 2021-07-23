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
    <title>Perkembangan Siswa</title>
  </head>




  <body class="text-gray-800 antialiased">
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
                  Tambah Perkembangan Siswa
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

      <div class="container mx-auto px-16">
        <form action="/perkembangan/upload" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <br/>
            @if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
			@endif

            <div class="mb-3 pt-0">
                <label for="idMurid">Pilih Nama Siswa:</label>
                <select id="idMurid" name="idMurid" placeholder="Pilih Nama Siswa disini" class="form-control px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full">
                    @foreach($user as $u)
                        <option value={{ $u->id  }}>{{ $u->name }}</option>
                    @endforeach
                </select>
            </div>


            <div class="mb-3 pt-0">
                <label for="isi">Perkembangan Siswa:</label>
                <input type="text" placeholder="Isi Perkembangan Siswa disini" id="isi" name="isi" required="required" class="form-control px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full"/>
            </div>

            <div class="form-group">
                <b>File</b><br/>
                <input type="file" name="file">
            </div>

            <br/>

            <input type="submit" class="bg-blueGray-500 text-white active:bg-blueGray-700 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">


        </form>

      </div>




    </x-app-layout>
  </body>





 <script>
    function toggleNavbar(collapseID) {
      document.getElementById(collapseID).classList.toggle("hidden");
      document.getElementById(collapseID).classList.toggle("block");
    }
  </script>
</html>
