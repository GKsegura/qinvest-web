@vite(['resources/utils/alpine.js'])

<!-- resources/views/auth/page/investor_profile.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Perfil do Investidor</title>
</head>
<body>
    <h1>Perfil do Investidor</h1>
    <h3>Total Rating: {{ $total_rating }}</h3>
    <h3>Perfil do Investidor: {{ $perfil_investidor }}</h3>
</body>
</html>