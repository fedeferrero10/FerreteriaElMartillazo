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
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
                Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.
            </p>
        </article>

        <article>
            <h2>Plomería</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
                Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.
            </p>
        </article>

        <article>
            <h2>Eléctricos</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
                Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.
            </p>
        </article>

    </section>
</div>

<?php include('footer.php');?>

<script type="text/javascript">
$(document).ready(function() {
    setInterval(animar, 6000);
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