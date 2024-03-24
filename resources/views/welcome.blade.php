<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    <div class="bg-slate-400 h-dvh w-dvw flex justify-center items-center">
        <section class="container bg-white flex h-[670px] rounded-3xl overflow-hidden">
            <aside class="rounded-r-3xl w-[55%] flex justify-center items-center bg-cover bg-no-repeat" style="background-image: url('gambar/6166719.jpg')">
                <div class="p-8 bg-gradient-to-tr from-lime-200 to-slate-400/50 to-60% backdrop-blur-md w-[80%] h-[85%] rounded-xl flex flex-col gap-y-10">
                    <button class="text-white text-5xl bg-slate-300 py-1 px-7 rounded-full w-max">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                    <div class="text-slate-200 flex flex-col gap-y-4">
                        <p>Hi, Welcome!</p>
                        <h1 class="font-bold text-4xl">Let's Get Started</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi nulla debitis illo quo est ullam!</p>
                    </div>
                </div>
            </aside>
            <main class="w-[45%] p-8 py-20">
                <h1 class="text-3xl font-bold">Sign Up</h1>
                <form method="POST" class="mt-5 w-full flex flex-col gap-y-3">
                    <label for="name" class="relative">
                        <p class="teks-input">Your Name</p>
                        <div class="bungkus-input">
                            <input type="text" name="name" id="name" class="input-form input-check" required>
                            <div class="checklist scale-75 hidden" id="check">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="silang scale-75 hidden" id="silang">
                                <i class="fa-solid fa-x"></i>
                            </div>
                        </div>
                        <p class="danger-input hidden">Ketik Nama Dengan Benar</p>
                    </label>
                    <label for="email">
                        <p class="teks-input">Your Email</p>
                        <div class="bungkus-input">
                            <input type="email" name="email" id="email" class="input-form input-check" required>
                            <div class="checklist scale-75 hidden" id="check">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="silang scale-75 hidden" id="silang">
                                <i class="fa-solid fa-x"></i>
                            </div>
                        </div>
                        <p class="danger-input hidden">Ketik Email Dengan Benar</p>
                    </label>
                    <label class="relative" for="password">
                        <p class="teks-input">Your Password</p>
                        <div class="bungkus-input">
                            <input type="password" name="password" id="password" class="input-form input-check peer" required>
                            <div class="checklist hidden scale-75" id="check">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="silang hidden scale-75" id="silang">
                                <i class="fa-solid fa-x peer-i"></i>
                            </div>
                        </div>
                        <ul class="list-disc ml-3" id="pesan-danger">
                            <li class="danger-input hidden">Harus Memiliki 8 Karakter Lebih</li>
                            <li class="danger-input hidden">Karakter Harus Memiliki Angka</li>
                            <li class="danger-input hidden">Karakter Harus Memiliki Huruf Kapital</li>
                        </ul>
                    </label>
                    <div class="flex gap-x-2 text-slate-500 mb-3">
                        <input type="checkbox" name="remember" id="" class="ml-1 scale-125 accent-green-900">
                        <p>Remember Me</p>
                    </div>
                    <button type="submit" class="w-full bg-green-800 text-white py-2 rounded-full">Sign Up Account</button>
                </form>
                <div class="flex items-center mt-3"><span class="border border-slate-300 w-[50%] block"></span><p class="px-1">Or</p><span class="border-b-2 border-slate-300 w-[50%] block"></span></div>
                <div class="flex gap-x-3 mt-3">
                    <a href="" class="rounded-full border-2 border-slate-300 flex items-center gap-x-2 py-1 px-2 w-max">
                        <div class="text-2xl">
                            <i class="fa-brands fa-facebook"></i>
                        </div>
                        <p class="text-sm text-slate-500">Sign Up with Facebook</p>
                    </a>
                    <a href="" class="rounded-full border-2 border-slate-300 flex items-center gap-x-2 py-1 px-2 w-max">
                        <div class="text-2xl">
                            <i class="fa-brands fa-github"></i>
                        </div>
                        <p class="text-sm text-slate-500">Sign Up with Github</p>
                    </a>
                </div>
            </main>
        </section>
    </div>
    <script src="https://kit.fontawesome.com/29c51fef9f.js" crossorigin="anonymous"></script>
    <script>
        const inputCheck = document.querySelectorAll('.input-check')
        for (let i = 0; i < inputCheck.length; i++) { 
            if(i <= 1) {
                inputCheck[i].addEventListener('input', (event) => {
                    const checklist = event.target.nextElementSibling
                    const silang = event.target.nextElementSibling.nextElementSibling
                    const danger = event.target.parentElement.nextElementSibling
                    if(inputCheck[i].validity.valid) {
                        checklist.classList.add('block')
                        checklist.classList.remove('hidden')
                        silang.classList.add('hidden')
                        silang.classList.remove('block')
                        danger.classList.add('hidden')
                    } else {
                        silang.classList.add('block')
                        silang.classList.remove('hidden')
                        checklist.classList.add('hidden')
                        checklist.classList.remove('block')
                        danger.classList.remove('hidden')
                    }
                })
            } else {
                inputCheck[i].addEventListener('focus', (event) => {
                    const ul = document.getElementById('pesan-danger')
                        if(inputCheck[i].value == '') {
                            for (let b = 0; b < ul.children.length; b++) {
                                ul.children[b].classList.remove('hidden')
                            }
                        } else {
                            for (let b = 0; b < ul.children.length; b++) {
                                ul.children[b].classList.add('hidden')
                            }
                        }
                })
                inputCheck[i].addEventListener('input', (event) => {
                    const checklist = inputCheck[i].nextElementSibling
                    const silang = inputCheck[i].nextElementSibling.nextElementSibling
                    const danger = inputCheck[i].parentElement.nextElementSibling
                    const upperCase = /[A-Z]/.test(inputCheck[i].value)
                    const numbering = /[0-9]/.test(inputCheck[i].value)
                    const upper8 = inputCheck[i].value.length >= 8
                    const testArray = [upper8, numbering, upperCase];
                    // Cek syarat Password Di terima
                    for (let index = 0; index < testArray.length; index++) {
                        if(testArray[index]) {
                            const ul = document.getElementById('pesan-danger')
                             ul.children[index].classList.add('hidden')
                        } else {
                            const ul = document.getElementById('pesan-danger')
                             ul.children[index].classList.remove('hidden')
                        }
                    }
                    // End Cek syarat password di terima

                    // Jika semua syarat terpenuhi maka tampilkan logo X atau Checked
                    if(upper8 && upperCase && numbering) {
                        checklist.classList.add('block')
                        checklist.classList.remove('hidden')
                        silang.classList.add('hidden')
                        silang.classList.remove('block')
                    } else {
                        silang.classList.add('block')
                        silang.classList.remove('hidden')
                        checklist.classList.add('hidden')
                        checklist.classList.remove('block')
                    }
                    // End Jika semua syarat terpenuhi maka tampilkan logo X atau Checked
                })
            }
            }
    </script>
</body>
</html>