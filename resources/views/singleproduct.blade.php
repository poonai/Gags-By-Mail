<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
  <style media="screen">
  /*
  Author: W3layout
  Author URL: http://w3layouts.com
  License: Creative Commons Attribution 3.0 Unported
  License URL: http://creativecommons.org/licenses/by/3.0/
  */
  h4, h5, h6,
  h1, h2, h3 {margin-top: 0;}
  ul, ol {margin: 0;}
  p {margin: 0;}
  html, body{
  	font-family: 'Roboto', sans-serif;
  	font-size: 100%;
  	background: #ffffff;
  }
  body a{
  	transition:0.5s all;
  	-webkit-transition:0.5s all;
  	-moz-transition:0.5s all;
  	-o-transition:0.5s all;
  	-ms-transition:0.5s all;
  }
  /*----*/
  .itemContainer{
  			width:100%;
  			float:left;
  		}

  		.itemContainer div{
  			float:left;
  			margin: 5px 20px 5px 20px ;
  		}

  		.itemContainer a{
  			text-decoration:none;
  		}

  		.cartHeaders{
  			width:100%;
  			float:left;
  		}

  		.cartHeaders div{
  			float:left;
  			margin: 5px 20px 5px 20px ;
  		}
  .item_add {
    color: #fff;

    border:none;
  }

  .grid_1 img{
  	margin-bottom:1em;
  }


  .box_1{
  	float:right;
  }
  .box_1 h3{
    color: #7A8499;
    font-size: 1em;

      float: left;
  }
  .box_1 h3 img{
  	margin-left: 5px;
  }
  .box_1 p{

    float: right;
  }
  .total {
    display: inline-block;
  }
  /*----*/
  /*--checkout--*/
  .cart h2{
  	font-size:1.5em;
  	margin-bottom:1em;
  }

  .cart-sec{

  	margin-bottom:3em;
  }
  .cart-item{
  	width:20%;
  	float:left;
  	margin-right:5%;

  }
  .cart-item img{
  	width:100%;
  }
  .cart-item-info{
  	width:75%;
  	float:left;

  }
  .check{
  	padding:5em 0;
  }
  .cart-item-info h3{
  	font-size:1em;
  	font-weight:600;
  }
  .cart-item-info h3 a{
  	color:#000;
  }
  .cart-item-info h3 span{
  	display:block;
  	font-weight:400;
  	font-size: 0.85em;
    margin: 0.7em 0;
  }
  .size_3 {
    width:100%;
  }
  .delivery {
    margin-top: 3em;
  }
  .delivery p {
    color: #A6A6A6;
    font-size: 1em;
    font-weight: 400;
    float: left;
  }
  .delivery span {
    color: #A6A6A6;
    font-size: 1em;
    font-weight: 400;
    float: right;
  }
  .cart-item-info h4 span{
  	font-size:0.65em;
  	font-weight:400;
  }

  .close1,.close2{
    background: url('../images/close_1.png') no-repeat 0px 0px;
    cursor: pointer;
    width: 28px;
    height: 28px;
    position: absolute;
    right: 0px;
    top: 0px;
    -webkit-transition: color 0.2s ease-in-out;
    -moz-transition: color 0.2s ease-in-out;
    -o-transition: color 0.2s ease-in-out;
    transition: color 0.2s ease-in-out;
  }
  .cart-header {
    position: relative;
  }
  .cart-header2 {
    position: relative;
  }
  a.order {
    background:#00405d;
    padding: 10px 20px;

    font-size: 1em;
    color: #fff;
    text-decoration: none;
    display: block;
    font-weight: 600;
    text-align: center;
    margin:3em 0;
  }
  a.order:hover{
  	background:#615c85;
  }
  .total-item,.cart-items{
  	margin-top:0em;
  	padding-bottom:2em;
  }

  .total-item h3 {
    color: #333;
    font-size: 1.1em;
    margin-bottom: 1em;
  }
  .total-item h4{
  	font-size:0.8em;
  	font-weight:600;
  	color:#9C9C9C;
  	display:inline-block;
  	margin-right:6em;
  }
  a.cpns{
  	background:#ff6978;
  	color:#fff;

  	padding: 10px;
    font-size: 0.8em;
  	font-weight:600;
  }
  a.cpns:hover{
  	background: #615c85;
  }
  .total-item p{
  	font-size:0.9em;
  	font-weight:400;
  	margin-top:1em;
  	color:#727272;
  }
  .total-item p a:hover{
  	color:#333;
  	text-decoration:underline;
  }
  a.continue{
  	background:#00405d;
  	padding:10px 20px;

  	font-size:1em;
  	color:#fff;
  	text-decoration:none;
  	display: block;
     font-weight: 600;
     text-align: center;
     margin-bottom:2em;
  }
  a.continue:hover{
  	background:#615c85;
  }
  ul.total_price{
  	padding: 0;
    margin: 1em 0 0 0;
    list-style: none;
  }
  ul.total_price li.last_price{
  	width: 50%;
    float: left;

  }
  ul.total_price li.last_price span{
  	font-size: 1.1em;
    color: #000;
  }
  .price-details{
  	border-bottom: 1px solid #DDD9D9;
    padding-bottom: 10px;
  }
  .price-details h3{
  	color:#000;
  	font-size:1.2em;
  	margin-bottom:1em;
  }
  .price-details span{
  	width: 50%;
    float: left;

    font-size: 0.8125em;
    color: #000;
    line-height: 1.8em;
  }


  .cart-items h1 {
    font-size: 1.5em;
    margin-bottom:2em;
  }
  a.item_add1 {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-top-right-radius: 0;
    /* border-bottom-right-radius: 50%; */
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    padding: 10px 15px;
    background: url(0) #f54d56;
  }
  a.item_add1:hover{
  	background:rgb(3, 193, 167);
  	text-decoration:none;
  	color:#fff;
  }
  .btn_5{
  	padding:25px 40px;
  	font-size:1.1em;
  }
  ul.qty{
  	padding:0;
  	margin:0;
  	list-style:none;
  }
  ul.qty li{
     display: inline-block;
     margin-right: 10%;
  }
  ul.qty li p{
  	font-size:0.8125em;
  	color:#555;
  }
  /*-- header_top --*/
  .top_bg{
  	background: #e9565c;
  }
  .header_bg{
  	background: #e9565c;
  }
  .header_top{
  	padding:15px 0 5px;
  }
  .top_left{
  	float: right;
  }
  .top_left h2{
  	text-transform:uppercase;
  	font-size:12px;
  	color:#ffffff;
  }
  .top_left h2 span {
    color: #000000;
    margin-right: 0px;
    padding: 1px 10px;
    background: url(../images/phon.png) no-repeat 0px 2px;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
  }
  .top_right{
  	float:left;
  	color: #ffffff;
  	margin-top: -5px;
  }
  .top_right ul{
  	padding:0;
  	list-style:none;
  }
  .top_right ul li{
  	display: inline-block;
  	margin-right: 10px;
  }
  .top_right ul li:last-child{
  	margin-right: 0;
  }
  .top_right ul li a{
  	text-align:center;
  	padding: 0px 4px;
  	text-transform:uppercase;
  	font-size:12px;
  	display:block;
  	color:#ffffff;
  	-webkit-transition: all 0.3s ease-in-out;
  	-moz-transition: all 0.3s ease-in-out;
  	-o-transition: all 0.3s ease-in-out;
  	transition: all 0.3s ease-in-out;
  }
  .top_right ul li a:hover{
  	color:#ff6978;
  	text-decoration: none;
  }
  .itemContainer{
  			width:100%;
  			float:left;
  		}

  		.itemContainer div{
  			float:left;
  			margin: 5px 20px 5px 20px ;
  		}

  		.itemContainer a{
  			text-decoration:none;
  		}

  		.cartHeaders{
  			width:100%;
  			float:left;
  		}

  		.cartHeaders div{
  			float:left;
  			margin: 5px 20px 5px 20px ;
  		}
  .item_add {
    border: none;
    color: #3f3d3d;
    padding: 10px 20px;
    font-size: 0.85em;
    border: none;
    text-align: center;
  }
  .item_add:hover{
  }
  .grid_1 img{
  	margin-bottom:1em;
  }
  span.item_price {
    color: #3f3d3d;
    font-size: 1.2em;
    font-weight: 400;
    text-align: center;
  }
  .item_quantity {
    margin: 1em 0;
    border: 1px solid rgb(175, 175, 175);
    font-size: 0.85em;
    padding: 5px 10px;
    display: block;
  }
  .box_1 {
    float: left;
    margin: 0.55em 0.1em 0;
    width:38%;
  }
  .box_1 h3 {
    color: #000;
    font-size: 0.85em;
    margin-bottom: 0;
    float: left;
  }
  .box_1 h3 img{
  	margin-left: 5px;
  }
  .box_1 p {
    color: #000;
    font-size: 0.85em;
    float: left;
    margin: 0.5em 0.3em 0;
    text-align:left;
  }
  select.item_Size {
    display: block;
    border: 1px solid #999;
    font-size: 0.85em;
    color: #000;
    padding: 5px 10px;
    margin-top: 1em;
  }
  .item_add  a{
    background: rgb(9, 209, 182);
    border: none;
    color: #fff;
    padding: 10px 20px;
    font-size: 0.85em;
    border: none;
  }
  /********** Login *************/
  #loginContainer {
      position:relative;
  }
  #loginContainer a span {
    display: block;
    padding: 2px 14px;
    border: 1px solid #555;
    font-weight: 300;
  }
  /* Login Button */
  #loginButton {
      display:inline-block;
      position:relative;
      z-index:30;
      cursor:pointer;
  }
  /* Login Box */
  #loginBox {
      position:absolute;
  	top: 44px;
  	right: 0px;
      display:none;
      z-index:29;
  }
  #loginForm:after {
  	content: '';
  	position: absolute;
  	right: 25px;
  	top: -10px;
  	border-left:10px solid rgba(0, 0, 0, 0);
  	border-right:10px solid rgba(0, 0, 0, 0);
  	border-bottom: 10px solid #f0f0f0;
  }
  /* Login Form */
  #loginForm {
     width: 300px;
  	background: #fff;
  	border: 1px solid #d6d6d6;
  }
  #loginForm fieldset {
      margin:0 0 15px 0;
      display:block;
      border:0;
      padding:0;
  }
  fieldset#body {
      border-radius:3px;
      -webkit-border-radius:3px;
      -moz-border-radius:3px;
      -o-border-radius:3px;
      padding:15px 15px;
      margin:0;
  }
  #loginForm #checkbox {
      width:auto;
      margin:3px 6px 0 0;
      float:left;
      padding:0;
      border:0;
      *margin:-3px 9px 0 0; /* IE7 Fix */
  }
  #body label {
      color:#000;
      margin:10px 0 0 0;
      display:block;
      float:left;
      font-size:0.8725em;
  }
  #loginForm #body fieldset label{
      display:block;
      float:none;
      margin:0 0 6px 0;
  }
  #body label i{
  	color:#000;
  	font-size:1em;
  	font-style:normal;
  }
  /* Default Input */
  #loginForm input {
      width:92%;
      border:1px solid #DADADA;
  	color: #222;
  	background:#FFF;
      padding:6px;
  	font-size: 0.8125em;
      -webkit-apperance:none;
      font-family: 'Open Sans', sans-serif;
  }
  /* Sign In Button */
  #loginForm #login {
  	font-family: 'Open Sans', sans-serif;
  	width: auto;
  	float: left;
  	background:#ff6978 ;
  	color: #fff;
  	font-size: 0.8725em;
  	padding: 8px 20px;
  	border: none;
  	margin: 0 12px 0 0;
  	cursor: pointer;
  	transition: all .5s;
  	-webkit-transition: all .5s;
  	-moz-transition: all .5s;
  	-o-transition: all .5s;
  }
  #loginForm #login:hover {
  	background: #00405d;
  }
  /* Forgot your password */
  #loginForm span{
      display:block;
      padding:0px 0px 15px 17px;
  }
  #loginForm span a{
  	color:#000;
  	font-size:0.85em;
      font-weight:500;
      background: none;
  	border: none;
  	box-shadow: none;
  }
  #loginForm span a:hover{
  	text-decoration:underline;
  }
  input:focus {
      outline:none;
  }
  /*-- header --*/
  .logo {
    float: left;
    margin: 1.0em 0;
  }
  .header_right {
    float: right;
    width: 40%;
  }
  .head-t {
    padding: 1em 0;
  }
  /*search*/
  .search{
  	position: relative;
  	background: #f3f4f5;
  	border: 1px solid #D8D8D8;
  }
  .search form{
  	width:100%;
  }
  .search input[type="text"]{
  	margin:0px 0;
  	font-family: 'Open Sans', sans-serif;
  	padding:8px 16px;
  	outline: none;
  	color: #5a5a5a;
  	background: none;
  	border: none;
  	width:85.33333%;
  	line-height: 1.5em;
  	position: relative;
  	font-size: 0.8725em;
  	-webkit-appearance: none;
  	text-transform: capitalize;
  }
  .search input[type="text"]:hover{
  	background: #ffffff;
  }
  .search input[type="submit"]{
  	background: url('../images/search.png') no-repeat 0px 1px;
  	border: none;
  	cursor: pointer;
  	width: 24px;
  	outline: none;
  	position: absolute;
  	height: 24px;
  	top: 6px;
  	right: 5px;
  }
  .log {
    float: left;
    width: 19%;
  }
  .reg {
    float: left;
    width: 20%;
    margin: 5px 0;
  }
  /* create_btn */
  .create_btn {
    float: left;
    width: 21%;
  }
  .create_btn a {
    text-transform: capitalize;
    display: inline-block;
    padding: 6px 16px;
    font-size: 0.8725em;
    font-weight:300;
    color: #ffffff;
    background: #000000;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
  }
  .create_btn a:hover{
  	background: #00405d;
  	color:#ffffff;
  	text-decoration:none;
  }
  .create_btn a img{
  	vertical-align: top;
  	margin-top: 3px;
  }
  .reg a {
    vertical-align: middle;
    font-size: 0.85em;
    font-weight: 300;
    text-decoration: none;
  }
  /* start icon styles */
  .icon1:before,.icon1:after {
  	content: "";
  	display: table;
  }
  .icon1:after {
  	clear: both;
  }
  .icon1 {
    float: left;
    zoom: 1;
    margin-right: 0%;
    width: 40%;
    margin: 8px 0 0;
  }
  ul.icon1 {
  	padding:0;
  	list-style:none;
  }
  .icon1 li {
  	float: left;
  	position: relative;
  	cursor: pointer;
  }
  .icon1 li:last-child{
  	border-right:none;
  }
  .icon1 li:hover > a {
  	color: #fafafa;
  }
  *html .icon1 li a:hover { /* IE6 only */
  	color: #fafafa;
  }
  .icon1 ul {
  	width:300px;
  	margin: 20px 0 0 0;
  	_margin: 0;
  	opacity: 0;
  	visibility: hidden;
  	position: absolute;
  	top: 42px;
  	z-index: 1;
  	right: -140px;
  	background: #ffffff;
  	-webkit-transition: all .2s ease-in-out;
  	-moz-transition: all .2s ease-in-out;
  	-ms-transition: all .2s ease-in-out;
  	-o-transition: all .2s ease-in-out;
  	transition: all .2s ease-in-out;
  	box-shadow: 0px 0px 5px #aaa;
  	-webkit-box-shadow: 0px 0px 5px #aaa;
  	-moz-box-shadow: 0px 0px 5px #aaa;
  	-o-box-shadow: 0px 0px 5px #aaa;
  }
  .icon1 li:hover > ul {
  	opacity: 1;
  	visibility: visible;
  	margin: 0;
  }
  .icon1 ul ul {
  	top: 6px;
  	left: 158px;
  	margin: 0 0 0 20px;
  	border-radius: 5px;
  	-webkit-border-radius: 5px;
  	-moz-border-radius: 5px;
  	-o-border-radius: 5px;
  }
  .icon1 ul li {
  	float: none;
  	display: block;
  	border: 0;
  }
  .icon1 ul li:first-child{
  	border-top:none;
  }
  .icon1 ul li:first-child a{
  	border-top-left-radius: 5px;
  	-webkit-border-top-left-radius: 5px;
  	-moz-border-top-left-radius: 5px;
  	-o-border-top-left-radius: 5px;
  }
  .icon1 ul li:last-child {
  	-moz-box-shadow: none;
  	-webkit-box-shadow: none;
  	box-shadow: none;
  }
  .icon1 ul a {
  	_height: 10px; /*IE6 only*/
  	white-space: nowrap;
  	float: none;
  	text-transform: none;
  }
  .active-icon{
  	display: block;
  }
  .icon1 ul li:first-child > a:after {
  	content: '';
  	position: absolute;
  	left: 45%;
  	top: -30px;
  	border-left: 10px solid transparent;
  	border-right:10px solid transparent;
  	border-bottom:10px solid #f0f0f0;
  }
  .icon1 ul ul li:first-child a:after {
  	left: -100px;
  	top: 0%;
  	margin-top: -6px;
  	border-left: 0;
  	border-bottom:20px solid transparent;
  	border-top: 20px solid transparent;
  	border-right:20px solid #323757;
  }
  /* Mobile */
  .icon1-trigger {
  	display: none;
  }
  .sub-icon1 img{
  	border:none;
  	display:inline-block;
  	vertical-align:middle;
  }
  .c1{
  	background: url(../images/art.png) no-repeat 0px 0px;
  	width: 32px;
  	height: 32px;
  	display: inline-block;
  	vertical-align: middle;
  	margin-top: 2px;
  }
  .c2 {
    background: url(../images/bag.png) no-repeat 0px 1px;
    width: 24px;
    height: 24px;
    display: inline-block;
    vertical-align: middle;
  }
  .icon1 .profile_img {
  	margin-top: 3px;
  }
  .sub-icon1 ul li h3{
  	text-align:center;
  	font-size: 1em;
  	color: #00405d;
  	text-transform:uppercase;
  	margin-bottom: 4%;
  }
  .sub-icon1 ul li p{
  	text-align:center;
  	font-size: 0.8125em;
  	color: #555555;
  	line-height: 1.8em;
  }
  .sub-icon1.list{
  	padding: 20px 0px;
  }
  .sub-icon1 ul li p a{
  	color: #00405d;
  }
  .sub-icon1 ul li p a:hover{
  	color: #555555;
  	text-decoration:underline;
  }
  ul.megamenu.skyblue {
    background: #f5f5f5;
  }
  .rgt-bottom {
    margin-bottom: 1em;
  }
  /* start menu */
  .h_nav h4{
  	border-bottom: 1px solid rgb(236, 236, 236);
  	font-size: 1em;
  	color: #000;
  	line-height: 1.8em;
  	text-transform: uppercase;
  	margin-bottom: 4%;
  }
  .h_nav h4.top{
  	margin-top: 12%;
  }
  .h_nav ul li{
  	display: block;
  }
  .h_nav ul li a{
  	display: block;
  	font-size: 0.95em;
  	color: #555;
  	text-transform: capitalize;
  	line-height: 1.8em;
  	-webkit-transition: all 0.3s ease-in-out;
  	-moz-transition: all 0.3s ease-in-out;
  	-o-transition: all 0.3s ease-in-out;
  	transition: all 0.3s ease-in-out;
  	line-height: 2.5em;
  }
  .h_nav ul li a:hover{
  	color:#00405d;
  	text-decoration:underline;
  }
  /* start content */
  .arriv-left {
    padding-left: 0;
    position:relative;
  }
  .arriv-info {
    position: absolute;
    top: 216px;
    left: 119px;
    text-align: center;
  }
  .arriv-right {
    padding-right: 0;
    position:relative;
  }
  .arriv-left1 {
    padding-left: 0;
    position: relative;
  }
  .arriv-left2 {
    padding-left: 0;
    position: relative;
  }
  .arriv-right1 {
    padding-right: 0;
    position: relative;
  }
  .arriv-right2 {
    padding-right: 0;
    position: relative;
  }
  .arriv h3 {
    font-size: 1.5em;
    font-weight: 500;
    color: #f9f9f9;
    margin: 0 0 0.5em;
    font-family: 'Playfair Display', serif;
  }
  .arriv p {
    color: #ededed;
    font-size: 1em;
    font-weight: 300;
    line-height: 1.8em;
    margin: 0.5em 0;
  }
  .crt-btn a {
    text-transform: capitalize;
    display: inline-block;
    padding: 6px 16px;
    font-size: 0.8725em;
    font-weight: 300;
    color: #f9f9f9;
    border: 1px solid #f9f9f9;
    background: none;
    text-decoration: none;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
  }
  .crt-btn a:hover{
    background:#ff6978;
    border:1px solid #ff6978;
  }
  .arriv-info1 {
    position: absolute;
    top: 145px;
    left: 248px;
    text-align: center;
  }
  .arriv-bottm {
    margin: 1.5em 0;
  }
  .arriv-top {
    margin: 1.5em 0;
  }
  i.ars {
    width: 35px;
    height: 20px;
    background: url(../images/arrwss.png)no-repeat 58px -1px ;
    display: inline-block;
    padding: 0px 53px;
    vertical-align: middle;
  }
  .arriv-info2 {
    position: absolute;
    bottom: 32px;
    left: 42px;
    text-align: center;
  }
  .arriv-info3 {
    position: absolute;
    bottom: 32px;
    left: 42px;
    text-align: center;
  }
  .special h5 {
    color: #3f3d3d;
    font-size: 1.1em;
    font-weight: 400;
    font-family: 'Playfair Display', serif;
    text-align: center;
    margin: 0;
  }
  .special h6 {
    color: #3f3d3d;
    font-size: 1em;
    font-weight: 300;
    text-align: center;
    margin:1em 0;
  }
  .special-info {
    padding: 1em 0;
    border: 1px solid #e9e9e9;
  }
  .special {
    padding: 4em 0;
      position: relative;
  }
  i.facebok {
    width: 35px;
    height: 35px;
    background: url(../images/img-sprite.png)no-repeat -8px -10px;
    float: left;
    vertical-align: middle;
  }
  i.facebok:hover{
    background: url(../images/img-sprite.png)no-repeat -8px -46px;
  }
  i.twiter {
    width: 35px;
    height: 35px;
    background: url(../images/img-sprite.png)no-repeat -48px -12px;
    float: left;
    vertical-align: middle;
  }
  i.twiter:hover{
    background: url(../images/img-sprite.png)no-repeat -48px -48px;
  }
  i.be {
    width: 35px;
    height: 35px;
    background: url(../images/img-sprite.png)no-repeat -133px -10px;
    float: left;
    vertical-align: middle;
  }
  i.be:hover{
    background: url(../images/img-sprite.png)no-repeat -133px -46px;
  }
  i.pp {
    width: 35px;
    height: 35px;
    background: url(../images/img-sprite.png)no-repeat -177px -9px;
    float: left;
    vertical-align: middle;
  }
  i.pp:hover{
    background: url(../images/img-sprite.png)no-repeat -177px -45px;
  }
  i.goog {
    width: 35px;
    height: 35px;
    background: url(../images/img-sprite.png)no-repeat -92px -13px;
    float: left;
    vertical-align: middle;
  }
  i.goog:hover{
    background: url(../images/img-sprite.png)no-repeat -92px -48px;
  }
  .social-ic ul {
    padding: 0;
  }
  .social-ic li {
    display: inline-block;
    margin: 0 0.2em;
  }
  .foot-top li {
    display: inline-block;
    vertical-align: middle;
  }
  .fooll h5 {
    font-size: 1.1em;
    margin: 0;
    text-transform: uppercase;
    font-weight: 400;
    padding-right: 1em;
  }
  .foot-top {
    padding: 2em 0;
    border-bottom: 1px solid #e5e4e2;
    border-top: 1px solid #e5e4e2;
  }
  .stay form input[type="text"] {
    width: 100%;
    color: #3f3d3d;
    outline: none;
    font-size: 1em;
    padding: 0.5em;
    font-weight:300;
    border: 1px solid #e5e4e2;
    -webkit-appearance: none;
  }
  .btn-1 form input[type="submit"] {
    background: #0f0f0f;
    padding: 0.5em;
    color: #fff;
    font-size: 1em;
    font-weight: 400;
    display: block;
    outline: none;
    border: none;
    width: 100%;
    text-transform: uppercase;
  }
  .btn-1 form input[type="submit"]:hover{
  	background: rgba(15, 15, 15, 0.72);
  }
  .stay-left {
    float: left;
    width: 78%;
    margin-right: 0.5%;
  }
  .btn-1 {
    float: left;
    width: 21.5%;
  }
  .footer h4 {
    color: #3f3d3d;
    font-family: 'Playfair Display', serif;
    font-weight: 400;
    margin: 0 0 1em;
  }
  .footer {
    padding: 3em 0;
  }
  i.phone {
    width: 19px;
    height: 21px;
    display: inline-block;
    background: url(../images/img-sprite.png) no-repeat -235px -39px;
    vertical-align: middle;
    margin-right: 0.5em;
  }
  i.add {
    width: 17px;
    height: 24px;
    display: inline-block;
    background: url(../images/img-sprite.png) no-repeat -236px -11px;
    vertical-align: middle;
    margin-right: 0.5em;
  }
  i.mail {
    width: 17px;
    height: 14px;
    display: inline-block;
    background: url(../images/img-sprite.png) no-repeat -236px -76px;
    margin-right: 0.5em;
  }
  .our-st li {
    color: #3f3d3d;
    display: block;
    font-size: 1em;
    font-weight: 300;
    line-height: 2em;
  }
  .our-st li a{
    text-decoration:none;
  }
  .cust li {
  display:block;
  }
  .cust li a {
    display: block;
    color: #3f3d3d;
    font-size: 1em;
    line-height: 1.8em;
    text-decoration: none;
  }
  .cust li a:hover{
  	color:#D03333
  }
  .abt li {
  display:block;
  }
  .abt li a {
    display: block;
    color: #3f3d3d;
    font-size: 1em;
    line-height: 1.8em;
    text-decoration: none;
  }
  .abt li a:hover{
  	color:#D03333
  }
  .myac li {
  display:block;
  }
  .myac li a {
    display: block;
    color: #3f3d3d;
    font-size: 1em;
    line-height: 1.8em;
    text-decoration: none;
  }
  .myac li a:hover{
  	color:#D03333
  }
  .our-left {
    float: left;
    width: 33.33%;
  }
  .cr_btn a {
    text-transform: capitalize;
    display: inline-block;
    padding: 3px 25px;
    font-size: 0.9em;
    font-weight: 300;
    color: #3f3d3d;
    background: #e5e4e2;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    text-decoration:none;
  }
  .cr_btn1 a {
    text-transform: capitalize;
    display: inline-block;
    padding: 2px 23px;
    font-size: 0.9em;
    font-weight: 300;
    color: #3f3d3d;
    background: none;
    border: 1px solid #e5e4e2;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    text-decoration: none;
  }
  .our-left1 {
    float: left;
    width: 22%;
  }
  .cr_btn1 a:hover{
     color: #3f3d3d;
    background: #e5e4e2;
      border:1px solid #e5e4e2;
  }
  .special h3:before {
    height: 8px;
    width: 371px;
    content: '';
    background: url(../images/line.png)no-repeat;
    display: block;
    position: absolute;
    left: 301px;
    top: 87px;
  }
  .special h3:after {
    height: 8px;
    width: 371px;
    content: '';
    background: url(../images/line.png)no-repeat;
    display: block;
    position: absolute;
    right: 301px;
    top: 87px;
  }
  .special h3 {
    font-family: 'Playfair Display', serif;
    font-size: 1.5em;
    border: 1px solid #e5e4e2;
    text-align: center;
    padding: 0.5em;
    margin: 0 auto;
    width: 21%;
  }
  .specia-top {
    margin: 3em 0;
  }
  .footer p {
    margin: 1.5em 0 0;
    font-size: 1em;
    color: #3f3d3d;
    font-weight: 400;
    line-height: 1.8em;
  }
  .footer p a{
  text-decoration:none;
  }
  ul.grid_2 {
    padding: 0;
  }
  ul.grid_2 li {
    display: inherit;
  }
  ul.grid_2 li:hover {
    background: #e9e9e9;
    color: #ff6978;
  }
  ul.grid_2 li h5:hover {
    color: #ff6978;
  }
  ul.grid_2 li {
    width: 23%;
    float: left;
    margin:0 1%
  }
  .arriv-info2 a {
    text-decoration: none;
  }
  .arriv-info2 a h3:hover{
    color:#ff6978;
  }
  /* start women */
  .w_sidebar{
  	border: 1px solid #EBEBEB;
  }
  .w_nav1 ul{
  	padding:0;
  	list-style:none;
  }
  .w_nav1{
  	padding: 20px;
  }
  .w_nav1 h4{
  	text-transform:uppercase;
  	color:#ff6978;
  	font-size: 1em;
  	margin-bottom: 5px;
  }
  .w_nav1 ul li{
  	line-height: 1.5em;
  }
  .w_nav1 ul li a{
  	display: block;
  	text-transform:uppercase;
  	color: #555555;
  	font-size: 0.8725em;
  }
  .w_nav1 ul li a:hover{
  	color:#00405d;
  }
  .w_nav2{
  	padding: 20px;
  }
  .w_nav2  li{
  	line-height: 1.5em;
  	display: inline-block;
  }
  .w_nav2 li a{
  	display: block;
  	padding: 14px;
  }
  .w_nav2 li a.color1{
  	background:	#0AA5E2;
  }
  .w_nav2 li a.color2{
  	background:	#40E0D0;
  }
  .w_nav2 li a.color3{
  	background:	#B03060;
  }
  .w_nav2 li a.color4{
  	background:	#000080;
  }
  .w_nav2 li a.color5{
  	background:	#E60D41;
  }
  .w_nav2 li a.color6{
  	background:	#45BF55;
  }
  .w_nav2 li a.color7{
  	background:	#FF7F00;
  }
  .w_nav2 li a.color8{
  	background:	#8B4513;
  }
  .w_nav2 li a.color9{
  	background:	#FFD700;
  }
  .w_nav2 li a.color10{
  	background:	#9FA8AB;
  }
  .w_nav2 li a.color11{
  	background:	#C0C0C0;
  }
  .w_nav2 li a.color12{
  	background:	#0AA5E2;
  }
  .w_nav2 li a.color13{
  	background:	#FFCBDB;
  }
  .w_nav2 li a.color14{
  	background:	#B87333;
  }
  .w_nav2 li a.color15{
  	background:	#BFB540;
  }
  .sky-form .label {
  	display: block;
  	margin-bottom: 6px;
  	line-height: 19px;
  }
  .w_sidebar h3{
  	padding:0 20px 10px;
  	font-size: 1em;
  	color: #555555;
  	text-transform:uppercase;
  }
  /* radios and checkboxes */
  .sky-form {
  	margin-top: -10px;
  }
  .row1{
  	outline:none;
  	padding: 20px;
  	overflow: auto;
  	height: 200px;
  }
  .sky-form.col.col-4 ul {
  padding: 0;
  list-style: none;
  }
  .sky-form h4{
  	margin-top: 10px;
  	background: #ECECEC;
  	padding: 10px 20px;
  	color: #333333;
  	text-transform: uppercase;
  	margin-bottom: 0;
  	font-size:16px;
  }
  .sky-form section {
  	margin-bottom: 20px;
  }
  .sky-form .label {
  	display: block;
  	margin-bottom: 6px;
  	line-height: 19px;
  }
  .sky-form .label.col {
  	margin: 0;
  	padding-top: 10px;
  }
  .sky-form .input,
  .sky-form .select,
  .sky-form .textarea,
  .sky-form .radio,
  .sky-form .checkbox,
  .sky-form .toggle,
  .sky-form .button {
  	position: relative;
  	display: block;
  }
  /* selects */
  .sky-form .select i {
  	position: absolute;
  	top: 14px;
  	right: 14px;
  	width: 1px;
  	height: 11px;
  	background: #fff;
  	box-shadow: 0 0 0 12px #fff;
  }
  .sky-form .select i:after,
  .sky-form .select i:before {
  	content: '';
  	position: absolute;
  	right: 0;
  	border-right: 4px solid transparent;
  	border-left: 4px solid transparent;
  }
  .sky-form .select i:after {
  	bottom: 0;
  	border-top: 4px solid #404040;
  }
  .sky-form .select i:before {
  	top: 0;
  	border-bottom: 4px solid #404040;
  }
  .sky-form .select-multiple select {
  	height: auto;
  }
  /* radios and checkboxes */
  .sky-form .radio,.sky-form .checkbox {
  	outline:none;
  	border:none;
  	margin-bottom: 4px;
  	padding-left: 27px;
  	font-size: 13px;
  	line-height: 27px;
  	color: #555555;
  	cursor: pointer;
  	text-transform: capitalize;
  	font-weight: normal;
  	margin-top: 0;
  }
  .sky-form .radio{
  	text-transform: none;
  }
  .sky-form .radio:last-child,
  .sky-form .checkbox:last-child {
  	margin-bottom: 0;
  }
  .sky-form .radio input,
  .sky-form .checkbox input {
  	position: absolute;
  	left: -9999px;
  }
  .sky-form .radio i,
  .sky-form .checkbox i {
  	position: absolute;
  	top: 5px;
  	left: 0;
  	display: block;
  	width: 17px;
  	height: 17px;
  	outline: none;
  	border-width: 2px;
  	border-style: solid;
  	background: #fff;
  }
  .sky-form .radio i {
  	border-radius: 50%;
  }
  .sky-form .radio input + i:after,
  .sky-form .checkbox input + i:after {
  	position: absolute;
  	opacity: 0;
  	transition: opacity 0.1s;
  	-o-transition: opacity 0.1s;
  	-ms-transition: opacity 0.1s;
  	-moz-transition: opacity 0.1s;
  	-webkit-transition: opacity 0.1s;
  }
  .sky-form .radio input + i:after {
  	content: '';
  	top: 4px;
  	left: 4px;
  	width: 5px;
  	height: 5px;
  	border-radius: 50%;
  }
  .sky-form .checkbox input + i:after {
  	content: '';
  	top: 3px;
  	left: 2px;
  	width: 10px;
  	height: 7px;
  	background: url(../images/tick.png) no-repeat;
  	text-align: center;
  }
  .sky-form .radio input:checked + i:after,
  .sky-form .checkbox input:checked + i:after {
  	opacity: 1;
  }
  .sky-form .inline-group {
  	margin: 0 -30px -4px 0;
  }
  .sky-form .inline-group:after {
  	content: '';
  	display: table;
  	clear: both;
  }
  .sky-form .inline-group .radio,
  .sky-form .inline-group .checkbox {
  	float: left;
  	margin-right: 30px;
  }
  .sky-form .inline-group .radio:last-child,
  .sky-form .inline-group .checkbox:last-child {
  	margin-bottom: 4px;
  }
  /* icons */

  .sky-form [class^="icon-"] {
    font-family: FontAwesome;
    font-style: normal;
    font-weight: normal;
    -webkit-font-smoothing: antialiased;
  }
  /* normal state */
  .sky-form .input input,
  .sky-form .select select,
  .sky-form .textarea textarea,
  .sky-form .radio i,
  .sky-form .checkbox i,
  .sky-form .toggle i,
  .sky-form .icon-append,
  .sky-form .icon-prepend {
  	border-color: #e5e5e5;
  	transition: border-color 0.3s;
  	-o-transition: border-color 0.3s;
  	-ms-transition: border-color 0.3s;
  	-moz-transition: border-color 0.3s;
  	-webkit-transition: border-color 0.3s;
  }
  .sky-form .toggle i:before {
  	background-color: #2da5da;
  }
  /* hover state */
  .sky-form .input:hover input,
  .sky-form .select:hover select,
  .sky-form .textarea:hover textarea,
  .sky-form .radio:hover i,
  .sky-form .checkbox:hover i,
  .sky-form .toggle:hover i {
  	border-color: #8dc9e5;
  }
  .sky-form .button:hover {
  	opacity: 1;
  }
  /* focus state */
  .sky-form .input input:focus,
  .sky-form .select select:focus,
  .sky-form .textarea textarea:focus,
  .sky-form .radio input:focus + i,
  .sky-form .checkbox input:focus + i,
  .sky-form .toggle input:focus + i {
  	border-color: #2da5da;
  }
  /* checked state */
  .sky-form .radio input + i:after {
  	background-color: #ff6978;
  }
  .sky-form .checkbox input + i:after {
  	color: #2da5da;
  }
  .sky-form .radio input:checked + i,
  .sky-form .checkbox input:checked + i,
  .sky-form .toggle input:checked + i {
  	border-color: #ff6978;
  }
  /* error state */
  .sky-form .state-error input,
  .sky-form .state-error select,
  .sky-form .state-error textarea,
  .sky-form .radio.state-error i,
  .sky-form .checkbox.state-error i,
  .sky-form .toggle.state-error i {
  	background: #fff0f0;
  }
  /* success state */
  .sky-form .state-success input,
  .sky-form .state-success select,
  .sky-form .state-success textarea,
  .sky-form .radio.state-success i,
  .sky-form .checkbox.state-success i,
  .sky-form .toggle.state-success i {
  	background: #f0fff0;
  }
  /* disabled state */
  .sky-form .input.state-disabled input,
  .sky-form .select.state-disabled,
  .sky-form .textarea.state-disabled,
  .sky-form .radio.state-disabled,
  .sky-form .checkbox.state-disabled,
  .sky-form .toggle.state-disabled,
  .sky-form .button.state-disabled {
  	cursor: default;
  	opacity: 0.5;
  }
  .sky-form .input.state-disabled:hover input,
  .sky-form .select.state-disabled:hover select,
  .sky-form .textarea.state-disabled:hover textarea,
  .sky-form .radio.state-disabled:hover i,
  .sky-form .checkbox.state-disabled:hover i,
  .sky-form .toggle.state-disabled:hover i {
  	border-color: #e5e5e5;
  }
  /*-- start scrollpane --*/
  .jspContainer{
  	overflow: hidden;
  	position: relative;
  }
  .jspPane{
  	position: absolute;
  	outline: none;
  	padding: 20px !important;
  }
  .jspVerticalBar{
  	position: absolute;
  	top: 0;
  	right:0px;
  	width:5px;
  	height: 100%;
  }
  .jspHorizontalBar{
  	position: absolute;
  	bottom: 0;
  	left: 0;
  	width: 100%;
  	height: 16px;
  	background: red;
  }
  .jspCap{
  	display: none;
  }
  .jspHorizontalBar .jspCap{
  	float: left;
  }
  .jspTrack{
  	background: #f0f0f0;
  	position: relative;
  }
  .jspDrag{
  	background: #777777;
  	position: relative;
  	top: 0;
  	left: 0;
  	cursor: pointer;
  }
  .jspHorizontalBar .jspTrack,.jspHorizontalBar .jspDrag{
  	float: left;
  	height: 100%;
  }
  .jspArrow{
  	background: #50506d;
  	text-indent: -20000px;
  	display: block;
  	cursor: pointer;
  	padding: 0;
  	margin: 0;
  }
  .jspArrow.jspDisabled{
  	cursor: default;
  	background: #80808d;
  }
  .jspVerticalBar .jspArrow{
  	height: 16px;
  }
  .jspHorizontalBar .jspArrow{
  	width: 16px;
  	float: left;
  	height: 100%;
  }
  .jspVerticalBar .jspArrow:focus{
  	outline: none;
  }
  .jspCorner{
  	background: #eeeef4;
  	float: left;
  	height: 100%;
  }
  /*-- end scrollpane --*/
  /*-- start w_content --*/
  .women_main{
  	padding:2em 0;
  }
  .women{
  	text-align: left;
  	border-bottom: 1px solid #ebebeb;
  }
  .women h4{
  	float:left;
  	font-size:1em;
  	text-transform:uppercase;
  	color: #333333;
  }
  .women h4{
  	color:#555555;
  }
  .w_nav {
  	float:right;
  	color:#555555;
  	font-size:0.8125em;
  	padding:0;
  	list-style:none;
  }
  .w_nav li{
  	display: inline-block;
  }
  .w_nav li a{
  	display: block;
  	color:#555555;
  	text-transform:capitalize;
  }
  .w_nav li a:hover{
  	color: #00405d;
  }
  .grids_of_4{
  	display:block;
  	margin: 2% 0;
  }
  .grid1_of_4{
  	float: left;
  	width: 23.22222%;
  	margin-left: 2.33333%;
  	text-align:center;
  }
  .grid1_of_4:first-child{
  	margin-left: 0;
  	text-align:center;
  }
  .grid1_of_4 h4 {
  	font-size:16px;
  	margin-top:5px;
  }
  .grid1_of_4 h4 a{
  	text-transform:uppercase;
  	color:#000000;
  	text-decoration:none;
  }
  .grid1_of_4 h4 a:hover{
  	color:#ff6978;
  }
  .grid1_of_4 p{
  	font-size: 0.8125em;
  	color:#3f3d3d;
  	line-height: 1.8em;
  	margin-bottom: 10px;
  }
  .content_box-grid {
  	margin-top: 1em;
  }
  .view {
     overflow: hidden;
     position: relative;
     margin-bottom: 1em;
  }
  .view .mask,.view .content {
     position: absolute;
  	overflow: hidden;
  	top: 188px;
  	left: 117px;
  }
  .view-fifth img {
     -webkit-transition: all 0.3s ease-in-out;
     -moz-transition: all 0.3s ease-in-out;
     -o-transition: all 0.3s ease-in-out;
     -ms-transition: all 0.3s ease-in-out;
     transition: all 0.3s ease-in-out;
  }
  .view-fifth .mask {
    -webkit-transform: translateX(-300px);
     -moz-transform: translateX(-300px);
     -o-transform: translateX(-300px);
     -ms-transform: translateX(-300px);
     transform: translateX(-300px);
     -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=100)";
     filter: alpha(opacity=100);
     opacity: 1;
     -webkit-transition: all 0.3s ease-in-out;
     -moz-transition: all 0.3s ease-in-out;
     -o-transition: all 0.3s ease-in-out;
     -ms-transition: all 0.3s ease-in-out;
     transition: all 0.3s ease-in-out;
  }
  .view-fifth:hover .mask {
     -webkit-transform: translateX(0px);
     -moz-transform: translateX(0px);
     -o-transform: translateX(0px);
     -ms-transform: translateX(0px);
     transform: translateX(0px);
  }
  .view1{
     overflow: hidden;
     position: relative;
  }
  .view1 .mask1,.view1 .content {
     position: absolute;
     overflow: hidden;
     top:130px;
     left:90px;
  }
  .info {
     display: block;
  	background: url(../images/label_new.png) no-repeat;
  	text-indent: -9999px;
  	width: 75px;
  	height: 75px;
  }
  .view-fifth1 img {
     -webkit-transition: all 0.3s ease-in-out;
     -moz-transition: all 0.3s ease-in-out;
     -o-transition: all 0.3s ease-in-out;
     -ms-transition: all 0.3s ease-in-out;
     transition: all 0.3s ease-in-out;
  }
  .view-fifth1 .mask1 {
    -webkit-transform: translateX(-300px);
     -moz-transform: translateX(-300px);
     -o-transform: translateX(-300px);
     -ms-transform: translateX(-300px);
     transform: translateX(-300px);
     -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=100)";
     filter: alpha(opacity=100);
     opacity: 1;
     -webkit-transition: all 0.3s ease-in-out;
     -moz-transition: all 0.3s ease-in-out;
     -o-transition: all 0.3s ease-in-out;
     -ms-transition: all 0.3s ease-in-out;
     transition: all 0.3s ease-in-out;
  }
  .view-fifth1:hover .mask1 {
     -webkit-transform: translateX(0px);
     -moz-transform: translateX(0px);
     -o-transform: translateX(0px);
     -ms-transform: translateX(0px);
     transform: translateX(0px);
  }
  span.text {
    font-size: 1.2em;
    color: #999;
  }
  span.price-new {
    color: #ff6978;
    margin-right: 15px;
    font-weight: 500;
    font-size: 1.3em;
  }
  .price-old {
    text-decoration: line-through;
    color: #999;
    font-weight: normal;
    font-size: 17px;
    margin-right: 10px;
  }
  span.price-tax {
    color: #999;
    font-size: 13px;
  }
  span.points {
    color: #999;
    font-size: 13px;
  }
  span.code {
    color: #999;
  }
  span.brand {
    color: #999;
    line-height: 2em;
  }
  /*--single--*/
  .cont{
  	display: block;
  	float:left;
  }
  .span_2_of_bottom1 {
  	width:68.1%;
  }
  .lsidebar{
  	display: block;
  	float:right;
  	margin-left:3.333%;
  }
  .span_2_of_bottom {
  	width: 66.1%;
  }
  .span_1_of_bottom {
  	width:25.1%;
  	border: 1px solid #DDD;
  }
  .span_2_of_bottom p,
  .span_1_of_bottom  p  {
  	font-size:0.8125em;
  	padding:0.5em 0;
  	color: #888;
  	line-height: 1.5em;
  }
  .desc{
  	padding:5%;
  }
  .desc h5 a{
  	color:#C0313C;
  	font-size: 0.788em;
  }
  .desc h5 a:hover{
  	color:#333;
  }
  .button {
  	border: none;
  	background: #45A43E;
  	color: #FEF503;
  	float: right;
  	padding: 7px 15px;
  	font-size: 12px;
  	cursor: pointer;
  	outline: none;
  	text-transform:uppercase;
  }
  .button:hover {
  	background:#333;
  }
  .price-text{
  	padding:5% 0;
  }
  .span_3_of_2 {
  	width:60.3333%;
  }
  .desc1 {
  	display: block;
  	float: right;
  }
  p.stock {
  	display: block;
  	font-size: 0.89em;
  	color: #555;
  	margin: 10px 0;
  }
  .row-2 {
  	overflow: hidden;
  	text-align: left;
  	padding-top: 6px;
  	border-top: 1px dotted #CCC;
  	border-bottom: 1px dotted #CCC;
  }
  span.on_sale {
  	display: block;
  	float: left;
  	padding: 15px 6px 0 30px;
  	font-size: 1.1em;
  	font-style: italic;
  	font-weight: normal;
  	color: #777777;
  }
  .price1 {
  	padding: 4% 0;
  }
  span.actual1 {
  	text-decoration: line-through;
  	margin-right: 8%;
  	color: #888;
  	font-size: 1.2em;
  }
  .images_3_of_2 {
  	width:35.2%;
  	float: left;
  	margin-right: 2.6%;
  }
  .single-bottom1 h6, .single-bottom2 h6 {
  	background: #F3F3F3;
  	padding: 10px;
  	color: #333;
  	font-size: 1.2em;
  }
  p.prod-desc {
  	color: #3f3d3d;
  	padding-top: 2%;
  	font-size: 0.89em;
  	line-height: 1.8em;
  }
  .single-bottom1 {
  	padding: 3% 0 4%;
  }
  .product {
  	padding: 3% 0 0 0;
  }
  .product-desc {
  	width: 82.3333%;
  	float: left;
  	border-width: 0 1px 0 0;
  	border-right: 1px solid #DDD;
  }
  .product-img {
  	width: 21.5%;
  	float: left;
  	margin-right: 2.5%;
  }
  .prod1-desc {
  	width: 75.2%;
  	float: left;
  }
  .product-desc h5 {
  	padding-bottom: 2%;
  }
  .product-desc h5 a{
  	color:#555;
  	font-size:20px;
  }
  .product-desc h5 a:hover{
  	color:#ffcc33;
  	text-decoration:none;
  }
  p.product_descr {
  	color: #3f3d3d;
  	font-size: 0.89em;
  	line-height: 1.8em;
  }
  .product_price {
  	width:15.3333%;
  	float: left;
  	padding: 0 0px 0px 16px;
  }
  .price-access {
  	color: #555;
  	font-size: 1em;
  }
  .button1 {
  	font-family: 'Open Sans', sans-serif;
  	border: none;
  	background:#ff6978;
  	padding: 7px 15px;
  	color: #FFF;
  	font-size: 13px;
  	cursor: pointer;
  	outline: none;
  	margin-top: 9%;
  	-webkit-transition: all 0.3s ease-in-out;
  	-moz-transition: all 0.3s ease-in-out;
  	-o-transition: all 0.3s ease-in-out;
  	transition: all 0.3s ease-in-out;
  }
  .button1:hover{
  	background:#00405d;
  	color: #fff;
  }
  .desc1 h3{
  	color:#333333;
  	font-size:1.4em;
  	text-transform:capitalize;
  }
  .desc1 p {
    margin-top: 2%;
    font-size: 0.89em;
    color: #3f3d3d;
    line-height: 1.8em;
    letter-spacing: 1px;
  }
  .desc1 p a{
  	margin-left:5px;
  	color:#555555;
  	text-transform:uppercase;
  	font-size: 13px;
  	-webkit-text-stroke: 0px;
  	letter-spacing: 0px;
  }
  .desc1 p a:hover{
  	color: #00405d;
  }
  .det_nav {
  	margin:  6% 0;
  }
  .det_nav ul{
  	padding:0;
  	list-style:none;
  }
  .det_nav h4{
  	line-height:1.8em;
  	font-size: 1em;
  	color: #555555;
  	text-transform:uppercase;
  	margin-bottom: 4%;
  }
  .det_nav ul li{
  	display:inline-block;
  	width: 20.33333%;
  	margin-left: 4%;
  }
  .det_nav ul li:first-child{
  	margin-left: 0;
  }
  .det_nav ul li a{
  	display:block;
  }
  .det_nav ul li a img{
  	border: 1px solid #DADADA;
  }
  .btn_form{
  	margin: 8% 0 4%;
  }
  .btn_form a{
  	font-family: 'Open Sans', sans-serif;
  	cursor:pointer;
  	border:none;
  	outline:none;
  	display: inline-block;
  	font-size: 1em;
  	padding: 10px 34px;
  	background:#ff6978;
  	color:#fff;
  	text-transform:uppercase;
  	-webkit-transition: all 0.3s ease-in-out;
  	-moz-transition: all 0.3s ease-in-out;
  	-o-transition: all 0.3s ease-in-out;
  	transition: all 0.3s ease-in-out;
  }
  .btn_form a:hover{
  	background: #00405d;
  	text-decoration:none;
  }
  .desc1  a span{
  	font-size:0.8125em;
  	color:#555555;
  	text-transform:uppercase;
  	text-decoration:underline;
  }
  .desc1 a span:hover{
  	color: #00405d;
  	text-decoration:none;
  }
  .det_nav1 h4 {
    font-size: 1em;
    text-transform: uppercase;
    color: #555;
    margin: 3% 0 6% 0;
  }
  .det_nav1 ul li{
  	display: inline-block;
  	margin-left: 10px;
  }
  .det_nav1 ul li:first-child{
  	margin-left: 0;
  }
  /* end details */
  /* start registration */
  .registration{
  	padding: 3% 1%;
  }
  .registration h2{
  	font-size:1.5em;
  	color: #00405d;
  	text-transform:capitalize;
  	margin-bottom: 4%;
  }
  .reg_fb {
  	margin:3% 0;
  	display: block;
  	background: #3B5998;
  	transition: all 0.5s ease-out;
  	-webkit-transition: all 0.3s ease-in-out;
  	-moz-transition: all 0.3s ease-in-out;
  	-o-transition: all 0.3s ease-in-out;
  	transition: all 0.3s ease-in-out;
  }
  .reg_fb img {
  	background:#354F88;
  	padding: 10px;
  	float: left;
  }
  .reg_fb i {
  	color: #ffffff;
  	padding: 12px 16px;
  	display: inline-block;
  	font-size: 1.3em;
  	text-transform: capitalize;
  	font-style: normal;
  }
  .reg_fb:hover {
  	background:#354F88;
  }
  .registration_left{
  	float: left;
  	width: 45.33333%;
  	margin-left: 9.333%;
  }
  .registration_left:first-child{
  	margin-left: 0;
  }
  .registration span{
  	color: #777777;
  }
  .registration_form{
  	display: block;
  }
  .registration_form div{
  	padding:10px 0;
  }
  .sky_form1{
  	margin-bottom: -30px;
  }
  .sky_form1 ul{
  	padding:0;
  	list-style:none;
  }
  .sky_form1 ul li{
  	float: left;
  	margin-left: 20px;
  }
  .sky_form1 ul li:first-child{
  	margin-left: 0;
  }
  label {
  	display: block;
  	margin-bottom: 0;
  	font-weight: normal;
  }
  .registration_form input[type="text"],.registration_form input[type="email"],.registration_form input[type="tel"],.registration_form input[type="password"]{
  	padding: 8px;
  	display: block;
  	width:100%;
  	outline: none;
  	font-family: 'Open Sans', sans-serif;
  	font-size: 0.8925em;
  	color: #333333;
  	-webkit-appearance: none;
  	text-transform: capitalize;
  	background: #FFFFFF;
  	border: 1px solid rgb(231, 231, 231);
  	font-weight: normal;
  }
  .registration_form input[type="submit"]{
  	-webkit-appearance: none;
  	font-family: 'Open Sans', sans-serif;
  	color: #ffffff;
  	text-transform: capitalize;
  	display: inline-block;
  	background:#ff6978;
  	padding: 10px 20px;
  	transition: 0.5s ease;
  	-moz-transition: 0.5s ease;
  	-o-transition: 0.5s ease;
  	-webkit-transition: 0.5s ease;
  	cursor:pointer;
  	border:none;
  	outline:none;
  	font-size:1em;
  	margin-bottom: 5px;
  }
  .registration_form input[type="submit"]:hover{
  	color: #ffffff;
  	background:#00405d;
  }
  .terms{
  	text-decoration:underline;
  	text-transform:capitalize;
  	color: #00405d;
  }
  .terms:hover{
  	text-decoration:none;
  }
  .forget a{
  	text-transform: capitalize;
  	color: #999999;
  	text-decoration: underline;
  	font-size: 0.8925em;
  }
  .forget a:hover{
  	text-decoration: none;
  }
  /* start shopping bag */
  .shoping_bag {
  	padding: 2% 1%;
  	border-bottom: 1px solid rgb(223, 223, 223);
  }
  .shoping_bag h4{
  	float:left;
  	text-transform: uppercase;
  	color: #777777;
  	font-size:1em;
  	margin: 13px 0 0;
  }
  .shoping_bag h4 img{

  	margin-right: 5px;
  }
  .shoping_bag h4 span{
  	color:#ff6978;
  }
  .s_art {
  	float: right;
  	padding: 0;
  	list-style: none;
  }
  .s_art li{
  	text-align:center;
  	text-transform: uppercase;
  	color: #777777;
  	font-size:1em;
  }
  .shoping_bag1{
  	padding: 2% 1%;
  	border-bottom: 1px solid rgb(223, 223, 223);
  }
  .shoping_left{
  	float: left;
  	width:68.333%;
  	margin-right: 3.3333%;
  }
  .shoping_right{
  	float: right;
  	width:14.333%;
  }
  .shoping1_of_1{
  	float: left;
  	width: 12.3333%;
  	margin-right: 3.3333%;
  }
  .shoping1_of_2{
  	float: left;
  	width: 68.3333%;
  }
  .shoping_left h4{
  	margin-bottom: 2%;
  }
  .shoping_left h4 a{
  	text-transform: uppercase;
  	color: #00405d;
  	font-size:1em;
  	text-decoration: underline;
  	-webkit-transition: all 0.3s ease-in-out;
  	-moz-transition: all 0.3s ease-in-out;
  	-o-transition: all 0.3s ease-in-out;
  	transition: all 0.3s ease-in-out;
  }
  .shoping_left h4 a:hover{
  	text-decoration: none;
  	color: #777777;
  }
  .shoping_left span{
  	text-transform: uppercase;
  	color: #999999;
  	font-size: 0.8725em;
  	-webkit-text-stroke: 0.4px;
  }
  .shoping_left span b{
  	color: #555555;
  	font-weight: 600;
  }
  .s_icons{
  	margin-top: 2%;
  }
  ul.s_icons{
  	padding:0;
  	list-style:none;
  }
  .s_icons li{
  	display: inline-block;
  	margin-left: 10px;
  }
  .s_icons li:first-child{
  	margin-left: 0;
  }
  .s_icons li a{
  	display: block;
  	width:30px;
  	height:30px;
  	background: rgb(187, 187, 187);
  	border-radius:100px;
  	-webkit-border-radius:100px;
  	-moz-border-radius:100px;
  	-o-border-radius:100px;
  	-webkit-transition: all 0.3s ease-in-out;
  	-moz-transition: all 0.3s ease-in-out;
  	-o-transition: all 0.3s ease-in-out;
  	transition: all 0.3s ease-in-out;
  	text-align: center;
  	padding: 1px;
  }
  .s_icons li a:hover{
  	background: #00405d;
  }
  .s_icons li a img{
  	vertical-align: bottom;
  }
  .shoping_right p{
  	color: #333333;
  	font-size: 0.8725em;
  	text-transform: capitalize;
  	line-height: 2.5em;
  	-webkit-text-stroke: 0.4px;
  }
  .shoping_right p.tot{
  	font-size: 1.5em;
  }
  .shoping_right p span{
  	color: #ff0000;
  	float: right;
  }
  .shoping_right p a{
  	color:#00405d;
  }
  .shoping_bag {
  	padding: 2% 1%;
  	border-bottom: 1px solid rgb(223, 223, 223);
  }
  .shoping_bag1 h2{
  	float:left;
  	text-transform: uppercase;
  	color: #777777;
  	font-size:1em;
  }
  .shoping_bag1 h2 a{
  	-webkit-text-stroke: 0.4px;
  	color: #00405d;
  	font-size: 0.8725em;
  	-webkit-transition: all 0.3s ease-in-out;
  	-moz-transition: all 0.3s ease-in-out;
  	-o-transition: all 0.3s ease-in-out;
  	transition: all 0.3s ease-in-out;
  }
  .shoping_bag1 h2 a:hover{
  	color: #555555;
  }
  .shoping_bag1 h2 img{
  	vertical-align: text-bottom;
  	margin-right: 5px;
  }
  .shoping_bag1 h2 span{
  	color: #999999;
  }
  .shoping_bag2{
  	padding: 2% 0;
  }
  .shoping_left a.btn1{
  	margin-top:1%;
  	text-transform: capitalize;
  	display: inline-block;
  	padding: 10px 20px;
  	font-size: 1.2em;
  	color: #ffffff;
  	background:#ff6978;
  	-webkit-transition: all 0.3s ease-in-out;
  	-moz-transition: all 0.3s ease-in-out;
  	-o-transition: all 0.3s ease-in-out;
  	transition: all 0.3s ease-in-out;
  }
  .shoping_left a.btn1:hover{
  	background: #00405d;
  	text-decoration:none;
  }
  .shoping_right p span.color{
  	color: #00405d;
  }
  h4.title {
    color: #ff6978;
    margin-bottom: 0.5em;
    font-size: 1.6em;
    line-height: 1.2em;
    background: #F7F7F7;
    padding: 1em;
  }
  p.cart {
    color: #777;
    font-size: 1.2em;
    line-height: 1.8em;
    text-align: left;
  }
  p.cart a {
    text-decoration: underline;
    color: #ff6978;
  }
  .check-out {
    padding: 6em 0;
  }
  /* start contact */
  .contact{
  	margin:2% 0;
  	display: block;
  }
  .contact h2{
  	font-size: 1.5em;
  	color: #00405d;
  	text-shadow: 0 1px 0 #ffffff;
  	text-transform: capitalize;
  }
  .map{
  	margin: 2% 2% 2% 0;
  }
  .col{
  	display: block;
  }
  .contact-form{
  	position:relative;
  }
  .contact-form div{
  	padding:5px 0;
  }
  .contact-form span label{
  	margin-top: 10px;
  	color: #777777;
  	display: block;
  	font-size: 0.8725em;
  	padding-bottom: 5px;
  	text-transform: capitalize;
  	font-weight: normal;
  }
  .contact-form input[type="text"], .contact-form textarea {
  	font-family: 'Open Sans', sans-serif;
  	background: #FFFFFF;
  	border: 1px solid #E7E7E7;
  	color: rgba(85, 81, 81, 0.84);
  	padding: 8px;
  	display: block;
  	width: 96.3333%;
  	outline: none;
  	-webkit-appearance: none;
  	text-transform: capitalize;
  }
  .contact-form textarea{
  	resize:none;
  	height:120px;
  }
  .contact-form input[type="submit"]{
  	margin-top: 10px;
  	-webkit-appearance: none;
  	border: none;
  	outline: none;
  	font-family: 'Open Sans', sans-serif;
  	cursor: pointer;
  	display: inline-block;
  	font-size: 1em;
  	padding: 12px 25px;
  	background:#ff6978;
  	color: #fff;
  	text-transform: uppercase;
  	-webkit-transition: all 0.3s ease-in-out;
  	-moz-transition: all 0.3s ease-in-out;
  	-o-transition: all 0.3s ease-in-out;
  	transition: all 0.3s ease-in-out;
  }
  .contact-form input[type="submit"]:hover{
  	background: #00405d;
  	color: #ffffff;
  }
  /*--media queries--*/
  @media (max-width:1024px){
  .grid_list {
  	padding-bottom: 1.5em;
  	margin-bottom: 1.5em;
  }
  .header_right {
    float: right;
    width: 48%;

  }
  .grid_text h3, .grid_text-middle h3 {
  	font-size: 15px;
  }
  .grid_text p, .grid_text-middle p {
  	font-size: 12px;
  }
  .content_text h4 a {
  	font-size: 1.2em;
  }
  .span1_of_2 {
  	width: 26.33333%;
  }
  .span_3_of_2 {
  	width: 52.3333%;
  }
  .button1 {
  	padding: 7px 10px;
  }
  .view .mask, .view .content {
  	top: 138px;
  	left: 82px;
  }
  .arriv h3 {
    font-size: 1.4em;
  }
  .arriv-info {
    top: 149px;
    left: 72px;
  }
  .arriv-info1 {
    top: 80px;
    left: 147px;
  }
  .arriv-top {
    margin: 1em 0;
  }
  .special {
    padding: 2em 0;
    position: relative;
  }
  .special h3:before {
    left: 35px;
    top: 52px;
  }
  .special h3:after {
    right: 35px;
    top: 52px;
  }
  .specia-top {
    margin: 2em 0;
  }
  .special h5 {
    font-size: 1em;
  }
  .special h6 {
    font-size: 0.9em;
  }
  .special {
    padding: 2em 0 0;
    position: relative;
  }
  .foot-top {
    padding: 1em 0;
  }
  .fooll h5 {
    font-size: 1em;
  }
  .stay form input[type="text"] {
    font-size: 0.9em;
  }
  .btn-1 form input[type="submit"] {
    font-size: 0.93em;
  }
  .footer {
    padding: 2em 0;
  }
  .footer h4 {
    font-size: 1em;
  }
  .cust li a {
    font-size: 0.9em;
  }
  .abt li a {
    font-size:0.9em;
  }
  .myac li a {
     font-size:0.9em;
  }
  .our-st li {
     font-size:0.9em;
  }
  }
  @media (max-width:966px){
  .top_left {
    float: right;
  }
  .top_right {
    float: left;
  }
  .top_bg{
  	text-align:center;
  }
  .sidebar {
  	margin-top: 2em;
  }
  .content_text p {
  	width:80%;
  }
  .grid1{
  	margin-bottom:2em;
  }
  .grid1 img{
  	display: inline;
  }
  .look {
  	right: 240px;
  }
  .w_sidebar {
  	margin-bottom: 3em;
  }
  .view .mask, .view .content {
  	top: 141px;
  	left: 85px;
  }
  .shoping_left h4 a {
  	font-size: 0.85em;
  }
  .shoping_left a.btn1 {
  	padding: 8px 15px;
  	font-size: 1em;
  }
  .reg_fb i {
  	padding: 15px 10px;
  	font-size: 1em;
  }
  .single-bottom2 {
  	margin-bottom: 2em;
  }

  #loginContainer a span {
    padding: 2px 4px;
  }
  .log {
    float: left;
    width: 15%;
  }
  .create_btn a {
    padding: 6px 8px;
    font-size: 0.750em;
  }
  .reg {
    float: left;
    width: 21%;
    margin: 5px 0;
  }
  .icon1 {
    width: 39%;
    margin: 5px 0;
  }
  .icon1 li {
    font-size: 0.85em;
  }
  .create_btn a {
    padding: 6px 8px;
    font-size: 0.750em;
  }
  .look {
  	right: 230px;
  }
  .span1_of_2 {
  	width: 35.33333%;
  }
  .search input[type="text"] {
  	width: 79.33333%;
  }
  .registration h2 {
  	font-size: 1.1em;
  }
  .icon1 ul {
    top: 24px;
    right: -78px;
  }
  .arriv-left {
    float: left;
    width: 50%;
  }
  .arriv-right {
    float: left;
    width: 50%;
  }
  .arriv p {
    font-size: 0.9em;
  }
  .arriv h3 {
    font-size: 1.2em;
  }
  .arriv-info {
    top: 115px;
    left: 40px;
  }
  .arriv-left1 {
    float: left;
    width: 65%;
  }
  .arriv-right1 {
    float: left;
    width: 35%;
  }
  .arriv-right1 {
    float: left;
    width: 32.2%;
    padding: 0;
  }
  .arriv-left1 {
    float: left;
    width: 67.8%;
  }
  .arriv-info3 {
    bottom: 24px;
    left: 22px;
  }
  .arriv-middle {
    float: left;
    width: 33.33%;
    padding: 0 12px;
  }
  .arriv-right2 {
    float: left;
    width: 33.33%;
  }
  .arriv-left2 {
    float: left;
    width: 33.33%;
  }
  i.ars {
    background: url(../images/arrwss.png)no-repeat 16px -1px;
    padding: 0px 33px;
  }
  .arriv-info2 {
    bottom: 20px;
    left: 16px;
  }
  .arriv-info1 {
    top: 60px;
    left: 102px;
  }
  .crt-btn a {
    padding: 4px 8px;
    font-size: 0.85em;
  }
  .special h3 {
    font-size: 1.3em;
    width: 26%;
  }
  .special h3:before {
    height: 8px;
    width: 263px;
    left: 20px;
    top: 50px;
  }
  .special h3:after {
    height: 8px;
    width: 263px;
    right: 20px;
    top: 50px;
  }
  .special h5 {
    font-size: 0.9em;
  }
  .special h6 {
    font-size: 0.8125em;
  }
  .stay {
    margin: 1em 0;
  }
  .foot-top {
    text-align: center;
  }
  .our-st {
    float: left;
    width: 44%;
  }
  .cust {
    float: left;
    width: 21%;
  }
  .cr_btn a {
    padding: 3px 12px;
    font-size: 0.8125em;
  }
  .abt {
    float: left;
    width: 16%;
  }
  .myac {
    float: left;
    width: 19%;
  }
  .footer h4 {
    font-size: 0.875em;
  }
  .cr_btn1 a {
    padding: 2px 11px;
    font-size: 0.8125em;
  }
  .footer p {
    font-size: 0.875em;
    text-align: center;
  }
  .footer {
    padding: 2em 0 1em;
  }
  .box_1 {
    width: 41%;
  }
  }
  @media (max-width:736px){
  .log {
      float: left;
      width: 16%;
  }
  .special h3:before {
      height: 8px;
      width: 252px;
      left: 20px;
      top: 50px;
  }
  .special h3:after {
      height: 8px;
      width: 252px;
      right: 20px;
      top: 50px;
  }
  }
  @media (max-width:667px){
  .arriv-info {
      top: 64px;
      left: 14px;
  }
  .arriv-info1 {
      top: 36px;
      left: 62px;
  }
  .special h3:before {
      height: 8px;
      width: 225px;
      left: 20px;
      top: 50px;
  }
  .special h3:after {
      height: 8px;
      width: 225px;
      right: 20px;
      top: 50px;
  }
  .item_add a {
      padding: 7px 9px;
  }
  .header_right {
      float: right;
      width: 56%;
  }
  #loginBox {
      right: -100px;
  }
  }
  @media (max-width:640px){
  .create_btn a {
  	padding: 10px 5px;
  	font-size: 0.8125em;
  }
  .span1_of_2 {
  	width: 44.33333%;
  }
  .grid1_of_4 {
  	width: 47.22222%;
  }
  .view .mask, .view .content {
  	top: 210px;
  	left: 135px;
  }
  .span_3_of_2 {
  	width: 44.3333%;
  }
  .product-desc {
  	width: 78.3333%;
  }
  .product_price {
  	width: 21.3333%;
  }
  .shoping_right {
  	width: 32.333%;
  }
  .shoping_left {
  	width: 63.333%;
  }
  .reg_fb i {
  	padding: 16px 5px;
  	font-size: 0.85em;
  }
  #loginContainer a span {
    padding: 0px 4px;
    font-size: .8em;
  }
  .reg a {
    font-size: 0.75em;
  }
  .reg {
    width: 20%;
    margin: 1px 0;
  }
  .icon1 li {
    font-size: 0.75em;
  }
  .icon1 {
    width: 39%;
    margin: 2px 0;
  }
  .c2 {
    width: 18px;
    height: 24px;
  }
  .log {
    float: left;
    width: 15%;
  }
  .create_btn a {
    padding: 3px 5px;
    font-size: 0.7em;
  }
  .create_btn {
    float: left;
    width: 20%;
  }
  .icon1 {
    width: 39%;
    margin: 2px 0;
  }
  .header_right {
      float: right;
      width: 60%;
  }
  .rgt-bottom {
    margin-bottom: 0.5em;
  }
  .logo {
      float: left;
      margin: 0.9em 0;
      width: 33%;
  }
  .arriv h3 {
    font-size: 1em;
  }
  .arriv p {
    font-size: 0.8125em;
  }
  .arriv-info {
    top: 92px;
    left: 7px;
  }
  .crt-btn a {
    padding: 4px 8px;
    font-size: 0.8125em;
  }
  .arriv-left {
    float: left;
    width: 50%;
    padding-right: 4px;
  }
  .arriv-right {
    float: left;
    width: 50%;
    padding-left: 4px;
  }
  .arriv-info1 {
    top: 48px;
    left: 72px;
  }
  .arriv-middle {
    float: left;
    width: 33.33%;
    padding: 0 6px;
  }
  .arriv-right2 {
    float: left;
    width: 33.33%;
    padding-left: 4px;
  }
  .arriv-left2 {
    float: left;
    width: 33.33%;
    padding-right: 4px;
  }
  .arriv-info2 {
    bottom: 6px;
    left: 10px;
  }
  .special h3 {
    font-size: 1.2em;
    width: 26%;
    padding:0.25em;
  }
  .special h3:before {
    width: 215px;
    left: 20px;
    top: 28px;
  }
  .special h3:after {
    width: 215px;
    right: 20px;
    top: 28px;
  }
  .special {
    padding: 1em 0 0;
    position: relative;
  }
  .specia-top {
    margin: 1em 0;
  }
  .cust {
    padding: 0 5px;
  }
  .abt {
   padding: 0 5px;
  }
  .myac {
    padding: 0 5px;
  }
  .our-st {
    padding: 0 5px;
  }
  .cust li a {
    font-size: 0.875em;
  }
  .abt li a{
  	font-size: 0.875em;
  }
  .myac li a {
    font-size: 0.875em;
  }
  .our-st li {
    font-size: 0.875em;
  }
  .footer h4 {
    font-size: 0.8125em;
  }
  .box_1 {
    float: left;
    margin: 0.3em 0.1em 0;
  }
  .box_1 h3 {
    font-size: 0.8125em;
  }
  .content_box {
    margin-bottom: 1em;
  }
  .box_1 {
    width: 43%;
  }
  }
  @media (max-width:600px){
  .item_add a {
      padding: 7px 8px;
  }
  }
  @media (max-width:568px){
  .arriv-info {
      top: 48px;
      left: 7px;
  }
  .arriv-info1 {
      top: 26px;
      left: 45px;
  }
  .special h3:before {
      width: 184px;
      left: 20px;
      top: 28px;
  }
  .special h3:after {
      width: 183px;
      right: 20px;
      top: 28px;
  }
  .item_add a {
      padding: 7px 3px;
      font-size: 0.8125em;
  }
  #loginBox {
      right: -61px;
  }
  }
  @media (max-width:480px){
  .top_left h2 {
  	font-size: 11px;
  	line-height: 1.5em;
  }
  .search{
  	display:none;
  }
  .span1_of_4 {
  	width: 46.33333%;
  	margin-left:0;
  }
  .view .mask, .view .content {
  	top: 166px;
  	left: 102px;
  }
  .span_3_of_2 {
  	width: 100%;
  	float:none;
  }
  .images_3_of_2 {
  	width: 100%;
  	float: none;
  	margin-right: 0;
  }
  p.prod-desc, p.product_descr {
  	font-size: 0.8125em;
  }
  .product_price {
  	width: 26.3333%;
  }
  .product-desc {
  	width: 73.3333%;
  }
  .shoping_left {
  	width: 100%;
  	float: none;
  	margin: 0;
  }
  .shoping_right {
  	width: 100%;
  	float: none;
  }
  .registration_left {
  	float: none;
  	width: 100%;
  	margin-left: 0;
  }
  .top_right ul li {
    display: inline-block;
    margin-right: 5px;
  }
  .top_right ul li a {
    padding: 0px 1px;
    font-size: 11px;
  }
  .header_top {
    padding: 13px 0 2px;
  }
  .header_right {
    float: right;
    width: 42%;
  }
  .reg {
    width: 35%;
    margin: 1px 0;
  }
  .icon1 {
    width: 39%;
    margin: 0px 0;
  }
  .logo {
    margin: 0;
  }
  .log {
    float: left;
    width: 45%;
  }
  .rgt-bottom {
    margin: 0;
    padding:0;
  }
  ul.icon1 {
    display: none;
  }
  .arriv-left {
    float: none;
    width: 100%;
    padding-right: 0;
  }
  .arriv-right {
    float: none;
    width: 100%;
    padding-left: 0px;
    margin: 1em 0;
  }
  .arriv-info {
    top: 128px;
    left: 88px;
  }
  .arriv-left1 {
    float: none;
    width: 100%;
    padding: 0;
  }
  .arriv-right1 {
    float: none;
    width: 80%;
    padding: 0;
    margin: 1em auto;
  }
  .arriv-left2 {
    float: none;
    width: 80%;
    padding: 0px;
    margin: 0 auto;
  }
  .arriv-middle {
    float: none;
    width: 80%;
    padding: 0px;
    margin: 1em auto;
  }
  .arriv-right2 {
    float: none;
    width: 80%;
    padding: 0px;
    margin: 0 auto;
  }
  .special h3 {
    font-size: 1.1em;
    width: 35%;
    padding: 0.25em;
  }
  .special h3:before {
    width: 137px;
    left: 20px;
    top: 26px;
  }
  .special h3:after {
    width: 137px;
    right: 20px;
    top: 26px;
  }
  ul.grid_2 li {
    width: 48%;
    float: left;
    margin: 1%;
  }
  .cust {
    float: left;
    width: 33.33%;
  }
  .abt {
    float: left;
    width: 33.33%;
  }
  .myac {
    float: left;
    width: 33.33%;
  }
  .our-st {
    float: left;
    width: 100%;
    margin: 1.5em 0 0;
  }
  .footer p{
  margin:1em 0 0;
  }
  .check {
    padding: 2em 0;
  }
  .box_1 p {
    margin: 0em 0.3em 0;
  }
  .create_btn {
    float: left;
    width: 36%;
  }
  .box_1 {
    width: 62%;
  }
  }
  @media (max-width:414px){
  .header_right {
      float: right;
      width: 52%;
  }
  .logo {
      margin: 0;
      width: 42%;
  }
  .arriv-info {
      top: 64px;
      left: 63px;
  }
  .arriv-info3 {
      bottom: 24px;
      left: 72px;
  }
  .special h3:before {
      height: 8px;
      width: 116px;
      left: 20px;
      top: 27px;
  }
  .special h3:after {
      height: 8px;
      width: 115px;
      right: 20px;
      top: 27px;
  }
  }
  @media (max-width:384px){
  .header_right {
      float: right;
      width: 57%;
  }
  .logo {
      margin: 0;
      width: 36%;
  }
  .arriv-info {
      top: 64px;
      left: 37px;
  }
  .special h3 {
      width: 37%;
  }
  .special h3:before {
      height: 8px;
      width: 101px;
      left: 20px;
      top: 27px;
  }
  .special h3:after {
      height: 8px;
      width: 102px;
      right: 20px;
      top: 27px;
  }
  }
  @media (max-width:375px){
  #loginBox {
      position: absolute;
      top: 44px;
      right: -48px;
      display: none;
      z-index: 29;
  }
  .box_1 {
      width: 62%;
  }
  .logo {
      margin: 0;
      width: 37%;
  }
  .header_right {
      float: right;
      width: 58%;
  }
  .log {
      float: left;
      width: 33%;
  }
  .top_left {
      float: none;
      margin: 0.5em 0;
  }
  .top_right {
      float: none;
  }
  .arriv-info1 {
      top: 29px;
      left: 36px;
  }
  .special h3 {
      font-size: 1.1em;
      width: 39%;
      padding: 0.25em;
  }
  .special h3:before {
      height: 8px;
      width: 95px;
      left: 20px;
      top: 27px;
  }
  .special h3:after{
      height: 8px;
      width: 95px;
      right: 20px;
      top: 27px;
  }
  #loginBox {
      right: -103px;
  }
  }
  @media (max-width:320px){
  ul.icon1 {
  	display: none;
  }
  .logo {
    float: left;
    width: 45%;
  }
  .create_btn {
  	display:none;
  }
  .top_left h2 {
  	font-size: 11px;
  	line-height: 2em;
  }
  .top_right ul li a {
  	padding: 0;
  	font-size: 11px;
  }
  .look {
  	right: 15px;
  }
  #loginForm {
  	width: 270px;
  	background: #fff;
  }
  .top_left {
    float: none;
    text-align: center;
  }
  .top_right {
    float: none;
    text-align: center;
  }
  .reg {
    display: none;
  }
  #loginContainer a span {
    padding: 2px 10px;
    font-size: 1em;
  }
  .rgt-bottom {
    margin: 0;
    padding: 0em 0;
  }
  .log {
    float: left;
    width: 100%;
    display:none;
  }
  .header_right {
    float: right;
    width: 43%;
    margin: 0 auto;
  }
  .arriv-info {
    top: 53px;
    left: 10px;
  }
  .arriv-info1 {
    top: 13px;
    left: 10px;
  }
  .arriv-right1 {
    width: 100%;
  }
  .arriv-left2 {
    width: 100%;
  }
  .arriv-middle {
    width: 100%;
    padding: 0px;
    margin: 1em auto;
  }
  .arriv-info3 {
    bottom: 82px;
    left: 58px;
  }
  .arriv-right2 {
    width: 100%;
    padding: 0px;
    margin: 0 auto;
  }
  .special h3 {
    width: 50%;
  }
  .special h3:before {
    width: 64px;
  }
  .special h3:after {
    width: 64px;
  }
  .special h5 {
    font-size: 0.8125em;
  }
  .special h6 {
    font-size: 0.75em;
  }
  .footer h4 {
    font-size: 0.8em;
  }
  .cust li a {
    font-size: 0.8em;
  }
  .abt li a {
    font-size: 0.8em;
  }
  .myac li a {
    font-size: 0.8em;
  }
  .cust {
    float: left;
    width: 36.33%;
  }
  .abt {
    float: left;
    width: 28.33%;
  }
  .myac {
    float: left;
    width: 35.33%;
  }
  .our-st li {
    font-size: 0.8em;
  }
  .cr_btn a {
    padding: 3px 12px;
    font-size: 0.750em;
  }
  .cr_btn1 a {
    padding: 2px 11px;
    font-size: 0.750em;
  }
  .contact h2 {
    font-size: 1.1em;
  }
  .contact-form div {
    padding: 0px 0;
  }
  .contact-form input[type="text"], .contact-form textarea {
    padding: 6px;
  }
  .button1 {
    padding: 6px 10px;
    font-size: 13px;
  }
  .det {
    padding: 3px;
  }
  .arriv-top {
    margin: 1em 0 0;
  }
  .arriv-bottm {
    margin: 0em 0;
  }
  .stay-left {
    float: none;
    width: 100%;
    margin-right: 0;
  }
  .btn-1 {
    float: none;
    width: 40%;
    margin: 0.5em auto 0;
  }
  .s-c{
  	padding:0;
  }
  .shoping_left a.btn1 {
    padding: 5px 12px;
    font-size: 0.875em;
  }
  .contact-form input[type="submit"] {
    font-size: 0.875em;
    padding: 5px 12px;
  }
  .fooll h5 {
    padding-right: 0em;
    margin-bottom: 0.5em;
  }
  .s-d{
  padding:0;
  }
  .product-img {
    width: 100%;
    float: none;
    margin: 0 auto;
    text-align: center;
  }
  .prod1-desc {
    width: 100%;
    float: none;
    text-align: center;
  }
  .product_price {
    width: 100%;
    float: left;
  }
  .product-desc {
    width: 100%;
    float: none;
  }
  .product_price {
    width: 100%;
    float: none;
    text-align: center;
  }
  .product-desc h5 {
    padding-bottom: 0%;
    padding-top: 2%;
  }
  .btn_form a {
    font-size: 0.875em;
    padding: 4px 22px;
  }
  .row {
    margin-right: 0px;
    margin-left: 0px;
  }
  ul#etalage{
  display: block;
    width: 285px !important;
    height: 533px;
  }
  li.etalage_magnifier{
    left: 74px !important;
  }
  h4.title {
    font-size: 1.4em;
  }
  p.cart {
    font-size: 0.9em;
  }
  .check-out {
    padding: 3em 0;
  }
  .s_art li {
    font-size: 0.8125em;
  }
  .shoping_bag h4 {
    font-size: 0.750em;
  }
  .shoping_left h4 a {
    font-size: 0.750em;
    line-height: 1.8em;
  }
  .shoping_left h4 {
    margin-bottom: 5%;
  }
  .s_icons {
    margin: 4%;
  }
  .shoping_bag1 {
    padding: 2% 0%;
  }
  .shoping_bag1 h2 {
    float: none;
  }
  .our-left {
    margin-bottom: 0.8em;
  }
  .desc1 h3 {
    font-size: 1.2em;
  }
  a.cpns {
    padding: 5px;
  }
  a.order {
    text-align: center;
    margin: 1em 0;
  }
  .cart-items h1 {
    font-size: 1.2em;
    margin-bottom: 1em;
  }
  .cart-item-info h3 {
    font-size: 0.875em;
  }
  .delivery {
    margin-top: 1em;
  }
  .close1, .close2 {
    top: 31px;
  }
  .delivery p {
    font-size: 0.8125em;
    float: left;
  }
  .delivery span {
    font-size: 0.8125em;
    float: right;
  }
  .check {
    padding: 2em 0 0;
  }
  .total-item, .cart-items {
    margin-top: 0em;
    padding-bottom: 0em;
  }
  .total-item, .cart-items {
    padding: 0;
  }
  .total-item, .cart-items {
    margin: 1em 0 0;
  }
  .total-item h4 {
    margin-right: 4em;
  }
  a.cpns {
    padding: 8px 10px;
  }
  .cart-total {
    padding: 0;
  }
  .item_add a {
    padding: 7px 10px;
    font-size: 0.8125em;
  }
  .box_1 {
    width: 100%;
    margin:0;
  }
  .arriv-info1 {
      top: 11px;
      left: 8px;
  }
  .box_1 {
      width: 100%;
  }
  .header_right {
      float: right;
      width: 46%;
  }
  }
  .w_content {
    padding: 0;
  }

  
  </style>
<title>Gretong a Ecommerce Category Flat Bootstarp Responsive Website Template | Details :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/etalage.css">
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/jquery.etalage.min.js"></script>
<script src="js/menu_jquery.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>

</head>
<body>
<!-- header_top -->
<div class="top_bg">
	<div class="container">
		<div class="header_top">
			<div class="top_right">
				<ul>
					<li><a href="#">help</a></li>|
					<li><a href="contact.html">Contact</a></li>|
					<li><a href="#">Delivery information</a></li>
				</ul>
			</div>
			<div class="top_left">
				<h2><span></span> Call us : 032 2352 782</h2>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- header -->
<div class="header_bg">
<div class="container">
	<div class="header">
	<div class="head-t">
		<div class="logo">
			<a href="index.html"><img src="images/logo.png" class="img-responsive" alt=""/> </a>
		</div>
		<!-- start header_right -->
		<div class="header_right">
			<div class="rgt-bottom">
				<div class="log">
					<div class="login" >
						<div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
						    <div id="loginBox">
						        <form id="loginForm">
						                <fieldset id="body">
						                	<fieldset>
						                          <label for="email">Email Address</label>
						                          <input type="text" name="email" id="email">
						                    </fieldset>
						                    <fieldset>
						                            <label for="password">Password</label>
						                            <input type="password" name="password" id="password">
						                     </fieldset>
						                    <input type="submit" id="login" value="Sign in">
						                	<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
						            	</fieldset>
						            <span><a href="#">Forgot your password?</a></span>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="reg">
					<a href="register.html">REGISTER</a>
				</div>
			<div class="cart box_1">
				<a href="checkout.html">
					<h3> <span class="simpleCart_total">$0.00</span> (<span id="simpleCart_quantity" class="simpleCart_quantity">0</span> items)<img src="images/bag.png" alt=""></h3>
				</a>
				<p><a href="javascript:;" class="simpleCart_empty">(empty card)</a></p>
				<div class="clearfix"> </div>
			</div>
			<div class="create_btn">
				<a href="checkout.html">CHECKOUT</a>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="search">
		    <form>
		    	<input type="text" value="" placeholder="search...">
				<input type="submit" value="">
			</form>
		</div>
		<div class="clearfix"> </div>
		</div>
		<div class="clearfix"> </div>
	</div>
		<!-- start header menu -->
			<ul class="megamenu skyblue">
			<li class="active grid"><a class="color1" href="index.html">Home</a></li>
			<li class="grid"><a class="color2" href="#">new arrivals</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">brands</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="women.html">Pools&Tees</a></li>
									<li><a href="women.html">shirts</a></li>
									<li><a href="women.html">shorts</a></li>
									<li><a href="women.html">twinsets</a></li>
									<li><a href="women.html">kurts</a></li>
									<li><a href="women.html">jackets</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="women.html">Handbag</a></li>
									<li><a href="women.html">Slingbags</a></li>
									<li><a href="women.html">Clutches</a></li>
									<li><a href="women.html">Totes</a></li>
									<li><a href="women.html">Wallets</a></li>
									<li><a href="women.html">Laptopbags</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="#">login</a></li>
									<li><a href="register.html">create an account</a></li>
									<li><a href="women.html">create wishlist</a></li>
									<li><a href="women.html">my shopping bag</a></li>
									<li><a href="women.html">brands</a></li>
									<li><a href="women.html">create wishlist</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="women.html">Belts</a></li>
									<li><a href="women.html">Pens</a></li>
									<li><a href="women.html">Eyeglasses</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">Watches</a></li>
									<li><a href="women.html">Jewellery</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
			<li><a class="color4" href="#">TUXEDO</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">brands</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="women.html">Pools&Tees</a></li>
									<li><a href="women.html">shirts</a></li>
									<li><a href="women.html">shorts</a></li>
									<li><a href="women.html">twinsets</a></li>
									<li><a href="women.html">kurts</a></li>
									<li><a href="women.html">jackets</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="women.html">Handbag</a></li>
									<li><a href="women.html">Slingbags</a></li>
									<li><a href="women.html">Clutches</a></li>
									<li><a href="women.html">Totes</a></li>
									<li><a href="women.html">Wallets</a></li>
									<li><a href="women.html">Laptopbags</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="#">login</a></li>
									<li><a href="register.html">create an account</a></li>
									<li><a href="women.html">create wishlist</a></li>
									<li><a href="women.html">my shopping bag</a></li>
									<li><a href="women.html">brands</a></li>
									<li><a href="women.html">create wishlist</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="women.html">Belts</a></li>
									<li><a href="women.html">Pens</a></li>
									<li><a href="women.html">Eyeglasses</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">Watches</a></li>
									<li><a href="women.html">Jewellery</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
				<li><a class="color5" href="#">SWEATER</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">brands</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="women.html">Pools&Tees</a></li>
									<li><a href="women.html">shirts</a></li>
									<li><a href="women.html">shorts</a></li>
									<li><a href="women.html">twinsets</a></li>
									<li><a href="women.html">kurts</a></li>
									<li><a href="women.html">jackets</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="women.html">Handbag</a></li>
									<li><a href="women.html">Slingbags</a></li>
									<li><a href="women.html">Clutches</a></li>
									<li><a href="women.html">Totes</a></li>
									<li><a href="women.html">Wallets</a></li>
									<li><a href="women.html">Laptopbags</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="#">login</a></li>
									<li><a href="register.html">create an account</a></li>
									<li><a href="women.html">create wishlist</a></li>
									<li><a href="women.html">my shopping bag</a></li>
									<li><a href="women.html">brands</a></li>
									<li><a href="women.html">create wishlist</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="women.html">Belts</a></li>
									<li><a href="women.html">Pens</a></li>
									<li><a href="women.html">Eyeglasses</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">Watches</a></li>
									<li><a href="women.html">Jewellery</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
				<li><a class="color6" href="#">SHOES</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">brands</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="women.html">Pools&Tees</a></li>
									<li><a href="women.html">shirts</a></li>
									<li><a href="women.html">shorts</a></li>
									<li><a href="women.html">twinsets</a></li>
									<li><a href="women.html">kurts</a></li>
									<li><a href="women.html">jackets</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="women.html">Handbag</a></li>
									<li><a href="women.html">Slingbags</a></li>
									<li><a href="women.html">Clutches</a></li>
									<li><a href="women.html">Totes</a></li>
									<li><a href="women.html">Wallets</a></li>
									<li><a href="women.html">Laptopbags</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="#">login</a></li>
									<li><a href="register.html">create an account</a></li>
									<li><a href="women.html">create wishlist</a></li>
									<li><a href="women.html">my shopping bag</a></li>
									<li><a href="women.html">brands</a></li>
									<li><a href="women.html">create wishlist</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="women.html">Belts</a></li>
									<li><a href="women.html">Pens</a></li>
									<li><a href="women.html">Eyeglasses</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">Watches</a></li>
									<li><a href="women.html">Jewellery</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>

				<li><a class="color7" href="#">GLASSES</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">brands</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="women.html">Pools&Tees</a></li>
									<li><a href="women.html">shirts</a></li>
									<li><a href="women.html">shorts</a></li>
									<li><a href="women.html">twinsets</a></li>
									<li><a href="women.html">kurts</a></li>
									<li><a href="women.html">jackets</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="women.html">Handbag</a></li>
									<li><a href="women.html">Slingbags</a></li>
									<li><a href="women.html">Clutches</a></li>
									<li><a href="women.html">Totes</a></li>
									<li><a href="women.html">Wallets</a></li>
									<li><a href="women.html">Laptopbags</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="#">login</a></li>
									<li><a href="register.html">create an account</a></li>
									<li><a href="women.html">create wishlist</a></li>
									<li><a href="women.html">my shopping bag</a></li>
									<li><a href="women.html">brands</a></li>
									<li><a href="women.html">create wishlist</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="women.html">Belts</a></li>
									<li><a href="women.html">Pens</a></li>
									<li><a href="women.html">Eyeglasses</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">Watches</a></li>
									<li><a href="women.html">Jewellery</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>

				<li><a class="color8" href="#">T-SHIRT</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">brands</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="women.html">trends</a></li>
									<li><a href="women.html">sale</a></li>
									<li><a href="women.html">style videos</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="women.html">trends</a></li>
									<li><a href="women.html">sale</a></li>
									<li><a href="women.html">style videos</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="#">login</a></li>
									<li><a href="register.html">create an account</a></li>
									<li><a href="women.html">create wishlist</a></li>
									<li><a href="women.html">my shopping bag</a></li>
									<li><a href="women.html">brands</a></li>
									<li><a href="women.html">create wishlist</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="women.html">trends</a></li>
									<li><a href="women.html">sale</a></li>
									<li><a href="women.html">style videos</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
				<li><a class="color9" href="#">WATCHES</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">brands</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="women.html">trends</a></li>
									<li><a href="women.html">sale</a></li>
									<li><a href="women.html">style videos</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="women.html">trends</a></li>
									<li><a href="women.html">sale</a></li>
									<li><a href="women.html">style videos</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="#">login</a></li>
									<li><a href="register.html">create an account</a></li>
									<li><a href="women.html">create wishlist</a></li>
									<li><a href="women.html">my shopping bag</a></li>
									<li><a href="women.html">brands</a></li>
									<li><a href="women.html">create wishlist</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="women.html">trends</a></li>
									<li><a href="women.html">sale</a></li>
									<li><a href="women.html">style videos</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
		 </ul>
	</div>
</div>
</div>
<!-- content -->
<div class="container">
<div class="women_main">
	<!-- start content -->
			<div class="row single">
				<div class="col-md-9 det">
				  <div class="single_left">
					<div class="grid images_3_of_2">
						<ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="images/d1.jpg" class="img-responsive" />
									<img class="etalage_source_image" src="images/d1.jpg" class="img-responsive" title="" />
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/d2.jpg" class="img-responsive" />
								<img class="etalage_source_image" src="images/d2.jpg" class="img-responsive" title="" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/d3.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="images/d3.jpg"class="img-responsive"  />
							</li>
						    <li>
								<img class="etalage_thumb_image" src="images/d4.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="images/d4.jpg"class="img-responsive"  />
							</li>
						</ul>
						 <div class="clearfix"></div>
				  </div>
				  <div class="desc1 span_3_of_2">
					<h3>soluta nobis eleifend option</h3>
					<span class="brand">Brand: <a href="#">Sed do eiusmod </a></span>
					<br>
					<span class="code">Product Code: Product 11</span>
					<p>when an unknown printer took a galley of type and scrambled it to make</p>
						<div class="price">
							<span class="text">Price:</span>
							<span class="price-new">$110.00</span><span class="price-old">$100.00</span>
							<span class="price-tax">Ex Tax: $90.00</span><br>
							<span class="points"><small>Price in reward points: 400</small></span><br>
						</div>
					<div class="det_nav1">
						<h4>Select a size :</h4>
							<div class=" sky-form col col-4">
								<ul>
									<li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>L</label></li>
									<li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>S</label></li>
									<li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>M</label></li>
									<li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>XL</label></li>
								</ul>
							</div>
					</div>
					<div class="btn_form">
						<a href="checkout.html">buy</a>
					</div>
					<a href="#"><span>login to save in wishlist </span></a>

			   	 </div>
          	    <div class="clearfix"></div>
          	   </div>
          	    <div class="single-bottom1">
					<h6>Details</h6>
					<p class="prod-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option</p>
				</div>
				<div class="single-bottom2">
					<h6>Related Products</h6>
						<div class="product">
						   <div class="product-desc">
								<div class="product-img">
		                           <img src="images/w8.jpg" class="img-responsive " alt=""/>
		                       </div>
		                       <div class="prod1-desc">
		                           <h5><a class="product_link" href="#">Excepteur sint</a></h5>
		                           <p class="product_descr"> Vivamus ante lorem, eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
							   </div>
							  <div class="clearfix"></div>
					      </div>
						  <div class="product_price">
								<span class="price-access">$597.51</span>
								<button class="button1"><span>Add to cart</span></button>
		                  </div>
						 <div class="clearfix"></div>
				     </div>
				     <div class="product">
						   <div class="product-desc">
								<div class="product-img">
		                           <img src="images/w10.jpg" class="img-responsive " alt=""/>
		                       </div>
		                       <div class="prod1-desc">
		                           <h5><a class="product_link" href="#">Excepteur sint</a></h5>
		                           <p class="product_descr"> Vivamus ante lorem, eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
							   </div>
							   <div class="clearfix"></div>
					      </div>
						  <div class="product_price">
								<span class="price-access">$597.51</span>
								<button class="button1"><span>Add to cart</span></button>
		                  </div>
						 <div class="clearfix"></div>
				     </div>
		   	  </div>
	       </div>
	<div class="col-md-3">
	  <div class="w_sidebar">
		<div class="w_nav1">
			<h4>All</h4>
			<ul>
				<li><a href="women.html">women</a></li>
				<li><a href="#">new arrivals</a></li>
				<li><a href="#">trends</a></li>
				<li><a href="#">boys</a></li>
				<li><a href="#">girls</a></li>
				<li><a href="#">sale</a></li>
			</ul>
		</div>
		<h3>filter by</h3>
		<section  class="sky-form">
					<h4>catogories</h4>
						<div class="row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>kurtas</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>kutis</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>churidar kurta</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>salwar</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>printed sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>shree</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>biba</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
							</div>
						</div>
		</section>
		<section  class="sky-form">
					<h4>brand</h4>
						<div class="row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>shree</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>biba</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>vishud</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>amari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>shree</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>biba</label>
								<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>shree</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>biba</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>shree</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>biba</label>
							</div>
						</div>
		</section>
		<section class="sky-form">
			<h4>colour</h4>
			<ul class="w_nav2">
				<li><a class="color1" href="#"></a></li>
				<li><a class="color2" href="#"></a></li>
				<li><a class="color3" href="#"></a></li>
				<li><a class="color4" href="#"></a></li>
				<li><a class="color5" href="#"></a></li>
				<li><a class="color6" href="#"></a></li>
				<li><a class="color7" href="#"></a></li>
				<li><a class="color8" href="#"></a></li>
				<li><a class="color9" href="#"></a></li>
				<li><a class="color10" href="#"></a></li>
				<li><a class="color12" href="#"></a></li>
				<li><a class="color13" href="#"></a></li>
				<li><a class="color14" href="#"></a></li>
				<li><a class="color15" href="#"></a></li>
				<li><a class="color5" href="#"></a></li>
				<li><a class="color6" href="#"></a></li>
				<li><a class="color7" href="#"></a></li>
				<li><a class="color8" href="#"></a></li>
				<li><a class="color9" href="#"></a></li>
				<li><a class="color10" href="#"></a></li>
			</ul>
		</section>
		<section class="sky-form">
						<h4>discount</h4>
						<div class="row1 scroll-pane">
							<div class="col col-4">
								<label class="radio"><input type="radio" name="radio" checked=""><i></i>60 % and above</label>
								<label class="radio"><input type="radio" name="radio"><i></i>50 % and above</label>
								<label class="radio"><input type="radio" name="radio"><i></i>40 % and above</label>
							</div>
							<div class="col col-4">
								<label class="radio"><input type="radio" name="radio"><i></i>30 % and above</label>
								<label class="radio"><input type="radio" name="radio"><i></i>20 % and above</label>
								<label class="radio"><input type="radio" name="radio"><i></i>10 % and above</label>
							</div>
						</div>
		</section>
	</div>
   </div>
		   <div class="clearfix"></div>
	  </div>
	<!-- end content -->
</div>
</div>
<div class="foot-top">
	<div class="container">
		<div class="col-md-6 s-c">
			<li>
				<div class="fooll">
					<h5>follow us on</h5>
				</div>
			</li>
			<li>
				<div class="social-ic">
					<ul>
						<li><a href="#"><i class="facebok"> </i></a></li>
						<li><a href="#"><i class="twiter"> </i></a></li>
						<li><a href="#"><i class="goog"> </i></a></li>
						<li><a href="#"><i class="be"> </i></a></li>
						<li><a href="#"><i class="pp"> </i></a></li>
							<div class="clearfix"></div>
					</ul>
				</div>
			</li>
				<div class="clearfix"> </div>
		</div>
		<div class="col-md-6 s-c">
			<div class="stay">
						<div class="stay-left">
							<form>
								<input type="text" placeholder="Enter your email to join our newsletter" required="">
							</form>
						</div>
						<div class="btn-1">
							<form>
								<input type="submit" value="join">
							</form>
						</div>
							<div class="clearfix"> </div>
			</div>
		</div>
			<div class="clearfix"> </div>
	</div>
</div>
<div class="footer">
	<div class="container">
		<div class="col-md-3 cust">
			<h4>CUSTOMER CARE</h4>
				<li><a href="#">Help Center</a></li>
				<li><a href="#">FAQ</a></li>
				<li><a href="buy.html">How To Buy</a></li>
				<li><a href="#">Delivery</a></li>
		</div>
		<div class="col-md-2 abt">
			<h4>ABOUT US</h4>
				<li><a href="#">Our Stories</a></li>
				<li><a href="#">Press</a></li>
				<li><a href="#">Career</a></li>
				<li><a href="contact.html">Contact</a></li>
		</div>
		<div class="col-md-2 myac">
			<h4>MY ACCOUNT</h4>
				<li><a href="register.html">Register</a></li>
				<li><a href="#">My Cart</a></li>
				<li><a href="#">Order History</a></li>
				<li><a href="buy.html">Payment</a></li>
		</div>
		<div class="col-md-5 our-st">
			<div class="our-left">
				<h4>OUR STORES</h4>
			</div>
			<div class="our-left1">
				<div class="cr_btn">
					<a href="#">SOLO</a>
				</div>
			</div>
			<div class="our-left1">
				<div class="cr_btn1">
					<a href="#">BOGOR</a>
				</div>
			</div>
			<div class="clearfix"> </div>
				<li><i class="add"> </i>Jl. Haji Muhidin, Blok G no.69</li>
				<li><i class="phone"> </i>025-2839341</li>
				<li><a href="mailto:info@example.com"><i class="mail"> </i>info@sitename.com </a></li>

		</div>
		<div class="clearfix"> </div>
			<p>Copyrights © 2015 Gretong. All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a></p>
	</div>
</div>
</body>
</html>
