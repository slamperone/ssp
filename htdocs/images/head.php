<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="SHORTCUT ICON" href="icon.png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Speciality Steel Products</title>
<meta name="description" content="Managing a global workforce and setting global benchmarks is primarily about managing diversity. In a process of inclusive growth, every person contributes to the blueprint of the future and is truly committed to the stated objectives. And one of the key requisites for successful diversity management is a shared vision." />
<meta name="keywords" content="Tata Steel, Corporate Social Responsibility, Triple Bottom Line, Triple Bottom Line Approach, Economic Sustainability, Environment Management, Eco-Citizen, Tata Steel CSR, Tata Steel Rural Development, Corporate Sustainability, Sustainability Report, Tata Steel Sustainability Report, Rural Development Society, Empowering Women" />

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/home-style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- buscador -->
<script type="text/javascript" src="js/jquery.easy-autocomplete.js"></script>
<link href="css/easy-autocomplete.css" rel="stylesheet" type="text/css" />

<link href="scripts/common-styles.css" rel="stylesheet" type="text/css" />
<link href="scripts/dtree.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="scripts/dtree.js"></script>




<script type="text/javascript">
    $(function () {
        $('.bannerAccordian > li').hover(function () {
            var $this = $(this);
            $('.bannerAccordian > li').stop().animate({ 'width': '192px' }, 500);
            $this.stop().animate({ 'width': '324px' }, 500);
            $this.find('.bannerSec').stop().animate({ 'height': '336px' }, 500, function () {
                $this.find('.bannerSec2').fadeIn();
            });
            $this.find('.bannerSec h2').css({ 'padding-top': '35px', 'background': 'none' });
        }, function () {
            var $this = $(this);
            $('.bannerAccordian > li').stop().animate({ 'width': '225px' }, 500);
            $this.stop().animate({ 'width': '225px' }, 500);
            $('.bannerSec').stop().animate({ 'height': '50px' }, 500);
            $('.bannerSec2').fadeOut();
            $this.find('.bannerSec h2').css({ 'padding-top': '15px', 'background': 'url(images/arrow-new.gif) no-repeat 0 21px' });
        })
        $('body').css({'background-color' : '#e5e5e5'});

    var images = ['portada.jpg'];
//  var images = ['conservetopreserve.jpg'];
//    $('#flash-image').css({'background-image': 'url(home-images/' + images[Math.floor(Math.random() * images.length)] + ')'});
$('#flash-image').css({'background-image': 'url(images/bannerHome.jpg'});
var options = {

  url: "txt/busca.json",

   getValue: "seccion",

    template: {
        type: "links",
        fields: {
            link: "liga"
        }
    },

    list: {
        match: {
            enabled: true
        }
    },
    showAnimation: {
            type: "slide",
            time: 350
        },
    hideAnimation: {
            type: "fade",
            time: 200
        }
};

$("#busca").easyAutocomplete(options);

    });
</script>

<link type="text/css" media="screen" rel="stylesheet" href="colorbox.css" />
<script type="text/javascript" src="scripts/jquery.colorbox.js"></script>

<script type="text/javascript">
  $(document).ready(function() {

        $('#nav').prepend("<div class='menuOverlay'></div>");
        $('#nav > li').hover(function(){
            $('.topSearchSec').hide(0);
        if($(this).children('.subnav').length > 0){
        $('.menuOverlay').stop(true,true).fadeIn();
        $('#nav > li > a').css({'color':'#536670'});
        $(this).find('a:first').css({'color':'#0083cb','border-bottom':'1px solid #FFF','height':'37px'});
        $(this).find('.subnav').stop(true,true).slideDown();
        }else{
        $('#nav > li > a').css({'color':'#FFF','height':'36px'});
        $(this).find('a').css({'color':'#0083cb'});
            }
        },
        function(){
            $('.topSearchSec').show(0);
        $('.subnav').stop(true,true).hide();
        $('.menuOverlay').stop(true,true).hide();
        $('#nav > li > a').css({'color':'#FFF','border-bottom':'1px solid #0083cb','height':'36px'});
        })

$('a.gallery').colorbox();

});
  </script>

</head>

<body>