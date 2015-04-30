<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Mi portafolio online</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="shortcut icon" href="../img/favicon.ico" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700' rel='stylesheet' type='text/css'>
        
        {{ HTML::style('css/estilos.css') }} 
    </head>
    <body>

        <header id="yo" class="Header">
            <nav class="MainMenu">
                <ul class="MainMenu-list">
                    <li class="MainMenu-item">
                        <a class="MainMenu-link" href="#yo">Yo</a>
                    </li>
                    <li class="MainMenu-item">
                        <a class="MainMenu-link" href="#perfil">Perfil</a>
                    </li>
                    <li class="MainMenu-item">
                        <a class="MainMenu-link trabajo" href="#trabajo">Mi trabajo</a>
                    </li>
                    <li class="MainMenu-item">
                        <a class="MainMenu-link contacto" href="#contacto">Contáctame</a>
                    </li>
                </ul>
            </nav>

            <figure class="Header-imageContainer">
                <img src="../img/avatar.png" alt="@ndbustos" class="Header-image"/>
                <figcaption class="Header-description">
                    <a href="http://twitter.com/ndbustos/" target="_blank" class="Header-link">@ndbustos</a>
                </figcaption>
                <p class="Header-name">Nidia Bustos</p>
            </figure>
        </header>
        <section id="perfil" class="Profile">
            <div class="u-containerDefault"> 
                <h2 class="Profile-title u-title">Mi Perfil</h2>
                <p class="Profile-description">
                Developer.
                Ingeniero de ejecución en computación, titulada de la Universidad Central de Chile, con 2 años y medio de experiencia en desarrollo de sistemas con lenguajes PHP, JavaScript, Html5 y CSS3. Con ayuda de librerías JS. Manejo de bases de datos SQL.
                </p>
                <p>
                Puedes visitar mis redes <span class="Profile-span">sociales</span> si quieres <em>seguirme</em></p>
                <a class="Profile-link" href="https://twitter.com/ndbustos">@ndbustos</a>
                <a class="Profile-link" href="http://github.com/aryaab/">nidiaamm</a>
            </div>
        </section>

        <section id="trabajo" class="Work">
            <div class="u-containerDefault"> 
                <h2 class="Work-title u-title">Mi Trabajo</h2>
            
                <article class="Work-item">
                    <p>
                        He ocupando puestos en empresas ligadas al rubro de la educación y desarrollo de aplicaciones a medida, integración y desarrollo móvil.
                    </p>
                    <p>
                        
                    </p>
                    <p> 
                        Soy una persona que gusta de estar en constante aprendizaje de nuevas tecnologías. Tengo capacidad de adaptación a los cambios, motivación por los nuevos desarrollos, responsable, organizada y con gestión de estrés.
                    </p>
                    <p>
                        Si gustas, puedes ver mi perfil completo con mis trabajos realizados en mayor detalle en Linkedin.
                    </p> 
                    <a class="Profile-link bottom" href="https://www.linkedin.com/profile/view?id=172429590">ndbustos</a>
                </article>
            </div>    
        </section>
        <footer id="contacto" class="Footer">
            <div class="Footer-left">
                <h3 class="Footer-title">Contacto</h3>
                <p class="Footer-description">Si quieres contratarme puedes escribir en mis redes sociales, o bien escribir a mi correo: <em class="">ndbustos@gmail.com</em></p>
            </div>
        </footer>
    </body>
</html>