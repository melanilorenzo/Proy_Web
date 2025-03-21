<!-- HEADER -->
<?php include('header.php'); ?>

<body>
    <?php
    if (isset($_GET['director'])) {

        switch ($_GET['director']) {
            case 'ss':
                $premios = "Premios: 3 Oscars, 9 Globos de Oro, 2 Premios BAFTA";
                $peliDestacadas = "Películas destacadas: 'La lista de Schindler', 'Salvar al Soldado Ryan', 'Jurassic Park'";
                $ref = 'https://www.imdb.com/es-es/name/nm0000229/?ref_=nv_sr_srsg_0_tt_6_nm_2_in_0_q_steven%2520spi';
                break;
            case 'ms':
                $premios = "Premios: 1 Oscar, 3 Globos de Oro, 4 Premios BAFTA";
                $peliDestacadas = "Películas destacadas: 'El lobo de Wall Street', 'Taxi Driver', 'El Irlandés'";
                $ref = 'https://www.imdb.com/es-es/name/nm0000217/?ref_=nv_sr_srsg_0_tt_6_nm_2_in_0_q_martin%2520scorsese';
                break;
            case 'ffc':
                $premios = "Premios: 5 Oscars, 4 Globos de Oro, 1 Premios BAFTA";
                $peliDestacadas = "Películas destacadas: 'El padrino', 'Apocalypse Now', 'La conversación'";
                $ref = 'https://www.imdb.com/es-es/name/nm0000338/?ref_=nv_sr_srsg_0_tt_7_nm_1_in_0_q_Francis%2520Ford%2520Coppola';
                break;
            case 'qt':
                $premios = "Premios: 2 Oscars, 3 Globos de Oro, 2 Premios BAFTA";
                $peliDestacadas = "Películas destacadas: 'Pulp Fiction', 'Django desencadenado', 'Érase una vez en Hollywood'";
                $ref = 'https://www.imdb.com/es-es/name/nm0000233/?ref_=nv_sr_srsg_0_tt_7_nm_1_in_0_q_Quentin%2520Tarantino';
                break;
            case 'cn':
                $premios = "Premios: 2 Oscars, 1 Globo de Oro, 2 Premio BAFTA";
                $peliDestacadas = "Películas destacadas: 'Oppenheimer', 'Inception', 'Interstellar'";
                $ref = 'https://www.imdb.com/es-es/name/nm0634240/';
                break;
        }
    }
    ?>

    <!-- MAIN -->
    <main>
        <div class="contenedor-flex">

            <section class="topDirectores">
                <h2 id="titDire"> Top 5 de los Mayores Ganadores de premios por Dirección </h2>
                <ul class="top5Dire">
                    <li class="directores dire1">
                        <a class="imdb" href="topDirectores.php?director=ss"> 1. Steven Spielberg </a>
                        <!-- if para mostrar solo cuando se selecciona este director -->
                        <?php if (isset($_GET['director']) && $_GET['director'] == 'ss'): ?>
                            <div>
                                <p> <?php echo $premios; ?> </p>
                                <p> <?php echo $peliDestacadas; ?> </p>
                                <a href="<?php echo $director['ref']; ?>" target="_blank"> Ver más en IMDb </a>
                            </div>
                        <?php endif; ?>
                    </li>
                    <li class="directores dire2">
                        <a class="imdb" href="topDirectores.php?director=ms"> 2. Martin Scorsese </a>
                        <?php if (isset($_GET['director']) && $_GET['director'] == 'ms'): ?>
                            <div>
                                <p> <?php echo $premios; ?> </p>
                                <p> <?php echo $peliDestacadas; ?> </p>
                                <a href="<?php echo $director['ref']; ?>" target="_blank"> Ver más en IMDb </a>
                            </div>
                        <?php endif; ?>
                    </li>
                    <li class="directores dire3">
                        <a class="imdb" href="topDirectores.php?director=ffc"> 3. Francis Ford Coppola </a>
                        <?php if (isset($_GET['director']) && $_GET['director'] == 'ffc'): ?>
                            <div>
                                <p> <?php echo $premios; ?> </p>
                                <p> <?php echo $peliDestacadas; ?> </p>
                                <a href="<?php echo $director['ref']; ?>" target="_blank"> Ver más en IMDb </a>
                            </div>
                        <?php endif; ?>
                    </li>
                    <li class="directores dire4">
                        <a class="imdb" href="topDirectores.php?director=qt"> 4. Quentin Tarantino </a>
                        <?php if (isset($_GET['director']) && $_GET['director'] == 'qt'): ?>
                            <div>
                                <p> <?php echo $premios; ?> </p>
                                <p> <?php echo $peliDestacadas; ?> </p>
                                <a href="<?php echo $director['ref']; ?>" target="_blank"> Ver más en IMDb </a>
                            </div>
                        <?php endif; ?>
                    </li>
                    <li class="directores dire5">
                        <a class="imdb" href="topDirectores.php?director=cn"> 5. Christopher Nolan </a>
                        <?php if (isset($_GET['director']) && $_GET['director'] == 'cn'): ?>
                            <div>
                                <p> <?php echo $premios; ?> </p>
                                <p> <?php echo $peliDestacadas; ?> </p>
                                <a href="<?php echo $director['ref']; ?>" target="_blank"> Ver más en IMDb </a>
                            </div>
                        <?php endif; ?>
                    </li>
                </ul>
            </section>


            <aside class="aside_Premiaciones">

                <h3 id="titPremio"> Próximas Premiaciones</h3>
                <ul>
                    <li> 18 de Febrero - Fin de votaciones del Oscar 2025 </li>
                    <li> 22 de Febrero - Film Independent Spirit Awards 2025 </li>
                    <li> 2 de Marzo - Premios Oscar 2025 </li>
                    <li> <a href="https://laestatuilla.com/premios/calendario-temporada-de-premios-2024-25/" target="_blank"> Más detalles </a> </li>

                </ul>

            </aside>
        </div>


    </main>

    <!-- FOOTER -->
    <?php include('footer.php'); ?>
