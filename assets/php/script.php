<!-- Jquery-3.5.1.Slim.Min.JS -->
<script src="assets/js/jquery-3.5.1.slim.min.js"></script>
<!-- Popper JS -->
<script src="assets/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Meanmenu JS -->
<script src="assets/js/jquery.meanmenu.js"></script>
<!-- Wow JS -->
<script src="assets/js/wow.min.js"></script>
<!-- Owl Carousel JS -->
<script src="assets/js/owl.carousel.js"></script>
<!-- Owl Magnific JS -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- Nice Select JS -->
<script src="assets/js/jquery.nice-select.min.js"></script>
<!-- Parallax JS --> 
<script src="assets/js/parallax.min.js"></script>
<!-- Appear JS --> 
<script src="assets/js/jquery.appear.js"></script>
<!-- Odometer JS --> 
<script src="assets/js/odometer.min.js"></script>
<!-- Odometer JS --> 
<script src="assets/js/bootstrap-datepicker.min.js"></script>
<!-- Form Validator JS -->
<script src="assets/js/form-validator.min.js"></script>
<!-- Contact JS -->
<script src="assets/js/contact-form-script.js"></script>	
<script src="assets/js/custom.js"></script>
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script> -->
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js" charset="utf-8"></script> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.7/raphael.min.js" charset="utf-8"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mapael/2.1.0/js/jquery.mapael.min.js" charset="utf-8"></script>               
<script type="text/javascript" src="assets/js/mexico.js" charset="utf-8"></script>
<script>
			var url = window.location.pathname;
			var filename = url.substring(url.lastIndexOf('/')+1);
			$(".menu_activo").removeClass("menu_activo");
			$('.nav-link[href="' + filename + '"]').addClass("menu_activo");
            console.log(filename);
</script>
<script>
        $(function () {
            $(".mapcontainer").mapael({
                map: {
                    name: "mexico"

                    // Set default plots and areas style
                    
                    // estados coloreados por default
                    , defaultArea: {
                        attrs: {
                            fill: "#5d5d5d" //color de estados default 
                            , stroke: "#ced8d0" // color en divisiones de estados
                        }
                        , attrsHover: {
                            fill: "#5d5d5d" //color estados al seleccionar
                        }
                        , text: {
                            attrs: {
                                fill: "#505444"
                            }
                            , attrsHover: {
                                fill: "#000"
                            }
                        }
                    }
                },

                // Listado de estados
                areas: {                    
                    "puebla": {
                        attrs: {
                            fill: "#5d5d5d" //color estados por default
                        }
                        , attrsHover: {
                            fill: "#E25224"  // color estados seleccionados
                        },
                        value: "1"
                    },
                    "veracruz": {
                        attrs: {
                            fill: "#5d5d5d"
                        }
                        , attrsHover: {
                            fill: "#E25224"
                        },
                        value: "2"
                    },
                    "morelos": {
                        attrs: {
                            fill: "#5d5d5d"
                        }
                        , attrsHover: {
                            fill: "#E25224"
                        },
                        value: "3"
                    },
                    "oaxaca": {
                        attrs: {
                            fill: "#5d5d5d"
                        }
                        , attrsHover: {
                            fill: "#E25224"
                        },
                        value: "4"
                    },
                    "tabasco": {
                        attrs: {
                            fill: "#5d5d5d"
                        }
                        , attrsHover: {
                            fill: "#E25224"
                        },
                        value: "5"
                    },
                    "hidalgo": {
                        attrs: {
                            fill: "#5d5d5d"
                        }
                        , attrsHover: {
                            fill: "#E25224"
                        },
                        value: "6"
                    },
					"tlaxcala": {
                        attrs: {
                            fill: "#5d5d5d"
                        }
                        , attrsHover: {
                            fill: "#E25224"
                        },
                        value: "7"
                    },
                    "queretaro": {
                        attrs: {
                            fill: "#5d5d5d"
                        }
                        , attrsHover: {
                            fill: "#E25224"
                        },
                        value: "8"
                    },
                    "michoacan": {
                        attrs: {
                            fill: "#5d5d5d"
                        }
                        , attrsHover: {
                            fill: "#E25224"
                        },
                        value: "9"
                    }
					
                },
                legend: {
                    area: {
                        title: "", 
                        slices: [
                            {
                                max: 1,
                                attrs: {
                                    fill: "#5d5d5d"
                                },
                                label: "PUEBLA"
                            },
                            {
                                max: 2,
                                attrs: {
                                    fill: "#5d5d5d"
                                },
                                label: "VERACRUZ"
                            },
							{
                                max: 3,
                                attrs: {
                                    fill: "#5d5d5d"
                                },
                                label: "MORELOS"
                            },
							{
                                max: 4,
                                attrs: {
                                    fill: "#5d5d5d"
                                },
                                label: "OAXACA"
                            },
							{
                                max: 5,
                                attrs: {
                                    fill: "#5d5d5d"
                                },
                                label: "TABASCO"
                            },
							{
                                max: 6,
                                attrs: {
                                    fill: "#5d5d5d"
                                },
                                label: "HIDALGO"
                            },
							{
                                max: 7,
                                attrs: {
                                    fill: "#5d5d5d"
                                },
                                label: "TLAXCALA"
                            },
							{
                                max: 8,
                                attrs: {
                                    fill: "#5d5d5d"
                                },
                                label: "QUERÉTARO"
                            },
							{
                                max: 9,
                                attrs: {
                                    fill: "#5d5d5d"
                                },
                                label: "MICHOACÁN"
                            },
                            
                        ]
                    }
                }
             
            });
        });
        // var areas_hidden = 'show';
        // $('#button-areas').on('click', function () { 
        //     areas_hidden = (areas_hidden == 'show') ? 'hide' : 'show';

        //     $(".mapcontainer").trigger('update', [{
        //             setLegendElemsState: {"areaLegend": areas_hidden},
        //             animDuration: 1000
        //         }]);
        //  });
    
        </script>
