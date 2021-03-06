<?php
    header("Content-type: text/css; charset: UTF-8");
?>
body {
    background-image: url('../img/background.jpg');
    font-family: 'PT Sans';
    color: lightgrey;
}

a {
    text-decoration: none;
    color: lightgrey;

}

li a {
    font-weight: 600;
    text-transform: uppercase;
    font-size: 90%;
}

.content-list {
    border: 1px solid black;
    width: 250px;
}

.content-list > li > p {
    padding-left: 20px;
}

.content-list-a-no-fckin-shit-css-stop-fckin-around-with-me {
    font-weight: 100;
    text-transform: none;
    color: rgb(255, 0, 0);
}

.content-list h4 {
    text-align: center;
    margin: 0;
    padding-right: 40px;
}

.no-text-transform {
    text-transform: none;
}

.no-dots-ul {
    list-style-type: none;
}

.bg-white {
    background-color: rgb(63, 63, 63);
}

.wrapper {
    max-width: 70%;
    min-width: 810px;
    height: 10em;
    margin: 0 auto;
}

#header {
    padding: 1em;
}

<?php
  $bg = array('fuhrpark_header_0001.png', 'fuhrpark_header_0002.png', 'fuhrpark_header_0003.png', 'fuhrpark_header_0004.png', 'fuhrpark_header_0005.png', 'fuhrpark_header_0006.png', 'fuhrpark_header_0007.png', 'fuhrpark_header_0008.png', 'fuhrpark_header_0009.png' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>

#header .header-bg {
    background: url('/img/header/<?php echo $selectedBg; ?>') center center no-repeat;
    height: 300px; 
    background-size: contain;
}

.logo-wrapper {
    position: relative;
    max-width: 15em;
    max-height: 7em;
    /*25em*/
}

.logo-img {
    max-width: 20em;
    margin-bottom: .25em;
    height: 6em;
    width: auto;
}

.logo-title {
    position: absolute;
    left: 5em;
    top: 0em
}

.logo-title h1,
.logo-title h2 {
    margin: 0 0 .15em 0;
}

.logo-title h2 {
    font-size: 1em;
    color: #5ed88a;
}

.nav-wrapper ul {
    padding: 0;
    position: relative;
    display: flex;
    list-style: none;
    justify-content: center;
    align-items: center;
}

.nav-wrapper ul li {
    background: rgb(63, 63, 63);
    width: 100%;
    position: relative;
    height: 3em;
}

.nav-wrapper ul li a {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 1em;
    height: 100%;
}

.nav-wrapper ul li a img {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 1em;
    height: 50%;
    float: left
}

.nav-wrapper ul li:hover {
    background: grey;
}

.nav-wrapper > ul > li > ul {
    position: absolute;
    left: 0;
    top: 3em;
    display: none;
    width: 100%;
    z-index: 100;
}

.nav-wrapper > ul > li:hover > ul, .nav-wrapper > ul > li:active > ul {
    display: block;
}

.nav-wrapper > ul > li > ul > li {
    padding: 0;
}

.mode-wrapper ul {
    padding: 0;
    position: relative;
    display: flex;
    list-style: none;
    justify-content: center;
    align-items: center;
}

.mode-wrapper ul li {
    background: rgb(63, 63, 63);
    width: 200px;
    position: relative;
    height: 3em;
}

.mode-wrapper ul li a {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 1em;
    height: 100%;
}

.mode-wrapper ul li a img {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 1em;
    height: 50%;
    float: left
}

.mode-wrapper ul li:hover {
    background: grey;
}

.mode-wrapper > ul > li > ul {
    position: absolute;
    left: 0;
    top: 3em;
    display: none;
    width: 100%;
    z-index: 100;
}

.mode-wrapper > ul > li:hover > ul {
    display: block;
}

.mode-wrapper > ul > li > ul > li {
    padding: 0;
}

.a-index::before {
    content: '\f0a9';
    padding-right: .3em;

}

li a:hover > .a-index::before {
    content: '\f0ab';
    color: #fff;
}

#content {
    padding: 1em;
}

@media screen and (max-width: 860px) {
    .nav-wrapper ul {
        flex-flow: column nowrap;
    }

    .nav-wrapper ul a {
        width: auto;
    }

    .mode-wrapper ul {
        flex-flow: column nowrap;
    }

    .mode-wrapper ul a {
        width: auto;
    }

    .logo-wrapper {}
}

@media screen and (max-width: 810px) {
    .wrapper {
        min-width: 95%;
        max-width: 95%;
    }
}

h1 {
    font-size: 1.9em;
}

p {
    margin: 0;
    padding-bottom: .1em;
}

.footer {
    font-weight: bolder;
    color: darkslategray;
    float: right;
}

.footer-link {
    font-weight: bolder;
    color: darkslategray;
    padding-right: 10%;
    float: left;
}

.footer-p {
    font-weight: bolder;
    color: darkslategray;
    padding-left: 5%;
}

.hitCounterA {
    float: left;
}

.footer-link_ru {
    font-weight: bolder;
    color: darkslategray;
    padding-right: 10%;
    float: left;
}

@media screen and (max-width: 1920px) {
    .footer-p {
        font-weight: bolder;
        color: darkslategray;
        padding-left: 3%;
    }
}

.hypesquad {
    width: 100%;
    color: darkslategray;
}

.container-hypesquad {
    width: 25%;
    float: left;
    text-align: center;
    font-weight: bolder;

}

.red-link {
    color: rgb(255, 123, 0);
}

.hinweis {
    font-size: .75em;
}

.twitch_clips {
    display: flex;
}

.clip_left {
    margin: 0 .5em 1em 10%;
}

.clip_right {
    margin: 0 .5em 1em 10%;
}

@media screen and (max-width: 1900px) {
    .twitch_clips {
        flex-flow: column nowrap;
        margin-left: 23%;
        width: auto;
    }

    .clip_left {
        margin-left: 0em;
        margin-right: 0em;
    }

    .clip_right {
        margin-left: 0em;
        margin-right: 0em;
    }

    .footer-link {
        padding-right: 10%;
    }
}

@media screen and (max-width: 1340px) {
    .footer-link {
        padding-right: 5%;
    }
}

@media screen and (max-width: 810px) {
    .twitch_clips {
        flex-flow: column nowrap;
        margin-left: 0;
        width: auto;
    }

    .vjs-default-skin {
        max-width: 100%;
        max-height: 100%;
    }

    .footer {
        max-width: 17em;
    }
}

.activity-feed {
    border-bottom: thick solid #2f4f4f;
}

p .activity-feed {
    border-bottom: none;
}

.partner-list {
    list-style: none;
}

.default-font {
    font-family: 'PT Sans';
}

li > span > a{
    color: rgb(255, 123, 0);
}     

.vehiclelist{
    text-align: center;
    margin-left: 15%;
    max-width: 80%;
    border: 1px solid grey;
    border-collapse: collapse;
}

.itemlist{
    text-align: center;
    margin-left: 25%;
    max-width: 80%;
    border: 1px solid black;
    border-collapse: collapse;
}

td > a {
    color: rgb(255, 123, 0);
}

.td > a {
    color: rgb(255, 123, 0);
}

.compare-td > a {
    color: rgb(255, 123, 0);
}

td, th, .td, .th, .vehicle-filter, .item-filter   {
    width: 110px;
    border: 1px solid black;
    border-collapse: collapse;
}
.compare-td {
    border: 1px solid black;
    border-collapse: collapse;
    min-width: 160px;
    max-width: 160px;
    min-height: 50px;
}

.compare-th {
    border: 1px solid black;
    border-collapse: collapse;
    min-width: 160px;
    max-width: 160px;
    min-height: 50px;
}

#compare {
    margin-left: 15%;
    max-width: 80%;
    margin-bottom: 2vh;
}

@media screen and (max-width: 860px) {
    .compare-td {
        margin-right: 0;
    }

    #compare {
        margin-left: 0;
        max-width: 80%;
        margin-bottom: 2vh;
    }
}

.navbar-border {
    border: 1px solid black;
    border-collapse: collapse;
    cursor: pointer;
}

tr:hover {
    background-color: grey;
}

.tr:hover {
    background-color: grey;
}

.tr {
    display: flex;
}

.compare-tr {
    display: flex;
}

.vehicle-img, .vehicle-image {
    height: 90px;
    width: 160px;
}
.vehicle-img-2, .vehicle-image-2 {
    height: 90px;
    width: 204px;
}

.item-img {
    height: 100px;
    width: 100px;
}

.table-large, .table-small, .itemlist-container, .vehiclelist-container-v1 {
    overflow: auto;
}

@media screen and (max-width: 2180px) {
    .vehiclelist, .itemlist {
        text-align: center;
        margin-left: 0;
        max-width: 100%;
    }
}

<?php
    if (isset($_COOKIE['mode'])) {
        if (($_COOKIE['mode']) == null) {
            echo '@media screen and (max-width: 1990px) {
                    .table-large {
                        display: none;
                    }

                    .vehiclelist-container-v1, .table-large {
                        overflow: auto;
                        max-height: 85vh;
                    }
                
                    td {
                        height: 50px;
                    }
                    
                    .td {
                        height: 50px;
                    }
                }
            
                @media screen and (max-height: 840px) {
                    td {
                        height: 20px;
                    }
            
                    .td {
                        height: 20px;
                    }
                }
            
            @media screen and (min-width: 1990px) {
                .table-small {
                    display: none;
                }
            }';
        } else if (($_COOKIE['mode']) == 'horizontal') {
            echo '@media screen and (max-width: 1990px) {
                    .vehiclelist-container-v1 {
                        overflow: auto;
                        max-height: 85vh;
                    }
                }
            
            .table-large {
                display: none;
            }
        
            td {
                height: 50px;
            }
            
            .td {
                height: 50px;
            }
        
            @media screen and (max-height: 840px) {
                td {
                    height: 20px;
                }
        
                .td {
                    height: 20px;
                }
            }';
        } else if (($_COOKIE['mode']) == 'vertical') {
            echo '@media screen and (max-width: 1990px) {
                .vehiclelist-container-v1, .table-large {
                    overflow: auto;
                    max-height: 85vh;
                }
            }
            
            .table-small {
                display: none;
            }';
        }
    } else {
        echo '@media screen and (max-width: 1990px) {
                .table-large {
                    display: none;
                }

                .vehiclelist-container-v1, .table-large {
                    overflow: auto;
                    max-height: 85vh;
                }
            
                td {
                    height: 50px;
                }
                
                .td {
                    height: 50px;
                }
            }
        
            @media screen and (max-height: 840px) {
                td {
                    height: 20px;
                }
        
                .td {
                    height: 20px;
                }
            }
        
        @media screen and (min-width: 1990px) {
            .table-small {
                display: none;
            }
        }';
    }
?>

@media screen and (max-width: 1540px) {
    .vehiclelist, .itemlist {
        text-align: center;
        margin-left: 0;
        max-width: 100%;
    }

    .table-small, .table-large, .itemlist-container, .vehiclelist-container-v1 {
        overflow: auto;
        max-height: 85vh;
    }
}

/* Style the Image Used to Trigger the Modal */
#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
  }
  
  #myImg:hover {opacity: 0.7;}
  
  /* The Modal (background) */
  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
  }
  
  /* Modal Content (Image) */
  .modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
  }
  
  /* Caption of Modal Image (Image Text) - Same Width as the Image */
  #caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
  }
  
  /* Add Animation - Zoom in the Modal */
  .modal-content, #caption {
    animation-name: zoom;
    animation-duration: 0.6s;
  }
  
  @keyframes zoom {
    from {transform:scale(0)}
    to {transform:scale(1)}
  }
  
  /* The Close Button */
  .close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
  }
  
  .close:hover,
  .close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
  }
  
  /* 100% Image Width on Smaller Screens */
  @media only screen and (max-width: 700px){
    .modal-content {
      width: 100%;
    }
  }

  .vehicle-filter-form {
    text-align: center;
    margin-left: 15%;
    max-width: 80%;
    margin-bottom: 2vh;
  }

  .item-filter-form {
    text-align: center;
    margin-left: 15%;
    max-width: 80%;
    margin-bottom: 2vh;
  }
  
  #myInput {
    background-image: url('/img/searchicon.png'); /* Add a search icon to input */
    background-position: 98%; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
    width: 20%; /* Full-width */
    font-size: 16px; /* Increase font-size */
    border: 1px solid #ddd; /* Add a grey border */
    margin-bottom: 12px; /* Add some space below the input */
  }

  #myInputSmall {
    background-image: url('/img/searchicon.png'); /* Add a search icon to input */
    background-position: 98%; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
    width: 20%; /* Full-width */
    font-size: 16px; /* Increase font-size */
    border: 1px solid #ddd; /* Add a grey border */
    margin-bottom: 12px; /* Add some space below the input */
  }

  .text-input {
    background-color: #555555;
    border: 2px solid grey;
    border-radius: 4px;
  }

  .input-submit {
    background-color: #555555;
    border: 1px solid grey;
    border-radius: 4px;
  }

  .alert {
    padding: 20px;
    background-color: #f44336;
    color: white;
    opacity: 1;
    transition: opacity 0.6s;
    margin-bottom: 15px;
  }
  
  .alert.success {background-color: #4CAF50;}
  .alert.info {background-color: #2196F3;}
  .alert.warning {background-color: #ff9800;}
  
  .close-alert {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
  }
  
  .close-alert:hover {
    color: black;
  }

  .search-box{
    width: 300px;
    position: relative;
    display: inline-block;
    font-size: 14px;
}
.search-box input[type="text"]{
    height: 32px;
    padding: 5px 10px;
    border: 1px solid black;
    font-size: 14px;
}
.result{
    position: absolute;        
    z-index: 999;
    top: 100%;
    left: 0;
}
.search-box input[type="text"], .result{
    width: 100%;
    box-sizing: border-box;
}
/* Formatting result items */
.result p{
    background-color: rgb(63, 63, 63);
    margin: 0;
    padding: 7px 10px;
    border: 1px solid black;
    border-top: none;
    cursor: pointer;
}
.result p:hover{
    background: grey;
}

.first_stat {
    color: #4CAF50;
}

.second_stat {
    color: #ff9800;
}

.last_stat {
    color: #f44336;
}

.banner {
    position: fixed;
    top: 0;
    right: 8.5vw;
}

.banner-h1 {
    margin: 0;
    border: 1px solid black;
    border-collapse: collapse;
    padding-left: 10px;
}

.banner-1-img {
    height: 50vh;
    border: 1px solid black;
    border-collapse: collapse;
}

.small-banner-1-img {
    height: 10vh;
}

@media screen and (max-width: 1680px) {
    .banner {
        right: 6.5vw;
    }
}

@media screen and (max-width: 1280px) {
    .banner {
        right: 5.5vw;
    }
}

@media screen and (max-width: 1190px) {
    .banner {
        display: none;
    }
}
@media screen and (min-width: 1190px) {
    .small-banner-1 {
        display: none;
    }
}
   
.comments .comment_header {
    display: flex;
    justify-content: space-between;
    border-bottom: 1px solid #eee;
    padding: 15px 0;
    margin-bottom: 10px;
    align-items: center;
}
.comments .comment_header .total {
    color: #777777;
    font-size: 14px;
}
.comments .comment_header .write_comment_btn {
    margin: 0;
}
.comments .write_comment_btn, .comments .write_comment button {
    display: inline-block;
    background-color: #565656;
    color: #fff;
    text-decoration: none;
    margin: 10px 0 0 0;
    padding: 5px 10px;
    border-radius: 5px;
    font-size: 14px;
    font-weight: 600;
    border: 0;
}
.comments .write_comment_btn:hover, .comments .write_comment button:hover {
    background-color: #636363;
}
.comments .write_comment {
    display: none;
    padding: 20px 0 10px 0;
}
.comments .write_comment textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    height: 150px;
    margin-top: 10px;
}
.comments .write_comment input {
    display: block;
    width: 250px;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-top: 10px;
}
.comments .write_comment button {
    cursor: pointer;
}
.comments .comment {
    padding-top: 10px;
}
.comments .comment .name {
    display: inline;
    padding: 0 5px 3px 0;
    margin: 0;
    font-size: 16px;
    color: #555555;
}
.comments .comment .date {
    color: #888888;
    font-size: 14px;
}
.comments .comment .content {
    padding: 5px 0 5px 0;
}
.comments .comment .reply_comment_btn {
    display: inline-block;
    text-decoration: none;
    margin-bottom: 10px;
    font-size: 14px;
    color: #888888;
}
.comments .comment .replies {
    padding-left: 30px;
}