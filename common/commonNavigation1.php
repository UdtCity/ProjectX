<div class="sidebar-menu">
    <header class="logo1">
        <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a>
    </header>
    <div class="search">
        <form>
            <input type="text" value="" placeholder="search...">
            <input type="submit" value="">
        </form>
    </div>
    <div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
    <!--  <div class="menu">
        <ul id="menu">
            <li><a href="index.php"><i class="fa fa-tachometer"></i> <span>Home</span></a></li>
            <li id="menu-academico"><a href="#"><i class="fa fa-table"></i> <span>UDT information</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                <ul id="menu-academico-sub">
                    <li id="menu-academico-avaliacoes"><a href="shoes.html">government</a></li>
                    <li id="menu-academico-avaliacoes"><a href="products.html">feeds</a></li>
                    <li id="menu-academico-boletim"><a href="sunglasses.html">gossips</a></li>
                </ul>
            </li>
            <li id="menu-academico"><a href="kickGrass.php"><i class="fa fa-file-text-o"></i> <span>Resturant</span></a></li>
            <li><a href="default.html"><i class="lnr lnr-pencil"></i> <span>Mobiles</span></a></li>
            <li id="menu-academico"><a href="#"><i class="fa fa-table"></i> <span>Parlours</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                <ul id="menu-academico-sub">
                    <li id="menu-academico-avaliacoes"><a href="shoes.html">Mens</a></li>
                    <li id="menu-academico-avaliacoes"><a href="products.html">Womens</a></li>
                </ul>
            </li>
             <li><a href="products.html"><i class="lnr lnr-chart-bars"></i> <span>Boutique</span></a></li>
             <li><a href="products.html"><i class="lnr lnr-chart-bars"></i> <span>tailoring shops</span></a></li>
            <li><a href="default.html"><i class="lnr lnr-pencil"></i> <span>Doctors</span></a></li>
            <li><a href="default.html"><i class="lnr lnr-pencil"></i> <span>Movies</span></a></li>
            <li><a href="default.html"><i class="lnr lnr-pencil"></i> <span>Grocery</span></a></li>
            <li><a href="default.html"><i class="lnr lnr-pencil"></i> <span>Medicine</span></a></li>
            <li id="menu-academico"><a href="#"><i class="fa fa-table"></i> <span>Electronics</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                <ul id="menu-academico-sub">
                    <li id="menu-academico-avaliacoes"><a href="shoes.html">Washing Machine</a></li>
                    <li id="menu-academico-avaliacoes"><a href="products.html">Tv</a></li>
                    <li id="menu-academico-avaliacoes"><a href="products.html">fridge</a></li>                 
                </ul>
            </li>
            <li><a href="default.html"><i class="lnr lnr-pencil"></i> <span>Clothings</span></a></li>
            
            
            <li id="menu-academico"><a href="catalog.html"><i class="fa fa-file-text-o"></i> <span>Electronics</span></a></li>
            <li id="menu-academico"><a href="shoes.html"><i class="lnr lnr-book"></i> <span>Shoes</span></a></li>
            <li><a href="bags.html"><i class="lnr lnr-envelope"></i> <span>Bags</span></a></li>
            <li><a href="products.html"><i class="lnr lnr-chart-bars"></i> <span>Watches</span></a></li>
             <li><a href="products.html"><i class="lnr lnr-chart-bars"></i> <span>Real Estates</span></a></li>
             <li><a href="products.html"><i class="lnr lnr-chart-bars"></i> <span>Gifts</span></a></li>
             <li><a href="products.html"><i class="lnr lnr-chart-bars"></i> <span>Ceramics</span></a></li>
            <li id="menu-academico"><a href="#"><i class="fa fa-table"></i> <span>Door Services</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                <ul id="menu-academico-sub">
                    <li id="menu-academico-avaliacoes"><a href="shoes.html">plumber</a></li>
                    <li id="menu-academico-avaliacoes"><a href="products.html">electrician</a></li>
                    <li id="menu-academico-avaliacoes"><a href="shoes.html">carpenter</a></li>
                    <li id="menu-academico-avaliacoes"><a href="products.html">electonic services</a></li>
                    <li id="menu-academico-avaliacoes"><a href="shoes.html">painter</a></li>
                    <li id="menu-academico-avaliacoes"><a href="products.html">constructions</a></li>
                </ul>
            </li>
            
        </ul>
    </div>-->
</div>
<script>
    var toggle = true;

    $(".sidebar-icon").click(function() {
        if (toggle) {

            $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
            setTimeout(function() {
                $("#menu span").css({
                    "position": "relative"
                });
            }, 400);
        } else {
            $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
            $("#menu span").css({
                "position": "absolute"
            });
        }

        toggle = !toggle;
    });

</script>
