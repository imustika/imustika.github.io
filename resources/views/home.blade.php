<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Try Use Tailwind</title>
  @vite('resources/css/app.css')
</head>
<body>

  <nav class="pt-3 pb-6 mx-auto bg-contain bg-no-repeat bg-center overflow-hidden"
   style="background-color: black; opacity: 87%">
    <div class="mx-3 text-white 
    sm:mx-14 md:mx-9 lg:mx-11 lg:flex lg:justify-between lg:items-center xl:mx-20">
      <h1 class="text-xl">Start Tailwind</h1>
      <ul class="lg:flex">
        <li class="mt-3 lg:mx-2"><a href="#">Home</a></li>
        <li class="mt-3 text-slate-500 hover:text-slate-300 lg:mx-2"><a href="#">About</a></li>
        <li class="mt-3 text-slate-500 hover:text-slate-300 lg:mx-2"><a href="#">Contact</a></li>
      </ul>
  </div>
  </nav>

  <header class="py-5 bg-no-repeat bg-cover bg-scroll bg-center" style="background-image: url('https://source.unsplash.com/wfh8dDlNFOk/1600x900')">
    <div class="text-center my-20">
      <img src="https://dummyimage.com/150x150/6c757d/dee2e6.jpg" alt="Photo" 
      class="rounded-full mx-auto">
      <h1 class="text-xl text-white font-bold mt-5 sm:text-2xl md:text-2xl xl:text-3xl">Full Width Pics</h1>
      <p class="text-slate-400 mt-2">Landing Page Template</p>
    </div>
  </header>

  <section class="my-24">
    <div class="container mx-3 max-w-sm tracking-wide
    sm:mx-14 sm:max-w-lg md:mx-8 md:max-w-2xl lg:max-w-md lg:mx-auto xl:max-w-2xl">
      <h1 class="text-2xl md:text-3xl xl:text-3xl">Full Width Backgrounds</h1>
      <p class="my-3 font-thin text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non quod, obcaecati enim voluptas quasi adipisci?</p>
      <p class="text-base">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit ut, mollitia harum impedit quam nemo, molestias delectus quia qui eaque quo deleniti ipsum ipsam quaerat!</p>
    </div>
  </section>

  <section>
    <div class="py-5 bg-no-repeat bg-cover bg-scroll bg-center" style="background-image: url('https://source.unsplash.com/4ulffa6qoKA/1200x800')">
      <div style="height: 24rem">
      </div>
    </div>
  </section>

  <section class="my-24">
    <div class="mx-3 max-w-sm tracking-wide
    sm:mx-14 sm:max-w-lg md:mx-8 md:max-w-2xl lg:max-w-md lg:mx-auto xl:max-w-2xl">
      <h1 class="text-2xl text-slate-800 md:text-3xl lg:text-3xl xl:text-3xl">Engaging Background Images</h1>
      <p class="my-3 font-thin text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, quisquam! Enim quas sint ipsam fugit.</p>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit ut, mollitia harum impedit quam nemo, molestias delectus quia qui eaque quo deleniti ipsum ipsam quaerat!</p>
    </div>
  </section>

  <footer>
    <div class="py-12" style="background-color: black; opacity: 87%">
      <p class="text-center text-white">Copyright &copy; Your Website 2022</p>
    </div>
  </footer>

</body>
</html>