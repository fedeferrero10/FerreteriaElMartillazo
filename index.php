<?php include('header.php');?>

<section id="inicio">

    <div id="slider">
        <img src="imagenes/slide1_ferreteria.png">
        <img src="imagenes/slide2.png">
    </div>
</section>
<div class="content">
    <section id="servicios">
        <article>
            <h2>Herramientas</h2>
            <p>Nuestros productos están enfocados a profesionales y particulares, por lo que contamos con un amplio catálogo.
			Tenemos herramientas manuales, herramientas eléctricas, podrás encontrar sierras circulares, cortadoras, pulidoras, lijadoras,
			 taladros y mucho más. 
            </p>
        </article>

        <article>
            <h2>Plomería</h2>
            <p>La más amplia variedad de artículos de plomeria, de acero, epoxi y termofusión. Lo ayudamos a que pueda elegir la mejor calidad y precio acuerdo a sus necesidades.
			</p>
			<br>
          
        </article>

        <article>
            <h2>Eléctricos</h2>
            <p>Un negocio profesionalizado en el rubro eléctrico con actitud de servicio y asesoramento que satisfaga las necesidades de los clientes y les brinde soluciones inteligentes.
            </p>
        </article>

    </section>
</div>

<?php include('footer.php');?>

<script type="text/javascript">
$(document).ready(function() {
    setInterval(animar, 4000);
});

function animar() {
    var obj = $("#slider img").get(-1);
    $(obj).fadeOut(2000, function() {
        $(obj).remove();
        $("#slider").prepend($(obj));
        $(obj).css("display", "block");
    });
}
</script>