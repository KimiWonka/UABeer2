<body>
<section class="main-content">
    <header>
        <h1>UABeer</h1>
    </header>


</section>
<header>
    <h2>Crear compte</h2>
</header>

<section>
    <form onsubmit="action='/../resource_register.php'" method="post"  target="_self">
        <label for="nom">Nom</label>
        <input type="text" name="nom"><br/>

        Edat: <input type="number" name="edat"><br/>
        E-mail: <input type="email" name="correu"><br/>
        Contrasenya: <input type="password" name="contrasenya" minlength="8"><br/>
        Confirmar contrasenya: <input type="password" name="cpswd"><br/>
        Població: <input type="text" name="poblacio"><br/>
        Codi postal: <input type="number" name="CP"><br/>
        Adreça: <input type="text" name="direccio"><br/>
        DNI: <input type="text" name="DNI"><br/>
        <input type="submit" value="Registrar-se">
    </form>
</section>
</body>
</html>

