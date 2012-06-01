<style>
    #menu{
        list-style: none;
        display: block;
        height:43px;
        width: 500px;
        background-color: #81cef9;
        border: #81cef9 groove thin;
    }
    #menu li{
        display: inline;
        float: left;
        height: 43px;
        width: 80px;
        background-color: #0033CC;
        text-align: center;
        border-radius: 5px;
        line-height: 43px;
        margin-left: 10px;
    }

    #menu li a{
        color: tomato;
    }
    .col_1,.col_2,.col_3{
        display:inline;
        position: relative;
        margin-left: 5px;
        margin-right: 5px;
    }
    .col_3{
        width: 600px;
    }

    .col_1{
        width: 200px;
    }
    .col_2{
        width: 400px;
    }

    .dropdown_3columns {
        width: 630px;
        margin:4px auto;
        float:left;
        position:absolute;
        
        text-align:left;
        padding:10px 5px 10px 5px;
        border:1px solid #777777;
        border-top:none;

        /* Gradient background */
        background:#F4F4F4;
        background: -moz-linear-gradient(top, #EEEEEE, #BBBBBB);
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#EEEEEE), to(#BBBBBB));

        /* Rounded Corners */
        -moz-border-radius: 0px 5px 5px 5px;
        -webkit-border-radius: 0px 5px 5px 5px;
        border-radius: 0px 5px 5px 5px;
    }
    #menu li:hover a {
        color:#161616;
        text-shadow: 1px 1px 1px #ffffff;
    }

    #menu li:hover .dropdown_1column, 
    #menu li:hover .dropdown_2columns, 
    #menu li:hover .dropdown_3columns,
    #menu li:hover .dropdown_4columns,
    #menu li:hover .dropdown_5columns {
        left:-1px;
        top:auto;
    }
    #menu li:hover {
	border: 1px solid #777777;
	padding: 4px 9px 4px 9px;
	
	/* Background color and gradients */
	
	background: #F4F4F4;
	background: -moz-linear-gradient(top, #F4F4F4, #EEEEEE);
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#F4F4F4), to(#EEEEEE));
	
	/* Rounded corners */
	
	-moz-border-radius: 0px 0px 0px 0px;
	-webkit-border-radius: 0px 0px 0px 0px;
	border-radius: 0px 0px 0px 0px;
}
    #menu li:hover .align_right {
        left:auto;
        right:-1px;
        top:auto;
    }

</style>
<ul id="menu">

    <li>
        <a href="#" class="drop">Home</a>
    </li>
    <li>
        <a href="#" class="drop">Categories</a>
        <div class="dropdown_3columns align_right"><!-- Begin 4 columns container -->

            <div class="col_3">
                <h2>Choose a category</h2>
            </div>

            <div class="col_1">
                <ul>
                    <li><a href="#">Men's</a></li>
                    <li><a href="#">Women's</a></li>
                    <li><a href="#">Kids</a></li>
                    <li><a href="#">Pets</a></li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">DIY & Crafts</a></li>
                    <li><a href="#">Workspace</a></li>

                </ul>   

            </div>

            <div class="col_1">
                <ul>
                    <li><a href="#">Gadgets</a></li>
                    <li><a href="#">Art</a></li>
                    <li><a href="#">Food</a></li>
                    <li><a href="#">Architecture</a></li>
                    <li><a href="#">Sports & Outdoors</a></li>
                    <li><a href="#">Cars and Bikes</a></li>
                    <li><a href="#">Other</a></li>
                </ul>   

            </div>

            <div class="col_1">


                <ul>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">Sales</a></li>
                    <li><a href="#">Deals</a></li>
                    <li><a href="#">Brands and stores</a></li>

                </ul>   

            </div>

        </div><!-- End 4 columns container -->
    </li>

    <li>
        <a href="#" class="drop">Add</a>
    </li>
</ul>

