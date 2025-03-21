<!-- HEADER -->
<?php include('header.php'); ?>

<body>
    <!-- MAIN -->
    <main>

        <div class="contenedor-home">
        <section class="top5Global">
            <h2> Top 5 Global </h2>
            <div>
                <section class="fondoPelicula">
                    <section class="cajaPelicula">
                        <h2 class="titulo"> 1. El Padrino (1972)</h2>
                        <div class="portada peli1">
                        </div>

                        <p class="sinopsis"> Michael Corleone, héroe de guerra e hijo menor de un poderoso jefe de la
                            mafia neoyorquina, decide unirse a la organización cuando su padre sufre un atentado. </p>
                    </section>
                </section>
                <section class="fondoPelicula">
                    <div class="cajaPelicula">
                        <h2 class="titulo"> 2. Lo que el viento se llevó (1939)</h2>
                        <div class="portada peli2">
                        </div>

                        <p class="sinopsis"> Una manipuladora belleza sureña y un pícaro aprovechado se enfrentan en un
                            turbulento romance mientras la sociedad se desmorona con el fin de la esclavitud y se
                            reconstruye durante los periodos de la guerra de Secesión y la Reconstrucción. </p>
                    </div>
                </section>
                <section class="fondoPelicula">
                    <div class="cajaPelicula">
                        <h2 class="titulo"> 3. Forrest Gump (1994) </h2>
                        <div class="portada peli3">
                        </div>

                        <p class="sinopsis"> Las presidencias de Kennedy y Johnson, los acontecimientos de Vietnam, el
                            Watergate y otros eventos históricos se desarrollan a través de la perspectiva de un hombre
                            de Alabama con un coeficiente intelectual de 75. </p>
                    </div>
                </section>
                <section class="fondoPelicula">
                    <section class="cajaPelicula">
                        <h2 class="titulo"> 4. Matrix (1999) </h2>
                        <div class="portada peli4">
                        </div>

                        <p class="sinopsis"> Cuando una bella desconocida lleva al hacker Neo a un inframundo prohibido,
                            descubre la impactante verdad: la vida que conoce es un elaborado engaño de una
                            ciberinteligencia malvada. </p>
                    </section>
                </section>
                <section class="fondoPelicula">
                    <section class="cajaPelicula">
                        <h2 class="titulo"> 5. El club de la Lucha (1999) </h2>
                        <div class="portada peli5">
                        </div>

                        <p class="sinopsis">Un joven hastiado de su gris y monótona vida lucha contra el insomnio. En un
                            viaje en avión conoce a un carismático vendedor de jabón que sostiene una teoría muy
                            particular: el perfeccionismo es cosa de gentes débiles; sólo la autodestrucción hace que la
                            vida merezca la pena. Ambos deciden entonces fundar un club secreto de lucha, donde poder
                            descargar sus frustaciones y su ira, que tendrá un éxito arrollador. </p>
                    </section>
                </section>
            </div>

        </section>

        <aside class="aside_Form">

            <h3 id="titForm"> Contanos qué película crees que debería estar en el ranking </h3>
            <div>
                <form action="enviar_consulta.php" class="form" method="POST">
                    <label for="pelicula"> Película </label>
                    <input type="text" name="nombre_pelicula" class="pelicula_input">
                    <label for="director"> Director </label>
                    <input type="text" name="director" class="pelicula_input" >
                    <label for="escenaFav"> ¿Por qué se merece estar en el ranking?  </label>
                    <textarea type="text" name="escena_fav" class="pelicula_input" cols="30" rows="5" > </textarea>

                    <input type="submit" value="Enviar Película" class="btn_enviar">
                </form>
            </div>

        </aside>
        </div>

    </main>

    <!-- FOOTER -->
    <?php include('footer.php'); ?>

<!-- 
</body>

</html> -->