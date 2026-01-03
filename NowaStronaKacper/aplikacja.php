<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie - Analiza Inwestycji</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1e3a8a',
                        accent: '#2563eb',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-slate-50 text-slate-600 font-sans antialiased h-screen flex flex-col">

    <nav class="bg-white py-4 border-b border-slate-100">
        <div class="container mx-auto px-6">
            <div class="flex justify-between items-center">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-gradient-to-tr from-blue-800 to-blue-500 rounded-lg"></div>
                    <a href="/" class="text-2xl font-bold text-slate-900">Analiza Inwestycji</a>
                </div>

                <div class="hidden md:flex gap-8 text-sm font-medium text-slate-600">
                    <a href="/" class="hover:text-accent transition">Strona główna</a>
                    <a href="onas.html" class="hover:text-accent transition">O nas</a>
                    <a href="blog.html" class="hover:text-accent transition">Blog</a>
                    <a href="kontakt.html" class="hover:text-accent transition">Kontakt</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-grow flex items-center justify-center p-6">
        <div class="bg-white p-8 rounded-2xl shadow-xl max-w-md w-full border border-slate-100">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-slate-900">Zaloguj się</h1>
                <p class="text-slate-500 mt-2">Panel analityczny jest dostępny tylko dla zweryfikowanych użytkowników biznesowych.</p>
            </div>
            
            <form method="POST" action="login.php" class="space-y-6">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Login</label>
                    <input type="text" name="username" class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition" placeholder="Twój login" required autocomplete="username">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Hasło</label>
                    <input type="password" name="password" class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition" placeholder="••••••••" required autocomplete="current-password">
                </div>
                
                <button type="submit" class="w-full bg-blue-600 text-white font-bold py-3 rounded-lg hover:bg-blue-700 transition shadow-lg shadow-blue-500/30">
                    Zaloguj się
                </button>
                
                <div class="text-center">
                    <a href="kontakt.html" class="text-blue-600 font-medium hover:underline text-sm">Zapomniałeś hasła?</a>
                </div>
            </form>
        </div>
    </main>

</body>
</html>